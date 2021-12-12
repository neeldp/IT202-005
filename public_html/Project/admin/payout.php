<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    //die(header("Location: $BASE_PATH" . "home.php"));
    header('location: home.php');
}

$db = getDB();
$calced_comps = [];
$stmt = $db->prepare("SELECT id, name, first_place_per, second_place_per, third_place_per, current_reward FROM Competitions 
    WHERE expires <= CURRENT_TIMESTAMP() AND paid_out = 0 AND current_participants >= min_participants LIMIT 10");

try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $rc = $stmt->rowCount();
        foreach ($r as $row) {
            $fp = floatval(se($row, "first_place_per", 0, false) / 100);
            $sp = floatval(se($row, "second_place_per", 0, false) / 100);
            $tp = floatval(se($row, "third_place_per", 0, false) / 100);
            $reward = (int)se($row, "current_reward", 0, false);
            $title = se($row, "name", "-", false);
            $fpr = ceil($reward * $fp);
            $spr = ceil($reward * $sp);
            $tpr = ceil($reward * $tp);
            $comp_id = se($row, "id", -1, false);
            try {
                $r = get_top_scores_for_comp($comp_id, 3);
                if ($r) {
                    $atleastOne = false;
                    foreach ($r as $index => $row) {
                        //$aid = se($row, "account_id", -1, false);
                        $score = se($row, "score", 0, false);
                        $user_id = se($row, "user_id", -1, false);
                        if ($index == 0) {
                            //if (change_bills($fpr, "won-comp", -1, $aid, "First place in $title with score of $score")) {
                            //    $atleastOne = true;
                            //}
                            //elog("User $user_id First place in $title with score of $score");

                            $stmt = $db->prepare("INSERT INTO PointsHistory(`user_id`, `point_change`, `reason`) VALUES (:uid, :p_c, 'Competition')");
                            try{
                                $stmt->execute([":uid"=>$user_id, "p_c"=>$fpr]);
                            }
                            catch(PDOException $e){
                                error_log(var_export($e, true));
                            }
                            $atleastOne = true;

                        } else if ($index == 1) {
                            //if (change_bills($spr, "won-comp", -1, $aid, "Second place in $title with score of $score")) {
                            //    $atleastOne = true;
                            //}
                            //elog("User $user_id Second place in $title with score of $score");
                            $stmt = $db->prepare("INSERT INTO PointsHistory(`user_id`, `point_change`, `reason`) VALUES (:uid, :p_c, 'Competition')");
                            try{
                                $stmt->execute([":uid"=>$user_id, "p_c"=>$spr]);
                            }
                            catch(PDOException $e){
                                error_log(var_export($e, true));
                            }
                            $atleastOne = true;
                        } else if ($index == 2) {
                            //if (change_bills($tpr, "won-comp", -1, $aid, "Third place in $title with score of $score")) {
                            //    $atleastOne = true;
                            //}
                            //elog("User $user_id Third place in $title with score of $score");
                            $stmt = $db->prepare("INSERT INTO PointsHistory(`user_id`, `point_change`, `reason`) VALUES (:uid, :p_c, 'Competition')");
                            try{
                                $stmt->execute([":uid"=>$user_id, "p_c"=>$tpr]);
                            }
                            catch(PDOException $e){
                                error_log(var_export($e, true));
                            }
                            $atleastOne = true;
                        }
                    }
                    if ($atleastOne) {
                        array_push($calced_comps, $comp_id);
                    }
                } else {

                    echo "No eligible scores";
                }
            } catch (PDOException $e) {
                echo "Getting winners error: ";
            }
        }
    } else {
        echo "No competitions ready\n";
    }
} catch (PDOException $e) {
    echo "Getting Expired Comps error: ";
}

if (count($calced_comps) > 0) {
    $query = "UPDATE Competitions set paid_out = 1 WHERE id in ";
    $query .= " (" . str_repeat("?,", count($calced_comps) - 1) . "?)";
    //error_log("query: $query");
    //error_log("ids: " . var_export($comp_id, true));
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($calced_comps);
        //$updated = $stmt->rowCount();
        //echo "Marked $updated comps complete and calced";
    } catch (PDOException $e) {
        error_log("Closing valid comps error: " . var_export($e, true));
    }
} else {
    echo "No competitions to calc";
}

//close invalid comps
$stmt = $db->prepare("UPDATE Competitions set paid_out = 1 WHERE expires <= CURRENT_TIMESTAMP() AND current_participants < min_participants AND paid_out = 0");
try {
    $stmt->execute();
    $rows = $stmt->rowCount();
} catch (PDOException $e) {
    echo "Closing";
}
?>