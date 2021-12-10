<?php
require_once(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
if (isset($_POST["title"]) && !empty($_POST["title"])) {
    $user = get_username();
    $data = [];
    $db = getDB();
    $stmt = $db->prepare("SELECT points FROM Users WHERE username = :user");
    try 
    {
        $stmt->execute([":user" => $user]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r)
        {
            $data = $r;
        }
    } 
    catch (PDOException $e) {
        error_log(var_export($e, true));
    }
    //$balance = 0;
    foreach ($data as $points) : $balance = $points; endforeach;
    $starting_reward = $_POST["starting_reward"];
    $cost = $starting_reward + 1;
    $balance = $balance["points"];
    if($balance >= $cost)
    {
        $title = $_POST["title"];
        $starting_reward = $_POST["starting_reward"];
        $min_score = $_POST["min_score"];
        $min_participants = $_POST["min_participants"];
        $join_cost = $_POST["join_cost"];
        $duration = $_POST["duration"];
        $first_place_reward = $_POST["first_place_reward"];
        $second_place_reward = $_POST["second_place_reward"];
        $third_place_reward = $_POST["third_place_reward"];

        $stmt = $db->prepare("INSERT INTO Competitions(`name`, `duration`, `starting_reward`, `join_fee`, `min_participants`, `min_score`, `first_place_per`, `second_place_per`, `third_place_per`, cost_to_create) VALUES('{$title}', $duration, $starting_reward, $join_cost, $min_participants, $min_score, $first_place_reward, $second_place_reward, $third_place_reward, $cost) ");
        try 
        {
            $stmt->execute();
        } 
        catch (PDOException $e) {
            error_log(var_export($e, true));
        }

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

        $query = "UPDATE Users SET points = (SELECT IFNULL(sum(point_change),0) FROM PointsHistory WHERE user_id = :uid) WHERE id = :id";

        $stmt = $db->prepare($query);
        try 
        {
            $stmt->execute([":uid" => get_user_id(), ":id" => get_user_id()]);
        } 
        catch (PDOException $e) {
            error_log(var_export($e, true));
        }
        echo "Successfully created competition";

    }
    else {
        echo "You can't afford this right now";
    }
}
?>

<div class="container-fluid">
    <h1>Create Competition</h1>
    <form id="myform" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" name="title" class="form-control" required/>
        </div>
        <div class="mb-3">
            <label for="reward" class="form-label">Starting Reward</label>
            <input id="reward" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" required/>
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Min. Score</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 0" min="0" required/>
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Min. Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" required/>
        </div>
        <div class="mb-3">
            <label for="jc" class="form-label">Join Cost</label>
            <input id="jc" name="join_cost" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" required/>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in Days)</label>
            <input id="duration" name="duration" type="number" class="form-control" placeholder=">= 1" min="1" required/>
        </div>
        <div class="mb-3">
            <label for="fp" class="form-label">First Place Per</label>
            <input id="fp" name="first_place_reward" type="number" class="form-control" required/>
        </div>
        <div class="mb-3">
            <label for="sp" class="form-label">Second Place Per</label>
            <input id="sp" name="second_place_reward" type="number" class="form-control" required/>
        </div>
        <div class="mb-3">
            <label for="tp" class="form-label">Third Place Per</label>
            <input id="tp" name="third_place_reward" type="number" class="form-control" required/>
        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary" >
        </div>
    </form>
    <script>
        function updateCost() {
            let starting = parseInt(document.getElementById("reward").value || 0) + 1;
            let join = parseInt(document.getElementById("jc").value || 0);
            //if (join < 0) {
            //    join = 1;
            //}
            //let cost = starting + join;
            let cost = starting;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>

    <script>
        $('#myform').submit(function()
        {
            let x = parseInt(document.getElementById("fp").value);
            let y = parseInt(document.getElementById("sp").value);
            let z = parseInt(document.getElementById("tp").value);
            let total = x + y + z;
            if (total == 100)
            {
                return true;
            }
            else
            {
                window.alert("Reward distribution must be 100");
                return false;
            }

        });
    </script>
</div>