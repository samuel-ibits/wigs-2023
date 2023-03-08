
<?php include "mailer.php";
 $name=$_POST["name"];
 $email=$_POST["email"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];

 $null="";

$mailer= new mailer();
// $name, $email, $subject, $body
$mailer->send($name,$email,$subject,$message);

 
 ?>
 