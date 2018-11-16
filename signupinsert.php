<?php 

require('connect.php');
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];
$user_name = $_POST['username'];
$email = $_POST['email'];
$password =  $_POST['password'];
$dob = $_POST['date'];
$phno = $_POST['phno'];
$cat = $_POST['cat'];
$subcat = $_POST['subcat'];
$bloodtype = $_POST['bloodtype'];
$weight="0";
$photo = "images/p4.png";
if(isset($_POST[signup])){
$result=null;
$result = $conn->query("SELECT * FROM user WHERE user_email='$email'") ;

// We know user email exists if the rows returned are more than 0
if ( empty($result)) { 
    $sql = "INSERT INTO user ( user_id, user_name, user_email, user_password, user_location_city, user_location_township, user_blood_type, user_dob, user_ph, user_weight, user_photo) VALUES ('','$user_name','$email','$password', '$cat','$subcat','$bloodtype','$dob','$phno','$weight','$photo')";
    // Add user to the database
$conn->query($sql);
$conn = null;
    header("location: signin.php");
  
}
else { 
 $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}}
elseif (isset($_POST[signin]) ){
  $result = $conn->query("SELECT * FROM user WHERE user_email='$email' and user_password='$password'") ;
  if ( isset($result)) { 
        header("location: afd.php");
}
else{
     $_SESSION['message'] = "Email or password must be wrong!";
    header("location: error.php");
}
}
?>
