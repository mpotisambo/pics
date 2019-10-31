<?php

$servername = "localhost";
$username = "root";
$pw = "";
$db="pico";


$email=$_POST['email'];
$password=$_POST['password'];



$connection=mysqli_connect($servername,$username,$pw,$db);


if (!$connection) {
  echo"not connected";
}
else
{
  $sql="SELECT * FROM `user` WHERE email='$email' AND password='$password'";



$query=mysqli_query($connection,$sql);


if (mysqli_num_rows($query)==1) {
header('location:sucessuser.php');
}
else{
echo"Wrong combination of username and password";

}
}








?>