<?php
  $to = "vinijumatul@example.com";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject = "Pesan dari " . $name . " (" . $email . ")";
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Pesan berhasil dikirim.";
  } else {
    echo "Pesan gagal dikirim.";
  }
?>
