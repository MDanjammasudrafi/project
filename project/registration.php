<?php
session_start ();
header('location:registration&login.html');

$con = mysqli_connect ('localhost','root');

mysqli_select_db ($con , 'userregistration');

$name = $_POST ['name'];
$email = $_POST ['email'];
$pass = $_POST ['pass'];

$s = "select * from registration where name ='$name'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num== 1){
    echo " Username Already Exist";
}
else{
    $reg=" insert into registration(name , email , pass) values ('$name' , '$email', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
?>