<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="cart.css">
	<script src="jquery-3.2.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>

<body>
<p align="right"><a href="sucessuser.php"><button class="btn btn-danger btn-xs">Back to dashboard</button></a>
		<p align="right"><a href="index.php"><button class="btn btn-outline-success btn-xs">view product</button></a>
	</p>
<div class="col-lg-8">
	<div class="card  text-center">
		<div class="card-body">
			<h1>Admin</h1>
			

	<form method="post" action="photo.php" enctype="multipart/form-data">
	
		
				
			<input  class="form-control form-control" type="file" name="image" placeholder="Image"><br>		
<textarea name="caption" cols="40" rows="4" placeholder="say something about this image...."></textarea><br>

<input type="submit" name="upload" value="Upload">
</form>
</div>
</div>
</div>
</div>

<div class="container">




</body>
</html>


<?php
$msg="";

if (isset($_POST['upload'])){
$target="images/".basename($_FILES['image']['name']);




$db=mysqli_connect("localhost","root","","pico");
if (!$db) {
	echo "not connected";
}


$cap=$_POST['caption'];
$image=$_FILES['image']['name'];






$sql="INSERT INTO `photo` ( `caption`, `img`) VALUES ( '$cap', '$image')";

$query=mysqli_query($db,$sql);
if (!$query) {
	echo"failed to insert</br>";
}


if(move_uploaded_file($_FILES ['image']['tmp_name'],$target)){

echo "file uploaded successful";
}
else{
echo "file not uploaded";
}



}

?>