<?php



$db=mysqli_connect("localhost","root","","pico");
$sql="SELECT * FROM photo";
$result=mysqli_query($db,$sql);

$products=mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>



<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photography</title>
	<link rel="stylesheet" type="text/css" href="style.css" />	
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="src/css/jquery.fancybox.min.css">


  <script type="text/javascript" src="src/js/jquery-3.3.1.slim.min.js"></script>
	<script src="src/js/jquery.fancybox.min.js"></script>
  <script src="jquery-3.2.1.slim.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="img/camera-icon.png"/>
</head>

<body>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>

<div class="navbar navbar-expand-md">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.php"><i  class="fa fa-sign-in icon">log in</i></a> 
</div>

		
	</section>

	<div class="clearfix"></div>


	
	<div class="row"> 
  

<?php foreach ($products as  $product):?>


<div class="column">
            
      
              
              </div>
          
              <a href="grand/img/<?php echo $product['img'] ?>" data-fancybox="gallery" data-caption="<?php echo $product['caption']  ?>"><img src="grand/img/<?php echo $product['img'] ?>"style="width:50%"></a>
                
                


              

          <!-- end of card-->
        </div>
<?php endforeach; ?>

</body>
</html>