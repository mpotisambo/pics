<?php

if (isset($_POST['update'])){
$target="images/".basename($_FILES['image']['name']);

$id=$_GET['prod_id'];


$db=mysqli_connect("localhost","root","","pico");
if (!$db) {
  echo "not connected";
}



$cap=$_POST['caption'];

$img=$_FILES['image']['name'];




$sql1="UPDATE  `pico`.`photo` SET  `caption` =  '$cap',
`img`='$img' WHERE  `photo`.`id` ='$id'";

$query1=mysqli_query($db,$sql1);
if (!$query1) {
  echo"failed to insert</br>";
}


if(move_uploaded_file($_FILES ['image']['tmp_name'],$target)){

header('location:sucessuser.php');

}
else{
echo "file not uploaded";
}



}
?>
