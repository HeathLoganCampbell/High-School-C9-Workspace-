<!DOCTYPE html>
<html lang='en'>
    <head>
            <title>Bevelio : Heath Campbell</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            
            <style>
                html, body {
                    width: auto;
                    height: 100%;
                }
            
                *
                {
                   padding: 0px;
                   margin: 0px;
                   font-family: 'Montserrat', sans-serif;
                   max-width: 100%;
                }
                
                body
                {
                }
                
                a
                {
                    text-decoration: none;
                    display: block;
                }
                
                header
                {
                    height: 60px;
                    padding: 30px;
                    background: white;
                    text-align: center;
                }
                
                nav
                {
                    height: 50px;
                    background: #2c3e50;
                    border-top: 8px solid #34495e;
                    color: white;
                }
                
                ul 
                {
                    list-style-type: none;
                }
                
                nav ul 
                {
                    text-align: center;
                }
                
                nav ul li
                {
                    width: 120px;
                    padding: 15px;
                    float: left;
                    cursor: pointer;
                }
                
                 nav ul li:hover
                {
                    background: #34495e;
                }
                
                footer
                {
                    height: 120px;
                    background: #2c3e50;
                    color: #34495e;
                }
                
                .tokenWrap
                {
                    margin-left: 70px;
                }
                
                .token
                {
                    float: left;
                    width: 210px;
                    list-style-type: none;
                    border-right: 3px solid #27ae60;
                    margin-top: 30px;
                    text-align: center;
                }
                
                .token:last-child
                {
                    border-right: none;
                }
                
                .jumbotron
                {
                    height: 450px;
                    background-image: url('./images/hero-min.jpg');
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: cover;
                    position: relative;
                }
                
                .jumbotron h1
                {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;
                }
                
                .tokenBackground
                {
                    background: #2ecc71;
                    height: 120px;
                }
                
                .wrapper
                {
                    width: 800px;
                    margin: 0 auto;
                }
                
                .right
                {
                    float: right;
                }
                
                .red
                {
                    background: #e74c3c;
                }
                
                .content
                {
                    margin: 10px;
                    color: #000;
                }
                
                .fixed
                {
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 9999;
                    width: 100%;
                    height: 50px;
                }
                
                .hidden
                {
                    visibility: hidden;
                }
                
                section
                {
                    float: left;
                    width: 200px;
                    list-style-type: none;
                    margin-top: 30px;
                }
                
                .description 
                {
                    width: 400px;
                }
                
                .scroller
                {
                    height: 60px;
                    Overflow: hidden;
                }
                
                .scroller a
                {
                    color: #551A8B;
                }
                
                @media only screen and (max-width : 790px)
                {
                    .tokenWrap
                    {
                        margin-left: 1.5vw;
                    }
                    
                    .token
                    {
                        width: 200px;
                    }
                    .wrapper
                    {
                        width: 640px;
                    }
                }
                
                @media only screen and (max-width : 650px)
                {
                    .tokenBackground .wrapper
                    {
                        width: 200px;
                    }
                    
                    .tokenWrap
                    {
                        overflow: hidden;
                        height: 120px;
                        width: 300px;
                        /*margin-left: -50px;*/
                    }
                    
                    .token
                    {
                       border-right: none; 
                       width: 300px;
                    }
                    
                    .token:last-child
                    {
                        border-bottom: none;
                    }
                    
                    .wrapper
                    {
                        width: 410px;
                    }
                    
                     nav ul li
                    {
                        width: 90px;
                        padding: 15px;
                        float: left;
                        cursor: pointer;
                    }
                    
                    .jumbotron h1
                    {
                        transform: translate(-50%, -50%);
                        text-align: center;
                    }
                }
            </style>
            <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
           
            <script type="text/javascript">
            [
              'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',
              'script/main.js'
            ].forEach(function(src) {
              var script = document.createElement('script');
              script.src = src;
              script.async = false; 
              document.head.appendChild(script);
            });
            </script>
        </head>
        <body>
            <header>
                <h1>Heath Campbell</h1>
                <span>Software Developer</span>
            </header>
            <nav id="navbar-base">
                <ul class="wrapper">
                    <li><a>Home</a></li>
                    <li><a>About Me</a></li>
                    
                    <li class="right"><a>Contact Us</a></li>
                </ul>
            </nav>
            <nav id="navbar" class="fixed hidden">
                <ul class="wrapper">
                    <li><a>Home</a></li>
                    <li><a>About Me</a></li>
                    
                    <li class="right"><a>Contact Us</a></li>
                </ul>
            </nav>
            <div class="jumbotron">
                <h1>Hey! I'm Heath</h1>
            </div>
            <div class="tokenBackground">
                <div class="wrapper">
                    <ul class="tokenWrap">
                        <li class="token">
                            <ul>
                                <h1>Coding</h1>
                                <p>I love it</p>
                            </ul>
                        </li>
                        <li class="token">
                            <ul>
                                <h1>Skills</h1>
                                <p>Java, PHP & SQL</p>
                            </ul>
                        </li>
                        <li class="token">
                            <span>
                                <ul class="scroller">
                                    <li>
                                        <h1>Github</h1>
                                        <p><a href="https://github.com/Bevelio/" target="_blank">@Bevelio</a></p>
                                    </li>
                                    <li>
                                        <h1>Linkined</h1>
                                        <p><a href="https://www.linkedin.com/in/heath-campbell-6bb497125?trk=hp-identity-name" target="_blank">@HeathCampbell</a></p>
                                    </li>
                                </ul>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            </br>
            </br>
            </br>
            </br>
            <div class="wrapper">
                <div class="content left">
                    <h1>I'm a 18 year old student </h1>
                    
                    </br>
                    </br>
                    <p class="description">Hey, My name is Heath Campbell and I am a student whom has an intrested in computer software from android apps to websites. I have had this passion for computers ever since I was 7 when I was messing around with visal basic and the developer tab in microsoft powerpoint</p>
                </div>
            </div>
            </br>
            </br>
            </br>
            </br>
            <footer>
                <div class="wrapper align">
                    <section class="">
                        <ul>
                            <li>Site Map</li>
                            <li>Home</li>
                            <li>About Me</li>
                            <li>Contact Me</li>
                        </ul>
                    </section>
                     <section class="">
                       
                    </section>
                     <section class="">
                        <ul>
                            <li><b>Contact</b></li>
                        </ul>
                    </section>
                    <section class="">
                        
                    </section>
                </div>
            </footer>
    </body>
</html>
<noscript><link async href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"></noscript>