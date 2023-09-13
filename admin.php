<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Title</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="" method="POST" class="login-form">
        <h1>Login</h1>
        <input type="text" name="uname" placeholder="UserName">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" value="Login">
        
    </form>

</body>
</html>


<?php
 
 include 'connect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
	
	
	

	$name=$_POST['uname'];
	$pass=$_POST['pass'];
	   $sql= "SELECT * FROM login WHERE u_name = '$name' AND u_pass = '$pass' ";
	   $result = mysqli_query($conn,$sql);
	   $check = mysqli_fetch_array($result);
	   if(isset($check)){
        $_SESSION['isloggedin'] = "yes";
		header("Location: Dashboard.php", true, 301);
		exit();

	   }else{
	   echo 'failure';
	   }
		
	 }
	mysqli_close($conn);
	
	
?>

