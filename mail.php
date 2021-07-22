<?php

// get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$to = "boltonyussuf@gmail.com";
$subject = "Mail From Mebina Website";
$txt = "Name = ". $name ."\r\n Email = " . $email . "\r\n Message =" . $message . "\r\n   Phone = " . $phone ;
$headers = "From: noreply@mebina.com" . "\r\n" . 
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirect
header("Location:html/thankyou.html");

?>
<!--  -->