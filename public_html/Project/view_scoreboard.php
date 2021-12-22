<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php 
if(isset($_POST['viewScoreboard']))
{
    $comp_id = $_POST['competition_id'];
    $r = get_top_scores_for_comp($comp_id, 10);
}
?>

<div class="card-text">
            <table class="table text-light">
                <thead>
                    <th>User</th>
                    <th>Score</th>
                    <th>Achieved</th>
                </thead>
                <tbody>
                    <?php if (!$r || count($r) == 0) : ?>
                        <tr>
                            <td colspan="100%">No scores available</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($r as $result) : ?>
                            <tr>
                                <td>
                                    <!--<a href="profile.php?id=<?php se($result, 'user_id'); ?>"><?php se($result, "username"); ?></a>-->
                                    <!--<?php se($result, "username"); ?>-->
                                    <?php $user_id = se($result, "user_id", 0, false);
                                    $username = se($result, "username", "", false);
                                    include(__DIR__ . "/../../partials/user_profile_link.php"); ?>
                                </td>
                                <td><?php se($result, "score"); ?></td>
                                <td><?php se($result, "created"); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>