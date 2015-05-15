<?php $Name = $_POST['Name'];
$GuestName = $_POST['GuestName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Attending = $_POST['Attending'];
$Meal = $_POST['Meal'];
$GuestMeal = $_POST['GuestMeal'];
$Restrictions = $_POST['Restrictions'];
$Others = $_POST['Others'];
$formcontent="Your Name: $Name \n Name(s) of Guest(s): $GuestName \n Email: $Email \n Phone: $Phone \n Attending: $Attending \n Meal Option: $Meal \n Guest's Meal Option: $GuestMeal";
$recipient = "jessicajoyce.lau@gmail.com";
$subject = "RSVP";
$mailheader = "From: $Email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>