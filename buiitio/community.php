<html>
    <?php
        include "includes/head.php";
    ?>
    <body>
        <div class="container">
          <?php
                include "includes/nav.php";
            ?>
    
            <div class="jumbotron">
              <h1>Community</h1>
              <!--<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
            </div>
            
            <div class="row marketing">
            <div class="col-lg-6">
              <h4>Discord</h4>
              <p>Join our discord to chat to other like mined people, this also allows you to talk to people like teamspeak or skype.</p>
              <a type="button" href="https://discord.gg/Jy3FXyp" class="btn btn-success" target="_blank"><img src="discord.svg" alt="Discord icon" width="18" height="18"> Join the Discord</a>
              <br>
              <br>
              <h4>Player Statistics</h4>
              <p>We are very sick of the same old faction servers, so all the plugins we have is custom that you can't get anywhere else.</p>
              <form class="input-group">
                <input type="text" id="username-input" class="form-control" placeholder="Search for player...">
                <span class="input-group-btn">
                  <button class="btn btn-default" onClick="goToPlayerProfile()" type="button" >Go!</button>
                  <script type="text/javascript">
                    function goToPlayerProfile()
                    {
                       var usernameField = $('#username-input');
                       var username = usernameField.val();
                       if(username == null || username == '') return;
                       location.href="./user.php?username=" + username;
                    }
                  </script>
                </span>
              </form><!-- /input-group -->
            </div>
    
            <div class="col-lg-6">
              <h4>Leaderboard</h4>
              <p>Checkout who is the best of the best players ranked in a number of fields from kills, to elo. Could it be you?</p>
              <a type="button" href="leaderboard.php" class="btn btn-success"><i class="icon-bar-chart"></i> View Leaderboards</a>
              <br>
              <br>
              <h4>Reddit</h4>
              <p>We record as many Statistics as possible from number of kills you get, to who you killed in the last 5 minutes with what weapon</p>
              <a type="button" href="https://www.reddit.com/r/Bevs/" class="btn btn-success"><i class="icon-book"></i> Go to subreddit</a>
            </div>
          </div>
            
         <footer class="footer">
            <p>&copy; 2017 BevsNetwork, Inc.</p>
          </footer>
    
        </div> <!-- /container -->
    
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>