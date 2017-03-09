<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>SpleefLeague</title>
    
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="leaderboard.css" rel="stylesheet">
    
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
                    <th>Rating</th>
                  </tr>
                </thead>

                <tbody>


                        <?php
                        $url = "http://api.spleefleague.com/leaderboard/spleef";

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $json_output = curl_exec($ch);
                        $output = json_decode($json_output);

                        for ($i = 0; $i < 50; $i++) {
                            $username = $output->players[$i]->username;
                            $rating = $output->players[$i]->rating;
                            $rank = $output->players[$i]->rank;

                            echo '<tr>';
                            echo '<td>', $rank, '</td>';
                            echo '<td>', '<img src="https://minotar.net/helm/', $username, '/30.png"/>', '</td>';
                            echo '<td>', $username, '</td>';
                            echo '<td>', $rating, '</td>';
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
                      $SJ = "http://api.spleefleague.com/leaderboard/SJ";

                      $ch = curl_init();
                      curl_setopt($ch, CURLOPT_URL, $SJ);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                      $json_output = curl_exec($ch);
                      $output = json_decode($json_output);

                      for ($i = 0; $i < 50; $i++) {
                          $username = $output->players[$i]->username;
                          $rating = $output->players[$i]->rating;
                          $rank = $output->players[$i]->rank;

                          echo '<tr>';
                          echo '<td>', $rank, '</td>';
                          echo '<td>', '<img src="https://minotar.net/helm/', $username, '/30.png"/>', '</td>';
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
    
    <!-- FOOTER -->
    <footer class="footer">
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
    <script src="leaderboard.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  </body>
</html>