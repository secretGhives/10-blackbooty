<?php
 $to = "secretgspot@gmail.com";
 $from = "BLACK BOOTY";
 $subject = "AENSA! Contact Form";
 $msg = $_REQUEST['body'];
 $body = "$from \n\nSays: $msg";
 if (mail($to, $subject, $body)) {
   echo("sent!");
  } else {
   echo("failed...");
  }
 ?>
