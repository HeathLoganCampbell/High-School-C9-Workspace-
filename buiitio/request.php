<html>
    <?php
        include "includes/head.php";
        include "includes/account.php";
        include "includes/login.php";
    ?>
    <body>
        <div class="container">
          <?php
                include "includes/nav.php";
                include "parts/request.php";
            ?>
    
          <div class="jumbotron">
            <h1>Request!</h1>
            <p>Ask to join the server</p>
            <!--<?php-->
            <!--    if($username == null)-->
            <!--        echo "<p class='lead'>Please login with your steam username to continue!</p>";-->
            <!--    else -->
            <!--        echo "<p class='lead'>You are already logged in $username</p>";-->
            <!--?>-->
          </div>  
          
            <form class="form-inline" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading" id="blue">
                        <h3 class="panel-title">Please enter your username to continue</h3>
                    </div>
                    
                    
                    <div class="panel-body">
                        <center>
                            <input type="text" class="form-control full-size" name="steam_username" placeholder="Email (e.g example@gmail.com)">
                            <div class="input-group">
                                <input type="text" class="form-control full-size" name="steam_username" placeholder="Username (e.g Sprockbot)">
                                <span class="input-group-btn">
                                    <input  class="btn btn-success" type="submit">Continue</input>
                                </span>
                            </div>
                            </br></br>
                            <div class="g-recaptcha" data-sitekey="6LdonTMUAAAAAAnwohCtlFqvC0UKU-Q83JHeecfh"></div>
                            </br>
                        </center>
                    </div>
                </div>
            </form>
          
          
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>