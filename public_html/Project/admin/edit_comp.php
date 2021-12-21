<?php
require(__DIR__ . "/../../../partials/nav.php");
?>

<?php
$db = getDB();
if (isset($_POST["edit"])) 
{
    $params = [":title" => $_POST['editTitle'], ":reward" => $_POST['editReward'], ":ms" => $_POST['editMS'], ":mp" => $_POST['editMP'],
        ":jf" => $_POST['editJC'], ":e" => $_POST['editDuration'], ":id" => $_POST['competition_id']];

    $stmt = $db->prepare("UPDATE Competitions set name = :title, current_reward = :reward, min_score = :ms, min_participants = :mp, 
        join_fee = :jf, expires = :e where id = :id");
    try {
        $stmt->execute($params);
    } catch (Exception $e) {
        users_check_duplicate($e->errorInfo);
    }
    echo "Competition successfully edited";
}

$query = "SELECT id, name, min_participants, current_reward, min_score, expires, join_fee FROM Competitions
    WHERE paid_out < 1 ORDER BY expires ASC";
$stmt = $db->prepare($query);

$results = [];
try {
    $stmt->execute(); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>



<div class="container-fluid">
    <?php if (count($results) > 0) : ?>
        <?php foreach ($results as $row) : ?>
            <form method="POST">
                <div class="mb-3">
                    <label for=editTitle class="form-label">Title</label>
                    <input name="editTitle" class="form-control" value="<?php se($row['name']); ?>"/>  
                </div>

                <div class="mb-3">
                    <label for=editReward class="form-label">Reward</label>
                    <input name="editReward" class="form-control" value="<?php se($row['current_reward']); ?>"/>  
                </div>

                <div class="mb-3">
                    <label for="editMS" class="form-label">Min. Score</label>
                    <input name="editMS" class="form-control" value="<?php se($row['min_score']); ?>"/>
                </div>

                <div class="mb-3">
                    <label for="editMP" class="form-label">Min. Participants</label>
                    <input name="editMP" class="form-control" value="<?php se($row['min_participants']); ?>"/>
                </div>

                <div class="mb-3">
                    <label for="editJC" class="form-label">Join Cost</label>
                    <input name="editJC" class="form-control" value="<?php se($row['join_fee']); ?>"/>
                </div>

                <div class="mb-3">
                    <label for="editDuration" class="form-label">Expires </label>
                    <input name="editDuration" class="form-control" value="<?php se($row['expires']); ?>"/>
                </div>
                <input type="hidden" name="competition_id" value="<?php se($row, 'id'); ?>" />

                <input type="submit" class="mt-3 btn btn-primary" value="Edit Competition ". name="edit" />
            </form>
            <br><br>
        <?php endforeach; ?>
    <?php else : ?>
        <?php echo "No Competitions to edit"; ?>
    <?php endif; ?>
<div>