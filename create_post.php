<?php
require('connect.php');
/*get data*/
$date=date('Y-m-d H:i:s');
/*$userid=$_SESSION['user_id'];*/
$userid=(int)5;
$pno=$_POST['phone_number'];
$phone_number=(int)$pno;
$blood_type=$_POST['blood_type'];
$type=$_POST['type'];
$description=$_POST['description'];
$email=$_POST['email'];
/*post and execute query*/
$query="insert into post (user_id,post_blood_type,post_phone_number,post_type,post_description,post_time,post_email) values (".$userid.",'".$blood_type."',".$phone_number.",'".$type."','".$description."','".$date."','".$email."')";
mysqli_query($connect,$query) or die(mysqli_error($connect));
/*go back to the ask for donation page*/
header("location: afd.php");

?>
