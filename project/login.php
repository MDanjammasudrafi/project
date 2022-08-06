<?php
session_start ();


$con = mysqli_connect ('localhost','root');

mysqli_select_db ($con , 'userregistration');

$name = $_POST ['name'];
$pass = $_POST ['pass'];

$s = "select * from registration where name ='$name' && pass = '$pass'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num== 1){
    $_SESSION['username'] = $name;
   header('location:home.php');
}
else{
   header('location:registration&login.html');
}
?>