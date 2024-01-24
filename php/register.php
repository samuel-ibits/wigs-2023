

<?php include "mailer.php";
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];
 $note=$_POST["note"];
 $other=$_POST["other"];

 $subject="Quote";
 $message= ` Name: $name, Email: $email, Phone: $phone, Address: $address ,Note: $note,  Other :  $other`;
 $null="";

$mailer= new mailer();
// $name, $email, $subject, $body
$mailer->send($name,$email,$subject,$message);

 
 ?>