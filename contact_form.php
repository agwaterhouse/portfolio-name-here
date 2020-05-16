

<!DOCTYPE html>

<html lang="en-gb">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Contact Me thank you message, with option to return to homepage">
  <meta name="author" content="Adam Waterhouse">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adam Waterhouse - Thank You</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: $email\n";
$sent = mail('agwaterhouse@gmail.com', 'Website Portfolio Message',$message,$headers);
?>

</head>
<body>
	<main>

<div class="thank-you">
	<div class="message">
<h2>Thanks for getting in touch, I aim to reply to all emails within 24 hours.</h2>
</div>
<div class="return-button">
   <a class="button" href="index.html">Go Back to homepage</a>
</div>

</div>
</main>
</body>