<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$category = $_POST['Category'];
$message = $_POST['Message'];

$recipient = "tomnaughton150@gmail.com";
$subject = $category;
$formcontent="From: $name \n Message: $message";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("!!!Error!!!");
echo "Email sent!";
?>