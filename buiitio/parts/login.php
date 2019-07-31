<?php
if($loggedIn)
    {
        ?>
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> You have successfully logged in.
            </div>
        <?php
    }
?>

<form class="form-inline" method="post">
    <div class="panel panel-default">
        <div class="panel-heading" id="blue">
            <h3 class="panel-title">Please enter your username to continue</h3>
        </div>
        
        
        <div class="panel-body">
            <center>
                <div class="input-group">
                    <input type="text" class="form-control full-size" name="steam_username" placeholder="Username (e.g Sprockbot)">
                    <span class="input-group-btn">
                        <input  class="btn btn-success" type="submit">Continue</input>
                    </span>
                </div>
            </center>
        </div>
    </div>
</form>