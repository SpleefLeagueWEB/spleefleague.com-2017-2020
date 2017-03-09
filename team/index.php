<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SpleefLeague</title>
    
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="team.css" rel="stylesheet">
    
    <!-- Links -->
	<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/4d6492861a.js"></script>
    <link rel="alternate" href="http://spleefleague.com" hreflang="en"/>
    <link href="../favicon.ico" rel="icon">
  </head>
  
  <body>
    
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
          </ul>
        </div>
      </div>
    </nav>
    <!-- ---- -->

    <!-- Content -->
    <div class="container" id="content">
      <div class="row">
        <div class="col-md-12">
          <img src="../img/logo.png" class="content-logo">
        </div>
      </div>
    </div>
    <!-- ---- -->
    <div class="alert alert-warning">
        <strong>Notice!</strong> The SpleefLeague API is currently down.
    </div>
    <!-- Users -->
    <div class="container-fluid" id="users">
      <div class="row">
          <?php

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
          ?>
      </div>
    </div>
    <!-- ---- -->
    
    <!-- FOOTER 
    <footer class="footer navbar-static-bottom">
      <div class="container-fluid">
        <div class="row footer-content">
          <a href="mailto:admin@spleefleague.com" target="_blank"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/SpleefLeague" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
		  <a href="https://github.com/SpleefLeague" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
          <p class="text-muted">&copy <?php echo date("Y"); ?> SpleefLeague</p>
		</div>
      </div>
    </footer>
	<!-- ----------- -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="team.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  </body>
</html>