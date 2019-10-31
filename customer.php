<?php
$db=mysqli_connect("localhost","root","","pico");
if (!$db) {
  echo "not connected";

}


$name=$_POST['first_name'];
$last=$_POST['last_name'];
$add=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];

$sql="INSERT INTO `pico`.`user` ( `first_name`, `last_name`, `address`, `email`, `phone`,`password`) VALUES
 ( '$name', '$last', '$add', '$email', '$phone','$pass')";

 $query=mysqli_query($db,$sql);

 if(!$query){
      echo "not inserted";
 }

 header('location:login.php');

?>