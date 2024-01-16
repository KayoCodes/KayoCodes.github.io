<?php

if(!empty($_POST["send"])){
    $name =$_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$toMessage = "keenan.ray@my.utsa.edu";

$mailHeaders = "Name: " . $name . 
"\r\n Email: " . $email .
"\r\n Phone: " . $phone .
"\r\n Message: " . $message . "\r\n";

if(mail($toMessage,$name,$mailHeaders)){
$message="Your Information is Received Successfully.";
}
}
header('Location: index.html');

?>