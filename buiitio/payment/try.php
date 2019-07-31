<?php
  $req = 'cmd=_notify-validate';

  foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
  }

  //Set up the acknowledgement request headers
  $header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
  $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
  $header .= "Host: www.sandbox.paypal.com\r\n";
  $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

  //Open a socket for the acknowledgement request
  $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

  // Post request back to PayPal for validation
  fputs ($fp, $header . $req);


   while (!feof($fp)) {                     // While not EOF
    $res = fgets ($fp, 1024);              // Get the acknowledgement response

    if (strcmp ($res, "VERIFIED") == 0) {  // Response is VERIFIED

      // Send an email announcing the IPN message is VERIFIED
      $mail_From = "IPN@example.com";
      $mail_To = "me@gmail.com";
      $mail_Subject = "VERIFIED IPN";
      $mail_Body = $req;
      mail($mail_To, $mail_Subject, $mail_Body, $mail_From);
    }
    else if (strcmp ($res, "INVALID") == 0) { // Response is INVALID

      // Notification protocol is NOT complete, begin error handling

      // Send an email announcing the IPN message is INVALID
      $mail_From = "IPN@example.com";
      $mail_To = "me@gmail.com";
      $mail_Subject = "INVALID IPN";
      $mail_Body = $req;
      mail($mail_To, $mail_Subject, $mail_Body, $mail_From);

    }
  }

  fclose ($fp);
?>