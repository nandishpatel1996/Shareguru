<?php
$f=$_POST["firstname"];
$l=$_POST["lastname"];
$p=$_POST["phoneno"];
$e=$_POST["email"];
$u=$_POST["uname"];
$pw=$_POST["pwd"];
$b=$_POST["date"];
$m=$_POST["month"];
$y=$_POST["year"];
$a=$_POST["address"];
$s=$_POST["gender"];
$c=mysqli_connect("localhost","id2444408_nandish","id2444408_nandish");
$z=mysqli_select_db($c,"id2444408_nandish");
$au="select * from user where User_id='".$u."'";
$aa=mysqli_query($c,$au);
$ae="select * from user where Email='".$e."'";
$ab=mysqli_query($c,$ae);
$am="select * from user where Phone_no='".$p."'";
$ac=mysqli_query($c,$am);
if(mysqli_num_rows($aa)>0 || mysqli_num_rows($ab)>0 || mysqli_num_rows($ac)>0)
{
header("location:SignUp.php ? errorcontentsame");
}
else{

$msg ="Dear ".$f." ".$l.",\nThanks for Registering on ShareGuRu.tk"."\nWe will try to satisfy all your needs.";
$msg = wordwrap($msg,70);
$mail=mail($e,"Thank You for Registering",$msg);


 if(!$mail) {
	echo '<script language="javascript">
	alert("Something went wrong!!!")
	window.location.href="SignUp.php"
	</script>';
 }
 	 else
 {
	$q="insert into user values('','".$f."','".$l."','".$p."','".$e."','".$u."','".$pw."','".$b."','".$m."','".$y."','".$a."','".$s."')";
	mysqli_query($c,$q);
	header("location:ThankYou.php");
 }

}
?>

/*require 'PHPMailer-master\PHPMailerAutoload.php';
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "shareguru1909@gmail.com"; ///maru
$mail->Password = "ldrp@2016";
$mail->SetFrom("shareguru1909@gmail.com");//user
$mail->Subject = "Welcome To ShareGuRu!";
$mail->Body = "Dear ".$f." ".$l.",<br> Thanks for Registering on www.ShareGuRu.com.<br> We will try to satisfy all your needs" ;
$mail->AddAddress($e);

 if(!$mail->Send()) {
	$mail->ErrorInfo; 
	//$m1 = mysql_select_db("nandish",$c);
	//$q = "delete from feedback where Feed_uid ='".$a."'";
	//mysql_query($q);
	echo "Mailer Error: " . $mail->ErrorInfo;
	echo '<script language="javascript">
	alert("Something went wrong!!!")
	window.location.href="SignUp.php"
	</script>';
 }
 	 else
 {
 	$q="insert into user values('','".$f."','".$l."','".$p."','".$e."','".$u."','".$pw."','".$b."','".$m."','".$y."','".$a."','".$s."')";
	mysqli_query($c,$q);
	header("location:ThankYou.php");
 }*/