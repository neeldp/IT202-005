<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php
$user_id = get_user_id();
$per_page = 10;
$params = [];
$total_query = "SELECT count(1) as total FROM Scores";
$query = " WHERE user_id = :uid ORDER BY created DESC";
$params[":uid"] = $user_id;
$base_query = "SELECT * FROM Scores";
paginate($total_query . $query, $params, $per_page);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
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

?>
<div class="card-text">
    <table class="table text-light">
        <thead>
            <th>Score</th>
            <th>Achieved</th>
        </thead>
        <tbody>
            <?php if (!$results || count($results) == 0) : ?>
                <tr>
                    <td colspan="100%">No scores available</td>
                </tr>
            <?php else : ?>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?php se($result, "score"); ?></td>
                        <td><?php se($result, "created"); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
include(__DIR__ . "/../../partials/pagination.php");
?>