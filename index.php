<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <?php
    $pageTitle = "Home";
    include 'inc/header.php';
    ?>
    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <?php if ($fireworks === true) {
        echo '<link href="assets/css/fireworks.css" rel="stylesheet">';
    } else if ($snow === true) {
        echo '<link href="assets/css/snow.css" rel="stylesheet">';
    }
    ?>
    <link href="assets/css/main.css?24apr20" rel="stylesheet">


</head>
<body>
<?php //include 'inc/navbar.php'; ?>

<!-- Content -->

<?php if ($snow === true) {
    echo '<div class="snow">';
} else if ($fireworks === true) {
    echo '<div id="fireworks">';
}
?>
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
                <?php
                /* //TODO source new API for XF 2
                include "inc/getName.php";
                if ($welcomeBack === true and $username !== null) {
                    echo "Welcome Back " . $username . "!";
                } else if ($welcomeBack === true) {
                    echo "<h1>Welcome to SpleefLeague!</h1>";
                } else
                    echo $message;
                if ($alerts_unread === 1) {
                    echo "<h4>You have " . $alerts_unread . " new notification </h4>";
                }

                if ($alerts_unread > 1) {
                    echo "<h4>You have " . $alerts_unread . " new notifications </h4>";
                }*/
                if ($welcomeBack === true) {
                    echo "Welcome to SpleefLeague!";
                } else
                    echo $message;
                ?>
            </h1>
            <h2><span class="player-count"><?php include "inc/serverinfo.php";
                    echo $online ?></span></h2>
            <h3 id="copy" data-clipboard-text="spleefleague.com">Join us » SpleefLeague.com</h3>
        </div>
        <div class="icons">
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://discord.gg/B9a6yj9"><i class="fna fab fa-discord"></i>
                        <h2 class="fa-text">Discord</h2></a>
                </div>
                <div class="col-sm-4">
                    <a href="/forums"><i class="fas fa-comments"></i>
                        <h2 class="fa-text">Forums</h2></a>
                </div>
                <div class="col-sm-4">
                    <a href="http://newspleefleague.buycraft.net/"><i class="fa fa-shopping-cart"></i>
                        <h2 class="fa-text">Store</h2></a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php if ($snow === true) {
    echo '</div>';
} else if ($fireworks === true) {
    echo '</div>';
}
?>

<?php include 'inc/footer.php';
if ($fireworks === true) {
    echo '<script type="text/javascript" src="assets/js/fireworks.js"></script>';
}
?>
</body>

<script src="assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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