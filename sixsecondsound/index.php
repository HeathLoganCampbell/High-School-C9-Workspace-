<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/visualizer.js"></script>
        <style type="text/css">
            body{
                background: #2c3e50;
            }
            /*.vz-wrapper {*/
            /*  position: relative;*/
            /*  height: 100vh;*/
            /*  width: 100%;*/
            /*  background: -webkit-gradient(radial, center center, 0, center center, 460, from(#396362), to(#000000));*/
            /*  background: -webkit-radial-gradient(circle, #396362, #000000);*/
            /*  background: -moz-radial-gradient(circle, #396362, #000000);*/
            /*  background: -ms-radial-gradient(circle, #396362, #000000);*/
            /*  box-shadow: inset 0 0 160px 0 #000;*/
            /*  cursor: pointer;*/
            /*}*/
            
            /*.vz-wrapper.-canvas {*/
            /*  position: absolute;*/
            /*  top: 50%;*/
            /*  left: 50%;*/
            /*  transform: translate(-50%, -50%);*/
            /*  height: initial;*/
            /*  width: initial;*/
            /*  background: transparent;*/
            /*  box-shadow: none;*/
            /*}*/
            
            /*@media screen and (min-width: 420px) {*/
            /*.vz-wrapper { box-shadow: inset 0 0 200px 60px #000; }*/
            /*}*/
        </style>
        <script type="text/javascript">
            
            var audioElement = document.getElementById('myAudio');
            audioElement.setAttribute('src', '/sounds/dummy.mp3');
                
            
            var canvas = document.querySelector('#myCanvas');
            var ctx = canvas.getContext('2d');
            canvas.width = canvas.clientWidth;
            canvas.height = canvas.clientHeight;
        </script>
    </head>
    <body>
        <center>
        <div class="vz-wrapper -canvas">
            <audio id="myAudio" src="/sounds/dummy.mp3"  data-title="Bevelio"></audio>
            <canvas id="myCanvas" width="800" height="400"></canvas>
        </div>
        </center>
    </body>
</html>