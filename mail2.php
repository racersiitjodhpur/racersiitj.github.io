<?php $email = $_POST['email'];
$recipient = "das.3@iitj.ac.in";
$subject = "Subscribe";
$mailheader = "From: $email \r\n";
mail($recipient, $mailheader) or die("Error!");
echo "Thank You!";
?>