<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();


//handle page load
//TODO fix join
$stmt = $db->prepare("SELECT name, current_participants, min_participants, current_reward, min_score, expires, join_fee  FROM Competitions WHERE expires > current_timestamp() AND paid_out < 1 ORDER BY expires ASC LIMIT 10");

$results = [];
try {
    $stmt->execute();
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) 
{
    echo "There was a problem fetching competitions, please try again later";
    error_log("List competitions error: " . var_export($e, true));
}
?>
<div class="container-fluid">
    <h1>Available Competitions</h1>
    <table class="table text-light">
        <thead>
            <th>Title</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Min Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "name"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?></td>
                        <td><?php se($row, "min_score"); ?></td>
                        <td><?php se($row, "expires", "-"); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
                                <input type="hidden" name="cost" value="<?php se($row, 'join_fee', 0); ?>" />
                                <input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_fee", 0) ?>)" />
                            </form>
                        </td>
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
