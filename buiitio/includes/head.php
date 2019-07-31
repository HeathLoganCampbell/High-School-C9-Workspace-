<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"/></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    
    
    <!--<link href="css/mdb.min.css" rel="stylesheet">-->
    
    
    <title>BevsNetwork</title>
    
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <style type="text/css">
        .for-phone
        {
            display: none;
        }
        
        .for-desktop
        {
            display: block;
        }
        
         @media screen and (max-width: 685px)
         {
            .header
            {
               font-size: 12px;
            }
            
            .header h3
            {
               font-size: 13px;
            }
            
            .header ul 
            {
                margin-top: 10px;
            }
            
            .header ul li a
            {
               padding: 5px;
            }
            
            .store:hover
            {
                border: 2px solid #5cb85c; 
                padding: 3px 3px;
            }

         }
         
         @media screen and (max-width: 485px)
         {
             .header
             {
                 text-align: center;
             }
             
            .header ul
            {
                display: inline-block;
                margin: 0 auto;
            }
             
            .header h3
            {
               text-align: center;
               font-size: 15px;
            } 
            
            .for-phone
            {
                display: block;
            }
            
            .for-desktop
            {
                display: none;
            }
            
            .pull-right
            {
                float: none !important;
                margin: 0 auto;
            }
            
         }
         
         .rank-player
         {
             padding: 5px;
             background: gray;
             border-radius: 8px;
         }
         
         .rank-gameManager
         {
             padding: 6px;
             background: yellow;
             border-radius: 5px;
         }
         
         
        .head
        {
          width: 25%;
        }
        
        .head img
        {
          border-radius: 9px;
          margin: 3.5px;
        }
        
        .head-side
        {
            display: inline-block;
            /*background: #FCF;*/
            margin: 10px;
            height: 100%;
            width: 60%;
        }
        
        .banner
        {
            width: 100%;
        }
        
        .hero-logo
        {
          width: 70%;
          display: block;
          margin: 0 auto 5vh;
          padding-top: 20px;
        }
        
    </style>
    
    <link rel="stylesheet" type="text/css" href="./script/csshake.min.css">
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>