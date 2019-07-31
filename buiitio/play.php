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
              <h1>Come Play!</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-lg btn-success" href="#" role="button">play.Bevs.Network</a></p>
            </div>
        </div>
        <div class="container">
            
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                1 Player
              </div>
            </div>
            <div class="heads">
              <?php 
                
              
                for ($x = 0; $x <= 0; $x++) 
                {
                    echo "<a role='tooltip' data-toggle='tooltip' title='Sprock' href='./user.php?username=Sprock'><img title='Sprock' src='https://minotar.net/avatar/Sprock/80.png'>";
                } 
              ?>
            </div>
    
         <footer class="footer">
            <p>&copy; 2017 BevsNetwork, Inc.</p>
          </footer>
    
        </div> <!-- /container -->
    
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>