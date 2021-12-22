<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php
//handle page load
//TODO fix join
$user_id = get_user_id();
$per_page = 10;
$params = [];
$total_query = "SELECT count(1) as total FROM CompetitionParticipants 
    INNER JOIN Competitions ON CompetitionParticipants.comp_id = Competitions.id";
$query = " WHERE CompetitionParticipants.user_id = $user_id AND expires < current_timestamp() AND paid_out = 1 ORDER BY expires DESC";
//$base_query = "SELECT id, name, current_participants, min_participants, current_reward, min_score, expires, join_fee, starting_reward 
//    FROM CompetitionParticipants INNER JOIN Competitions ON CompetitionParticipants.comp_id = Competitions.id";
$base_query = "SELECT * FROM CompetitionParticipants INNER JOIN Competitions ON CompetitionParticipants.comp_id = Competitions.id";
paginate($total_query . $query, $params, $per_page);
//$stmt = $db->prepare("SELECT id, name, current_participants, min_participants, current_reward, min_score, expires, join_fee, starting_reward FROM Competitions WHERE expires > current_timestamp() AND paid_out < 1 ORDER BY expires ASC LIMIT 10");
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
$stmt = $db->prepare($base_query . $query);

foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues

$results = [];
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

//print_r($results);

?>

<div class="container-fluid">
    <h1>Past Competitions</h1>
    <table class="table text-light">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Expired</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "name"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?></td>
                        <td><?php se($row, "expires", "-"); ?></td>
                        <td><form method="POST" action ='view_scoreboard.php'>
                            <input type="hidden" name="competition_id" value="<?php se($row, 'id'); ?>" />

                            <input type="submit" class="mt-3 btn btn-primary" value="View Scoreboard " name="viewScoreboard" />
                        </form></td>
                    </tr>
                <?php endforeach; ?>
                
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitions</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
include(__DIR__ . "/../../partials/pagination.php");
?>
