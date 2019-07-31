<html>
    <?php
        include "includes/head.php";
    ?>
    <body>
        <div class="container">
          <?php
                include "includes/nav.php";
                $username = $_GET['username'];
                $rank = "Normal";
                $joinDate = "00-00-00-00";
                $lastOnDate = "5 days ago";
                $playTime = "5 days";
            ?>
            
            <div class="alert alert-success">
              <strong>Currently online!</strong> Capture The Flag
            </div>
            
            <div>
              <div class="col-md-3">
                <center>
                    <br class="for-phone">
                    <a class="head"  href='./user.php?username=<?php echo $username; ?>'><img  width="140" height="140" title='<?php echo $username; ?>' src='https://minotar.net/avatar/<?php echo $username; ?>/520.png'></a>
                    <h3><?php echo $username; ?></h3>
                    <span class="label label-success">Normal</span>
                    <br>
                    <br>
                </center>
              </div>
              
              <div class="col-md-9">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#info">Info</a></li>
                  <li><a data-toggle="tab" href="#games">Games</a></li>
                  <li><a data-toggle="tab" href="#kills">Kills</a></li>
                  <li><a data-toggle="tab" href="#deaths">Deaths</a></li>
                </ul>
              
                <div class="tab-content">
                    <div id="info" class="tab-pane fade in active">
                      <br>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading text-center">Info</div>
                        <div class="panel-body">
                          <table class="table table-striped">
                            <tr>
                              <th>Username</th>
                              <td><?php echo "$username"; ?></td>
                            </tr>
                            <tr>
                              <th>Rank</th>
                              <td><?php echo "$rank"; ?></td>
                            </tr>
                            <tr>
                              <th>First Joinned</th>
                              <td><?php echo "$joinDate"; ?></td>
                            </tr>
                            <tr>
                              <th>Last Joinned</th>
                              <td><?php echo "$lastOnDate"; ?></td>
                            </tr>
                            <tr>
                              <th>Play time</th>
                              <td><?php echo "$playTime"; ?></td>
                            </tr>
                      </table>
                        </div>
                      </div>
                      
                      
                    </div>
                    
                    
                    <!-- Kills Start -->
                    <div id="kills" class="tab-pane fade">
                      <br>
                      <div class="panel panel-default col">
                          <div class="panel-heading text-center">Kills</div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              
                               <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">3 Hours ago</span></p>
                                <!--text-right-->
                              </li>
                            </ul>
                            
                          </div>
                      </div>
                    </div>
                    <!-- Kills end -->
                    
                     <!-- Deaths Start -->
                    <div id="deaths" class="tab-pane fade">
                      <br>
                      <div class="panel panel-default col">
                          <div class="panel-heading text-center">Deaths</div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">abc</span></p>
                                <!--text-right-->
                              </li>
                              
                               <li class="list-group-item li-link">
                                <p><a>Sprock</a> killed <a>Bevelio</a> <span class="text-muted pull-right ">abc</span></p>
                                <!--text-right-->
                              </li>
                            </ul>
                            
                          </div>
                      </div>
                    </div>
                    <!-- Deaths end -->
                    
                    <div id="games" class="tab-pane fade">
                      <br>
                      <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#ctf">Capture the Flag</a></li>
                      </ul>
                      
                      
                      <div id="ctf" class="tab-pane fade in active">
                        <h3>Capture The Flag</h3>
                        <p>A Gamemode about two or more teams going head to head to capture the other's flag.</p>
                      
                        <div class="panel panel-default col">
                          <div class="panel-heading text-center">Total</div>
                          <div class="panel-body">
                            <table class="table table-striped">
                              <tr>
                                <th></th>
                                <th>Total</th>
                                <th>Per Game</th>
                              </tr>
                              <tr>
                                <th>Kills</th>
                                <td>50</td>
                                <td>25</td>
                              </tr>
                              <tr>
                                <th>Deaths</th>
                                <td>0</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th>Flag Pick Ups</th>
                                <td>1</td>
                                <td>0.5</td>
                              </tr>
                              <tr>
                                <th>Flag Capture</th>
                                <td>1</td>
                                <td>0.5</td>
                              </tr>
                              <tr>
                                <th>Flag Shutdowns</th>
                                <td>0</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th>Games</th>
                                <td>2</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th>Wins</th>
                                <td>2</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th>Best Killstreak</th>
                                <td>50</td>
                                <td>50</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        
                      
                    </div>
                    
                  </div>
            </div>      
            
          <footer class="footer" style="position: relative;clear: both;"> <!-- Bahaha, Putting this in the stylesheet causes a heading issue -->
            <p>&copy; 2017 BevsNetwork, Inc.</p>
          </footer>
    
        </div> <!-- /container -->
    
        <script src="dist/js/bootstrap-select.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>



<!--<div id="menu1" class="tab-pane fade">-->
<!--                    <br>-->
                    <!--<ul class="nav nav-pills">-->
                    <!--  <li class="active"><a data-toggle="pill" href="#home">Survival Games</a></li>-->
                    <!--  <li><a data-toggle="pill" href="#Kit1">Capture the Flag</a></li>-->
                    <!--  <li><a data-toggle="pill" href="#Kit2">TntRun</a></li>-->
                    <!--  <li><a data-toggle="pill" href="#Kit3">Team Death Match</a></li>-->
                    <!--  <li><a data-toggle="pill" href="#Kit3">Spleef</a></li>-->
                    <!--  <li><a data-toggle="pill" href="#Kit3">One in the chamber</a></li>-->
                    <!--</ul>-->
                    
<!--                    <h3>Menu 1</h3>-->
<!--                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                  </div>-->
                  <!--<div id="menu2" class="tab-pane fade">-->
                  <!--  <h3>Menu 2</h3>-->
                  <!--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>-->
                  <!--</div>-->
<!--                  <div id="menu3" class="tab-pane fade">-->
<!--                    <h3>Menu 3</h3>-->
<!--                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <br>-->
<!--                <br>-->
<!--              </div>-->
<!--              <div class="col-md-4">-->
                
              
                
<!--              </div>-->
<!--              <div class="col-md-4">-->
                
<!--            </div>-->