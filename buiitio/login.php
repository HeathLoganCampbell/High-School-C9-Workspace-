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
            ?>
    
          <div class="jumbotron">
            <h1>Login!</h1>
            <?php
                if($username == null)
                    echo "<p class='lead'>Please login with your steam username to continue!</p>";
                else 
                    echo "<p class='lead'>You are already logged in $username</p>";
            ?>
          </div>  
          <?php
                include "parts/login.php";
            ?>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>