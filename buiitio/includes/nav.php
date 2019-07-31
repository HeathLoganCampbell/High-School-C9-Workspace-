<div class="header clearfix">
    <h3 class="text-muted for-phone">BevsGames</h3>
    <nav class="navbar-toggleable-md">
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="index.php"><i class="icon-home"></i> Home</a></li>
          <li role="presentation"><a href="community.php"><i class="icon-group"></i> Community</a></li>
          <li role="presentation"><a href="play.php"><i class="icon-gamepad"></i> Play</a></li>
          <?php
            include "includes/account.php";
            if($username == null)
              echo "<li role='presentation'><a href='login.php'><i class='icon-user'></i> Log in</a></li>";
            else 
              echo "<li role='presentation'><a href='logout.php'><i class='icon-off'></i> Logout</a></li>";
          ?>
          <li role="presentation"><a href="store.php" class="store"><i class="icon-shopping-cart"></i> Store</a></li>
        </ul>
    </nav>
    
    <h3 class="text-muted for-desktop" id="address">BevsGames</h3>
    
    
</div>