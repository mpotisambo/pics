
</!DOCTYPE html>
<html>
<head>
	<title>Page.login</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <form method="post" action="userrequest.php" onsubmit="return validate();"  name="kitambulisho">
<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="input-field" type="text" placeholder="Email" name="email" id="Email">
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="input-field" type="password" placeholder="Password" name="password" id="Password_1">
</div>

<button type="submit" class="btn">Log in</button>  

</form>
<p>  Not  a member ?<a href="registration.php">Register</a>
</body>
</html>


<script type="text/javascript">     
function validate() {

var sambo=document.getElementById("username");
var peter= document.getElementById("Password_1");
var emailID = document.kitambulisho.Email.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 ))
{
alert("Please enter correct email ID")
document.kitambulisho.Email.focus() ;
return false;
}
if (peter.value=="") {
    alert("Password needed");
    return false;
}


return true;

}

    </script>
