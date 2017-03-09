<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpleefLeague</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <!-- Links -->
    <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/4d6492861a.js"></script>
    <link rel="alternate" href="http://spleefleague.com" hreflang="en"/>
    <link href="favicon.ico" rel="icon">
</head>

<body>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">SpleefLeague</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/forums">Forums</a></li>
                <li><a href="/team">Team</a></li>
                <li><a href="/leaderboard">Leaderboard</a></li>
                <li><a href="http://store.spleefleague.com/">Store</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://spleefleague.com/forums/link-forums/ban-appeal-form.51/">Appeal a Ban</a></li>
                        <li><a href="https://spleefleague.com/forums/link-forums/wildfire-application-open.52/">Apply for Builder</a></li>
                        <li><a href="https://spleefleague.com/forums/link-forums/moderator-application.49/">Apply for Staff</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ---- -->

<!-- Content -->
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <img src="img/logo.png" class="content-logo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 content-text">
            <h2 id="player-count">Players Online: <span class="player-count"></span></h2>
            <h3>Join us &raquo; spleefleague.com</h3>
        </div>
    </div>
</div>
<!-- ---- -->

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row footer-content">
            <a href="mailto:admin@spleefleague.com" target="_blank"><i class="fa fa-envelope-o fa-2x"
                                                                       aria-hidden="true"></i></a>
            <a href="https://twitter.com/SpleefLeague" target="_blank"><i class="fa fa-twitter fa-2x"
                                                                          aria-hidden="true"></i></a>
            <a href="https://github.com/SpleefLeague" target="_blank"><i class="fa fa-github fa-2x"
                                                                         aria-hidden="true"></i></a>
            <p class="text-muted">&copy <?php echo date("Y"); ?> SpleefLeague</p>
        </div>
    </div>
</footer>
<!-- ----------- -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="main.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>