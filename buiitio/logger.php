<?php
    $fetchKeys = array('APIToken', 'Username', 'Date', 'Server', "LastWords");
    $fetchInfo = array();
    
    foreach ($fetchKeys as $key)
    {
        $fetchedValue = $_GET[$key];
        if(isset($fetchedValue))
        {
            $fetchInfo[$key] = $fetchedValue;
        } 
    }
    
?>