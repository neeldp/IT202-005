<?php
session_start();
require(__DIR__ . "/../../lib/functions.php");

if (isset($_POST["score"])) {
    $score = $_POST['score'];
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Scores(`score`, `user_id`) VALUES (:score, :uid)");
    try{
        $stmt->execute([":uid"=>get_user_id(), ":score"=>$score]);
    }
    catch(PDOException $e){
        error_log(var_export($e, true));
    }
}
?>