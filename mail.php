<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent= "From: $name \n Message: $message";
$recipient = "bennett.spears@gmail.com";
$subject = "Requesting Contact";
$mailheader = "From: Jemma Consulting";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
