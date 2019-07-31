<?php
    if(isset($_GET['return']))
    {
        echo $_GET['return'];
        header("Location: " + $_GET['return']);
    }
?>