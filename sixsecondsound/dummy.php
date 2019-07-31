<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/visualizer.js"></script>
        <style type="text/css">
            body{
                background: #2c3e50;
            }
            .vz-wrapper {
              position: relative;
              height: 100vh;
              width: 100%;
              background: -webkit-gradient(radial, center center, 0, center center, 460, from(#396362), to(#000000));
              background: -webkit-radial-gradient(circle, #396362, #000000);
              background: -moz-radial-gradient(circle, #396362, #000000);
              background: -ms-radial-gradient(circle, #396362, #000000);
              box-shadow: inset 0 0 160px 0 #000;
              cursor: pointer;
            }
            
            .vz-wrapper.-canvas {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              height: initial;
              width: initial;
              background: transparent;
              box-shadow: none;
            }
            
            @media screen and (min-width: 420px) {
            .vz-wrapper { box-shadow: inset 0 0 200px 60px #000; }
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function() {
                var audioElement = document.createElement('audio');
                audioElement.setAttribute('id', 'audioz');
                audioElement.setAttribute('src', '/sounds/dummy.mp3');
                
                audioElement.addEventListener('ended', function() {
                    this.play();
                }, false);
                
                audioElement.addEventListener("canplay",function(){
                    $("#length").text("Duration:" + audioElement.duration + " seconds");
                    $("#source").text("Source:" + audioElement.src);
                    $("#status").text("Status: Ready to play").css("color","green");
                    this.play();
                });
                
                audioElement.addEventListener("timeupdate",function(){
                    $("#currentTime").text("Current second:" + audioElement.currentTime);
                });
                
                $('#play').click(function() {
                    audioElement.play();
                    $("#status").text("Status: Playing");
                });
                
                $('#pause').click(function() {
                    audioElement.pause();
                    $("#status").text("Status: Paused");
                });
                
                $('#restart').click(function() {
                    audioElement.currentTime = 0;
                });
            });
        </script>
    </head>
    <body>
        <h2>Sound Information</h2>
        <div id="length">Duration:</div>
        <div id="source">Source:</div>
        <div id="status" style="color:red;">Status: Loading</div>
        <hr>
        <h2>Control Buttons</h2>
        <button id="play">Play</button>
        <button id="pause">Pause</button>
        <button id="restart">Restart</button>
        <hr>
        <h2>Playing Information</h2>
        <div id="currentTime">0</div>
        <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" accept=".mp3,audio/*">
            <input type="submit" value="Add Sounppet"/>
        </form>
        <div class="vz-wrapper -canvas">
            <audio id="myAudio" src="/sounds/dummy.mp3" data-author="Beethoven" data-title="Allegro"></audio>
            <canvas id="myCanvas" width="800" height="400"></canvas>
        </div>

    </body>
</html>