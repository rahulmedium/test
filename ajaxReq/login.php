<?php
session_start();
require('../conn/dbconfig.php');
$user=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$pass1=md5($pass);
//echo "SELECT * FROM fms_users where user_name='".$user."' and password='".$pass1."' and user_type=1";
$result=mysqli_query($con,"SELECT * FROM users where user_name='".$user."' and password='".$pass1."' and user_type=1");
$row=mysqli_fetch_array($result); 
$count= mysqli_num_rows($result); 
$uid=$row['id']; 
if($count==1){
$_SESSION['sid']=session_id();
$_SESSION['name']=$user;
$_SESSION['id']=$uid;
$string='yes';
echo preg_replace('/\s+/', '', $string);
}else {
echo "Invalid user name or password.";
}
?>

