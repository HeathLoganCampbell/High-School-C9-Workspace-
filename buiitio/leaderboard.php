<?php
    include "includes/head.php";
    include "includes/login.php"; 
?>

    <body>
        <div class="container">
          <?php
                include "includes/nav.php";
            ?>
            <center>
                <h2>Leaderboard</h2>
                <p>
                    The best of the best players
                </p>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#AllTime">All Time</a></li>
                      <li><a data-toggle="pill" href="#Monthly">Monthly</a></li>
                      <li><a data-toggle="pill" href="#Weekly">Weekly</a></li>
                      <li><a data-toggle="pill" href="#Daily">Daily</a></li>
                    </ul>
                </div>
                <div class="col-md-6 pull-right">
                    <form class="input-group" role="search" style="margin-top: 4px; margin-right: 15px; margin-bottom: 0px;"  >
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
                    </form>
                </div>
            </div>
        </div>
        
        
        <div class="tab-content">
            <!-- All Time -->
            <div class="tab-pane fade in active" id="AllTime">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills">
                          <li class="active"><a href="#overallAllTime">Overall</a></li>
                          <li><a href="#">Kills/Deaths</a></li>
                          <li><a href="#">Flag Captures</a></li>
                          <li><a href="#">Time played</a></li>
                          <li><a href="#">Elo</a></li>
                          <li><a href="#">Wins/Losses</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container table-responsive tab-content">
                    <div class="tab-pane fade in active" id="overallAllTime">
                        <table class="table table-condensed" style="display: block; ">
                            <thead>
                              <tr>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The place on the leaderboard'>Rank</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title="Players skin's head">Head</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Username of player'>Player</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of kills'>Kills</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of deaths'>Deaths</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was picked up'>Flag Pickup</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was brought back'>Flag Capture</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Killing the play with the flag'>Shutdown Capture</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><img title='Sprock' src='https://minotar.net/avatar/Sprock/30.png'> </td>
                                <td>Sprock</td> 
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            
            
            <!-- Monthly -->
            <div class="tab-pane fade" id="Monthly">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills">
                          <li class="active"><a href="#">Overall</a></li>
                          <li><a href="#">Kills/Deaths</a></li>
                          <li><a href="#">Flag Captures</a></li>
                          <li><a href="#">Time played</a></li>
                          <li><a href="#">Elo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container table-responsive tab-content">
                    <div class="tab-pane fade in active" id="alltime">
                            <table class="table table-condensed" style="display: block; ">
                            <thead>
                              <tr>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The place on the leaderboard'>Rank</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title="Players skin's head">Head</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Username of player'>Player</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of kills'>Kills</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of deaths'>Deaths</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was picked up'>Flag Pickup</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was brought back'>Flag Capture</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Killing the play with the flag'>Shutdown Capture</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><img title='Sprock' src='https://minotar.net/avatar/Sprock/30.png'> </td>
                                <td>Sprock</td> 
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Weekly -->
            <div class="tab-pane fade" id="Weekly">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills">
                          <li class="active"><a href="#">Overall</a></li>
                          <li><a href="#">Kills/Deaths</a></li>
                          <li><a href="#">Flag Captures</a></li>
                          <li><a href="#">Time played</a></li>
                          <li><a href="#">Elo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container table-responsive tab-content">
                    <div class="tab-pane fade in active" id="alltime">
                            <table class="table table-condensed" style="display: block; ">
                            <thead>
                              <tr>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The place on the leaderboard'>Rank</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title="Players skin's head">Head</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Username of player'>Player</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of kills'>Kills</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of deaths'>Deaths</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was picked up'>Flag Pickup</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was brought back'>Flag Capture</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Killing the play with the flag'>Shutdown Capture</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><img title='Sprock' src='https://minotar.net/avatar/Sprock/30.png'> </td>
                                <td>Sprock</td> 
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Daily -->
            <div class="tab-pane fade" id="Daily">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <ul class="nav nav-pills">
                          <li class="active"><a href="#">Overall</a></li>
                          <li><a href="#">Kills/Deaths</a></li>
                          <li><a href="#">Flag Captures</a></li>
                          <li><a href="#">Time played</a></li>
                          <li><a href="#">Elo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container table-responsive tab-content">
                    <div class="tab-pane fade in active" id="alltime">
                            <table class="table table-condensed" style="display: block; ">
                            <thead>
                              <tr>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The place on the leaderboard'>Rank</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title="Players skin's head">Head</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Username of player'>Player</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of kills'>Kills</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='The number of deaths'>Deaths</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was picked up'>Flag Pickup</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Number of times the flag was brought back'>Flag Capture</th>
                                <th role='tooltip' data-container="body" data-toggle='tooltip' title='Killing the play with the flag'>Shutdown Capture</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><img title='Sprock' src='https://minotar.net/avatar/Sprock/30.png'> </td>
                                <td>Sprock</td> 
                                <td>50</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>