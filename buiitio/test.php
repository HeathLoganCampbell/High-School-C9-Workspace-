<?php
    include "includes/head.php";
?>

<body>
    <div class="container">
      <?php
            include "includes/nav.php";
        ?>

<center>
    <?php for($x = 0; $x <= 10; $x++) : ?>
        <label style="font-size: 25px;" for=<?php echo "q$x"; ?> >It's not wise to tell your secrets.</label><br>
        <br>
        <input class="muted" id=<?php echo "q$x"; ?> type="text"
              data-provide="slider"
              data-slider-ticks="[1, 2, 3, 4, 5]"
              data-slider-ticks-labels='["Disagree", "", "Neutral", "", "Agree"]'            
              data-slider-min="1"
              data-slider-max="5"
              data-slider-step="1"
              data-slider-value="3"
              data-slider-tooltip="hide" />
              <br>
              <br>
    <?php endfor; ?>
</center>

					
<!--People see me as a natural leader.						-->
<!--I like to get revenge on authorities.						-->
<!--I like to use clever manipulation to get my way.						-->
<!--I hate being the center of attention.						-->
<!--I avoid dangerous situations.						-->
<!--Whatever it takes, you must get the important people on your side.						-->
<!--Many group activities tend to be dull without me.						-->
<!--Payback needs to be quick and nasty.						-->
<!--Avoid direct conflict with others because they may be useful in the future.						-->
<!--I know that I am special because everyone keeps telling me so.						-->
<!--People often say I'm out of control.						-->
<!--It's wise to keep track of information that you can use against people later.						-->
<!--I like to get acquainted with important people.						-->
<!--It's true that I can be mean to others.						-->
<!--You should wait for the right time to get back at people.						-->
<!--I feel embarrassed if someone compliments me.						-->
<!--People who mess with me always regret it.						-->
<!--There are things you should hide from other people because they don't need to know.						-->
<!--I have been compared to famous people.						-->
<!--I have never gotten into trouble with the law.						-->
<!--Make sure your plans benefit you, not others.						-->
<!--I am an average person.						-->
<!--I enjoy having sex with people I hardly know						-->
<!--Most people can be manipulated.						-->
<!--I insist on getting the respect I deserve.						-->
<!--I'll say anything to get what I want.-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css" type="text/css" />