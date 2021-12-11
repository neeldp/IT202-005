<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();

if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "cost", 0, false);

    $data = [];
    $stmt = $db->prepare("SELECT * FROM CompetitionParticipants WHERE user_id = :uid AND comp_id = :cid");
    try 
    {
        $stmt->execute([":uid" => get_user_id(), "cid" => $comp_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r)
        {
            $data = $r;
        }
    } 
    catch (PDOException $e) {
        error_log(var_export($e, true));
    }
    if (count($data) == 0){

        //get balance of the user
        $stmt = $db->prepare("SELECT points FROM Users WHERE username = :user");
        try 
        {
            $stmt->execute([":user" => get_username()]);
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($r)
            {
                $data = $r;
            }
        } 
        catch (PDOException $e) {
            error_log(var_export($e, true));
        }

        foreach ($data as $points) : $balance = $points; endforeach;
        $balance = $balance["points"];

        //check if user can afford the competition
        if($balance >= $cost)
        {
            //insert into comp        
            $stmt = $db->prepare("INSERT INTO CompetitionParticipants(`comp_id`, `user_id`) VALUES(:cid, :uid) ");
            try 
            {
                $stmt->execute([":cid" => $comp_id, ":uid" => $user_id]);
            } 
            catch (PDOException $e) {
                error_log(var_export($e, true));
            }

            

            //insert cost entry in points table
            $cost = 0 - $cost;
            
            $stmt = $db->prepare("INSERT INTO PointsHistory(`user_id`, `point_change`) VALUES (:uid, :cost)");
            try
            {
                $stmt->execute([":uid"=>get_user_id(), ":cost"=>$cost]);
            }

            catch(PDOException $e)
            {
                error_log(var_export($e, true));
            }

            
            //update user points
            $query = "UPDATE Users SET points = (SELECT IFNULL(sum(point_change),0) FROM PointsHistory WHERE user_id = :uid) WHERE id = :id";

            $stmt = $db->prepare($query);
            try 
            {
                $stmt->execute([":uid" => get_user_id(), ":id" => get_user_id()]);
            } 
            catch (PDOException $e) {
                error_log(var_export($e, true));
            }

            //update participants for comp
            $query = "UPDATE Competitions SET current_participants = (SELECT Count(*) FROM CompetitionParticipants WHERE comp_id = :cid) WHERE id = :id";
            $stmt = $db->prepare($query);
            try 
            {
                $stmt->execute([":cid" => $comp_id, ":id" => $comp_id]);
            } 
            catch (PDOException $e) {
                error_log(var_export($e, true));
            }


            //update reward for comp

            //sql query for current participants
            $record = [];
            $stmt = $db->prepare("SELECT current_participants FROM Competitions WHERE id = :cid");
            try 
            {
                $stmt->execute([":cid" => $comp_id]);
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($r)
                {
                    $record = $r;
                }
            } 
            catch (PDOException $e) {
                error_log(var_export($e, true));
            }

            foreach ($record as $data) : $participants = $data; endforeach;
            $participants = (int)$participants["current_participants"];

            $reward = (int)$_POST['reward'];
            $cost = (int)$_POST['cost'];


            //calculate current reward
            $updated_reward = $reward + ($cost * $participants);

            $query = "UPDATE Competitions SET current_reward = $updated_reward WHERE id = :id";
            $stmt = $db->prepare($query);
            try 
            {
                $stmt->execute([":id" => $comp_id]);
            } 
            catch (PDOException $e) {
                error_log(var_export($e, true));
            }

            echo "Successfully joined competition";

        }
        else {
            echo "You can't afford this right now";
        }
    }
    else
    {
        echo "User is already registered";
    }
}





//handle page load
//TODO fix join
$stmt = $db->prepare("SELECT id, name, current_participants, min_participants, current_reward, min_score, expires, join_fee, starting_reward FROM Competitions WHERE expires > current_timestamp() AND paid_out < 1 ORDER BY expires ASC LIMIT 10");

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
                                <input type="hidden" name="reward" value="<?php se($row, "starting_reward", "-"); ?>" />
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
