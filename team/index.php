<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpleefLeague</title>

    <!-- CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="team.css" rel="stylesheet">

    <!-- Links -->
    <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/4d6492861a.js"></script>
    <link rel="alternate" href="http://spleefleague.com" hreflang="en"/>
    <link href="../favicon.ico" rel="icon">
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
<div class="alert alert-warning">
    <strong>Notice!</strong> The SpleefLeague API is currently down.
</div>

<!-- Users -->
<!--
<div class="container-fluid" id="users">
    <div class="row">
        <?php
          /*
        $json = 'http://api.spleefleague.com/staff';
        $content = file_get_contents($json);
        $json = json_decode($content, true);
        ?>


        <?php echo '<h1 class="user-title" style="color: rgb(108, 0, 0);">Admin</h1> <div class="col-md-12">'
        ?>

        <?php
        foreach ($json['ranks'] as $result) {

            if ($result['rank'] == "ADMIN") {
                echo '<div class="user"> <img class="user-avatar" src="https://minotar.net/helm/', $result['username'], '/100.png"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }
        ?>

        <?php echo '<h1 class="user-title" style="color: rgb(0, 74, 205);">Developers</h1> <div class="col-md-12">'
        ?>

        <?php
        foreach ($json['ranks'] as $result) {

            if ($result['rank'] == "DEVELOPER") {
                echo '<div class="user"> <img class="user-avatar" src="https://minotar.net/helm/', $result['username'], '/100.png"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }
        ?>


        <?php echo '<h1 class="user-title" style="color: rgb(205, 0, 0);">Moderators</h1><div class="col-md-12">'
        ?>
        <?php

        foreach ($json['ranks'] as $result) {

            if ($result['rank'] == "MODERATOR") {
                echo '<div class="user"> <img class="user-avatar" src="https://minotar.net/helm/', $result['username'], '/100.png"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }
       */ ?>
    </div>
</div>
<!-- ---- -->

<?php include '../inc/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../soon/team.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>