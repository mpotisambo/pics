<?php



$db=mysqli_connect("localhost","root","","pico");
$sql="SELECT * FROM photo";
$result=mysqli_query($db,$sql);

?>
</!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="jquery-3.2.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>

<body>


<h1>ADMIN</h1>
<body>
<br>
<i class="fas fa-users fa-10x"></i>	
		<a href="photo.php"><button class="btn btn-danger btn-xs">Add product</button></a>

		


<nav class="navbar">
	
	
	<button  type="button" class="btn btn-warning btn-round" onclick = "window.print()"><span class="now-ui-icons ui-1_check"></span> Print</button> 
	<a href="index.php"><button type="button" class="btn btn-success btn-round"><span class="now-ui-icons ui-1_check"></span> Back to Homepage</button></a>
	
	<table  class=" table table-bordered table-striped table-hover datatable datatable-product" border="0" cellspacing="5" align="center">
		<tr>
			
			<th>Photo_id</th>
			<th>caption</th>
			<th>Image</th>
			<th></th>
			<th></th>
		</tr>
<?php
while ($products=mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php  echo $products['photo_id']?></td>
			<td><?php  echo $products['caption']?></td>

			<td><?php  echo $products['img']?></td>
			
			<?php echo "<td><a href=\"deletephoto.php?prod_id=$products[photo_id]\"><button class=\"btn btn-danger btn-round\">Delete</button></a></td>"?>
			<!--<?php echo "<td><a href=\"update.php?prod_id=$products[photo_id]\"><button class=\"btn btn-info btn-round\">Update</a></td>"?>-->
			


	</tr>
	<?php
  }

  
?>

	</table>


<br>
<br>
<br>
</body>
</html>