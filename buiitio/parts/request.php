<?php
  require_once('recaptchalib.php');
  $privatekey = "your_private_key";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    echo ("The reCAPTCHA wasn't entered correctly. Go back and try it again.");
  } else {
    // Your code here to handle a successful verification
    // Add player to request list
  }
?>