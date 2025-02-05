<?php
$localhost = 'localhost';
$root = 'root';
$password = '';           
$db = 'login';                         
$con = mysqli_connect($localhost, $root, $password, $db); 
/*/mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');/*/

if ($con)
{
		//echo "ok";       
	}
if(isset($_POST['submit']))     
{    
    $name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$pass = $_POST['pass'];
    
	
	
  	$loginsert = mysqli_query($con, "INSERT INTO form(name,tel,email,address,pass)  VALUES ('$name','$tel','$email','$address','$pass')");
	  if($loginsert)
	  {
		  echo "<b> Your form has been successfully submitted!</b>";           
		  //header("location:index.php");
	  }
	  else
	  { 
		 echo "data not submitted";  
		  }    
} 
?>

<html>
<head>
<title> form php </title>
</head>
<body>
<form method="POST"> 
<h1> FORM </h1>


<input type="text" placeholder="enter your name" name="name" required> </input>
<input type="tel" placeholder="enter your phone number" name="tel" required> </input>
<input type="email" placeholder="enter your email id" name="email" required> </input>
<input type="text" placeholder="enter your address" name="address" required> </input>
<input type="password" placeholder="enter your password" name="pass" required> </input>

<input type="submit" value="submit" name="submit"> </input>
</form>
</body>
</html>