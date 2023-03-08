

<?php include "mailer.php";
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];

 $subject="Registration";
 $message= ` Name: $name, Email: $email, Phone: $phone, Address: $address `;
 $null="";

$mailer= new mailer();
// $name, $email, $subject, $body
$mailer->send($name,$email,$subject,$message);

 
 ?>