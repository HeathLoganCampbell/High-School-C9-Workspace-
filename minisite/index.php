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
            <div class="row title">
                <div class="col">
                    <h1 class="text-center">Get yourself online with MiniSite</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col">
                    <dl class="steps">
            			<dt>Pick a template</dt>
            			<dd>Select a basic template</dd>
            			
            			<dt>Drag around items</dt>
            			<dd>Move, Edit and Add different Items</dd>
            			
            			<dt>Publish and you're done!</dt>
            			<dd>Just like that, you have made a minisite</dd>
            		</dl>
                </div>
                <div class="col align-self-center">
                    <center><a href="comingsoon.php" class="btn btn-primary btn-lg">Pricing and Plans</a></center>
                </div>
            </div>
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