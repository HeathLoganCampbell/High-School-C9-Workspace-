<?php 
    include "includes/account.php";
    if($username == null)
    {
        include "includes/login.php";
        if(!$loggedIn)
        {
            include "parts/login.php";
            return;
        }
    }
    
//     <div class="sell-box">
//     <div class="text-center">
//         <h5 class="text-muted text-uppercase m-b">Monthly VIP</h5>
//         <h2><sup>$</sup>25.00<small>/mo<small></h2>
    
//         <ul class="text-left m-y-md">
//             <li><strong>Perk of Perkiness</strong> to get a perk of perkiness</li>
//             <li><strong>Rainbow Name</strong> in chat</li>
//         </ul>
//         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
//             <input type="hidden" name="cmd" value="_s-xclick">
//             <input type="hidden" name="hosted_button_id" value="LYCHTPKEATXRL">
//             <input type="hidden" name="custom" value="
//                 <?php
//                     include "includes/account.php";
//                     if($username == null)
//                         // header("location: login.php?return=store.php");
//                     echo  "$username";
//                
//             <input type="submit" value="Buy Monthly VIP - $25.00/mo" name="submit" title="PayPal - The safer, easier way to pay online!" class="btn btn-primary btn-lg">
//             <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
//         </form>
//     </div>
// </div>
?>

<h1 class="text-center">
    Develop. Future. Fun.
</h1>
<h3 class="text-center">
    We can do it with you
</h3>
</br>


<div class="col-md-4 text-center">
     <h5 class="text-muted text-uppercase m-b">Donator Account</h5>
    <h2><sup>$</sup>19.99<small>/acc</small></h2>
    <ul class="text-left m-y-md">
        <li><strong>Aqua username</strong> in tab and in chat</li>
    </ul>
    <a class="btn btn-success">Get Donator</a>
</div>

<div class="col-md-4 text-center">
     <h5 class="text-muted text-uppercase m-b">Premium Account</h5>
    <h2><sup>$</sup>29.99<small>/acc</small></h2>
    <ul class="text-left m-y-md">
        <li><strong>Blue username</strong> in tab and in chat</li>
    </ul>
    <a class="btn btn-success">Get Premium</a>
</div>

<div class="col-md-4 text-center">
     <h5 class="text-muted text-uppercase m-b">Platinum Account</h5>
    <h2><sup>$</sup>39.99<small>/acc</small></h2>
    <ul class="text-left m-y-md">
        <li><strong>Dark Blue username</strong> in tab and in chat</li>
    </ul>
    <a class="btn btn-success">Get Platinum</a>
</div>


<!--<div class="sell-box">-->
<!--    <div class="text-center">-->
<!--        <h5 class="text-muted text-uppercase m-b">Basic Account</h5>-->
<!--        <h2><sup>$</sup>40.00<small>/acc<small></h2>-->
    
<!--        <ul class="text-left m-y-md">-->
<!--            <li><strong>Perk of Perkiness</strong> to get a perk of perkiness</li>-->
<!--            <li><strong>Rainbow Name</strong> in chat</li>-->
<!--        </ul>-->
<!--        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
<!--            <input type="hidden" name="cmd" value="_s-xclick">-->
<!--            <input type="hidden" name="hosted_button_id" value="LYCHTPKEATXRL">-->
<!--            <input type="hidden" name="custom" value="-->
<!--                <? php-->
<!--                    include "includes/account.php";-->
<!--                    if($username == null)-->
<!--                        // header("location: login.php?return=store.php"); -->
<!--                    echo  "$username";-->
<!--                ?>">-->
<!--            <input type="submit" value="Buy Basic Account - $40.00/acc" name="submit" title="PayPal - The safer, easier way to pay online!" class="btn btn-primary btn-lg">-->
<!--            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
