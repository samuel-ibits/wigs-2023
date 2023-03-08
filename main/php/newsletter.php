
<?php include "mailer.php";
 $email=$_POST["email"];
 $null="";
 $message=`I $email subcribes to your Newsletter`;

$mailer= new mailer();
$mailer->send($null,$email,'Newsletter',$message);

 
 ?>