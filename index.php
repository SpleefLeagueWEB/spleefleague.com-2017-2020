<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpleefLeague</title>

    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Links -->
    <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/4d6492861a.js"></script>
    <link rel="alternate" href="http://spleefleague.com" hreflang="en"/>
    <link href="favicon.ico" rel="icon">
</head>

<?php include 'inc/navbar.php'; ?>

<!-- Content -->


<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <img src="assets/img/logo.png" class="content-logo">
        </div>
    </div>

    <?php include "inc/notice.php"; ?>

    <div class="row">
        <div class="col-md-12 content-text">
            <h1>
                <?php include "config.php";
                include "inc/getName.php";
                if ($welcomeBack === true and $username !== null) {
                    echo "Welcome Back " . $username . "!";
                } else if ($welcomeBack === true) {
                    echo "Welcome to SpleefLeague!</h1>";
                } else
                    echo $message;
                if ($alerts_unread === 1) {
                    echo "<h4>You have " . $alerts_unread . " new notification </h4>";
                }

                if ($alerts_unread > 1) {
                    echo "<h4>You have " . $alerts_unread . " new notifications </h4>";
                }
                ?>
             <h2>Players Online: <span class="player-count"><?php include "inc/serverinfo.php";
                        echo $online ?></span></h2>
                <h3 id="copy" data-clipboard-text="spleefleague.com">Join us » SpleefLeague.com</h3>

        </div>
    </div>
</div>
<!-- ---- -->

<?php include 'inc/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/copy.js"></script>
<script src="assets/js/zeroclipboard.js"></script>
<script type="text/javascript" async>
    var clipboard = new Clipboard("#copy");
    clipboard.on('success', function (e) {
        console.log(e);
    });
    clipboard.on('error', function (e) {
        console.log(e);
    });
</script>

</body>
</html>