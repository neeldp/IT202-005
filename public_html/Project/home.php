<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>
    <?php
    /*if (is_logged_in(true)) {
    echo "Welcome, " . get_username();
} else {
    echo "You're not logged in";
}*/
    //shows session info
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    $duration = "week";
    ?>
    <?php require(__DIR__ . "/../../partials/score_table.php"); ?>

    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/score_table.php"); ?>

    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/score_table.php"); ?>

    <a href="<?php echo get_url('game.php'); ?>">Collect the Square</a></li>

</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>