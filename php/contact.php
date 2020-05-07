<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "remibottin12@gmail.com"
  $headers = "From: ".$mailFrom;
  $text = "You have received an e-mail from ".$name.".".\n\n".$message;

  mail($mailTO, $subject, $txt, $headers);
  header("Location: index.html?mailsend")
}
