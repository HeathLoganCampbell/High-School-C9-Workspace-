<?php
    session_start();
    $loggedIn = false;
    
    if(isset($_POST['steam_username']))
    {
        $_SESSION['username'] = $_POST['steam_username'];
        $loggedIn = true;
    }
?>