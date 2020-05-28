<!DOCTYPE html>
<html>
<head>
    <?php
    $pageTitle = "Leaderboard";
    include "../inc/header.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="leaderboard.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>

<?php include '../inc/navbar.php'; ?>

<!-- Content -->
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <img src="../assets/img/logo.png" class="content-logo">
        </div>
    </div>
</div>
<!-- ---- -->

<!-- Leaderboard -->
<div class="container" id="leaderboard">
    <div class="row">
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#Spleef" data-toggle="tab">Spleef</a></li>
                <li><a href="#SJ" data-toggle="tab">SuperJump</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="Spleef">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Skin</th>
                            <th>Username</th>
                            <th>Snow Spleef Rating</th>
                            <th>Team Spleef Rating</th>
                            <th>Power Spleef Rating</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $api = "https://api.spleefleague.com/leaderboard/spleef";

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $api);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $json_output = curl_exec($ch);
                        $output = json_decode($json_output);


                        for ($i = 0; $i < 50; $i++) {
                            //Needed due to April update adding PowerSpleef and Classic Spleef
                            $classicRatingArray = json_encode($output->players[$i]->rating);
                            $classicRating = json_decode($classicRatingArray);

                            $username = $output->players[$i]->username;
                            $rank = $output->players[$i]->rank;
                            $uuid = $output->players[$i]->uuid;

                            //Checking if player has played Power Spleef or not
                            $SSpos = array_search('CLASSIC', array_column($classicRating, 'mode'));
                            $SSrating = $classicRating[$SSpos]->rating;

                            if (array_search('TEAM', array_column($classicRating, 'mode')) !== false) {
                                $TSpos = array_search('TEAM', array_column($classicRating, 'mode'));
                                $TSrating = $classicRating[$TSpos]->rating;
                            } else {
                                $TSrating = "Not Played";
                            }

                            if (array_search('POWER', array_column($classicRating, 'mode')) !== false) {
                                $PSpos = array_search('POWER', array_column($classicRating, 'mode'));
                                $PSrating = $classicRating[$PSpos]->rating;
                            } else {
                                $PSrating = "Not Played";
                            }




                            echo '<tr>';
                            echo '<td>', $rank, '</td>';
                            echo '<td>', '<img src="https://crafatar.com/avatars/', $uuid, '?size=30&overlay"/>', '</td>';
                            echo '<td>', $username, '</td>';
                            echo '<td>', $SSrating, '</td>';
                            echo '<td>', $TSrating, '</td>';
                            echo '<td>', $PSrating, '</td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="SJ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Skin</th>
                            <th>Username</th>
                            <th>Rating</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $SJ = "https://api.spleefleague.com/leaderboard/SJ";

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $SJ);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $json_output = curl_exec($ch);
                        $output = json_decode($json_output);

                        for ($i = 0;
                        $i < 50;
                        $i++) {

                        //Needed due to April update adding PowerSpleef and Classic Spleef which affects SJ apparently
                        $SJratingArray = json_encode($output->players[$i]->rating);
                        $SJRating = json_decode($SJratingArray);

                        $username = $output->players[$i]->username;
                        $rating = $SJRating[0]->rating;
                        $rank = $output->players[$i]->rank;
                        $uuid = $output->players[$i]->uuid;


                        echo '<tr>';
                        echo '<td>', $rank, '</td>';
                        echo '<td>', '<img src="https://crafatar.com/avatars/', $uuid, '?size=30&overlay"/>', '</td>';
                        echo '<td>', $username, '</td>';
                        echo '<td>', $rating, '</td>';
                        echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ---- -->

<?php include '../inc/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="leaderboard.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>