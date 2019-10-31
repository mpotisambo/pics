<?php
//include 'Phones.php';
$photo;


$cap;


$id=$_GET['prod_id'];
$sql="SELECT * FROM photo WHERE id='$id'" ;
$result=mysqli_query($db,$sql);

while ($products=mysqli_fetch_array($result)){
  $photo=$products['photo_id'];

$cap=$products['caption'];

}


    ?>














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
  <p align="right"><a href="Phones.php"><button class="btn btn-danger btn-xs">Back to dashboard</button></a>
    <p align="right"><a href="home.php"><button class="btn btn-danger btn-xs">view product</button></a>
  </p>
<div class="col-lg-8">
  <div class="card  text-center">
    <div class="card-body">
      <h1>Admin</h1>
      <img src="img/admin/admin1.jpg">

  <form method="post" action="badili.php?prod_id=<?php echo $id ?>" enctype="multipart/form-data">
    <input class="form-control form-control" type="text" name="photo_id" placeholder="photo id" value="<?php echo $photo ?>"><br>

      <input  class="form-control form-control" type="file" name="img" placeholder="Image"><br>   
<textarea name="caption" cols="40" rows="4" placeholder="<?php echo $cap ?>"></textarea><br>

<input type="submit" name="update" value="UpDate Product">
</form>
</div>
</div>
</div>
</div>

<div class="container">





</body>

  </div>
</html>


