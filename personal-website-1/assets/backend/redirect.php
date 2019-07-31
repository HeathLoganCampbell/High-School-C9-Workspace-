<?php
    $redirect = $_GET['location'];
    if(isset($redirect))
    {
        //Check if link is verified in database (so people can't randomly add redirects for scams)
        header("Location: $redirect");
    }
    //route.heathlogancampbell.com
?>