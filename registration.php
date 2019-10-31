<!DOCTYPE html>
<html>
<head>
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

   

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>




 
    
</head>
<div class="header">
<h2> Register</h2>
</div>
<body>
    <form method="post" action="customer.php" name="kitambulisho" onsubmit="return Validate();">

<div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="First name" name="first_name" id="firstname">
  </div>



  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Last name" name="last_name" id="lastname">
  </div>



 <div class="input-container">
             <i class="fa fa-institution icon"></i>
            <input class="input-field" type="text" placeholder="address" name="address" id="address">
        </div>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="Email">
  </div>

   <div class="input-container">
             <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone number" name="phone" id="phone">
        </div>


<div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="Password_1">
  </div>


<button type="submit" class="btn">Register</button> 
</div>
        <p> Alreay a member ?<a href="login.php">Sign In</a>
    </p>
</form>



</body>
</html>

   <script type="text/javascript">
    function Validate()
{
var mpoti=document.getElementById("firstname");
var peter=document.getElementById("lastname");
var sambo=document.getElementById("address");
var bahati=document.getElementById("phone");
var emailID = document.kitambulisho.Email.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 ))
{
alert("Please enter correct email ID")
document.kitambulisho.Email.focus() ;
return false;
}
if( mpoti.value == "" )
{
alert( "Please provide your firstname!" );
document.kitambulisho.firstname.focus() ;
return false;
}

if( peter.value == "" )
{
alert( "Please provide your lastname!" );
document.kitambulisho.lastname.focus() ;
return false;
}

if( sambo.value == "" )
{
alert( "Please provide your address!" );
document.kitambulisho.address.focus() ;
return false;
}


if( bahati.value == "" )
{
alert( "Please provide your phone number!" );
document.kitambulisho.phone.focus() ;
return false;
}


if(document.kitambulisho.Password_1.value==""){
    alert("Please provide a password!");
    document.kitambulisho,Password_1.focus();
    return false;

}

return (true);

}
</script>
 


