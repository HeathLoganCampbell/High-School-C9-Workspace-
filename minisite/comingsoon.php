<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
        body
        {
            background: url("../images/Pattern.png");
        }
        
        .container
        {
            margin-top: 20px;
        }
        
        .title
        {
            padding-bottom: 40px;
        }
        
        
		.steps 
		{
			counter-reset: basic-counter;
		}
		
		.steps dt
		{
			position: relative;
		}
		
		.steps dt:before
		{
			content: counter(basic-counter);
			counter-increment: basic-counter;
			position: absolute;
			left: 0;
			top: 0;
			font: bold 50px/1 Sans-Serif;
		}
	
	    .steps dt, .steps dd
	    {
			padding-left: 50px;
	    }
	    
    </style>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
         <div class="jumbotron">
            <h1>Hey there bud! You caught us before we're ready.</h1>
            <p>We're working hard to put the finishing touches onto MiniSite. Things are going well and it should be ready to help you with getting Online very soon. If you'd like us to send you a reminder when we're ready, just put your email in below:</p>
            <form class="form-inline" action="email.php" method="post">
              <label class="sr-only" for="email">Email</label>
              <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" name="email" id="email" placeholder="Your@Email.com">
              <button type="submit" class="btn btn-primary">Remind me!</button>
            </form>
        </div>
        </div>
        <footer class="footer">
            <div class="container">
                <hr>
                <span class="text-muted">© MiniSite 2018, All rights reserved.</span>
            </div>
        </footer>
                <!-- Simple product to sell goods online
                Instagram/facebook marketing 
                Website for buying custom plugins
                Website selling site
                -->
        </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>