<?php
//including the database connection file
$db=mysqli_connect("localhost","root","","pico");
if (!$db) {
  echo "not connected";
}

//getting id of the data from url
$id = $_GET['prod_id'];
//deleting the row from table
$result = mysqli_query($db,  "DELETE FROM `photo` WHERE `photo`.`photo_id` = $id");


if(!$result){
    echo"doesnt work";
}



//redirecting to the display page (index.php in our case)
header("Location:sucessuser.php");
?>