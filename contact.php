




<?php session_start();

    if(!isset($_SESSION['isloggedin'])){

      echo '<script> alert ("You are Loged out !!"); </script> ';

        header('Location: admin.php');
    }

?>
<?php 
include 'connect.php';

?>


<?php
if(isset($_POST['submit'])){

    $messege=$_POST['conmes'];
if(isset($_POST['conname'])&& !empty($_POST['conname'])  !=''){
	$name=$_POST['conname'];
	$regx='/^[a-zA-Z]*$/';
	if(preg_match($regx ,$name)){

        $vname= $name;
			
		}
		else{
			echo '<script>alert("invalid name :")</script>';
      header('Location: index.php');
		}
}

if(isset($_POST['conemail'] ) && !empty($_POST['conemail']!='') ){
	$email =($_POST["conemail"]);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $vemail= $email;
}
else{
  echo '<script>alert("invalid email :")</script>';
  header('Location: index.php');
}
}

$sql = "INSERT INTO `contact`( `con_name`,`con_email`, `con_msg` ) VALUES ('$vname','$vemail','$messege')";
$result = $conn->query($sql);
if ($result == TRUE) {
    echo "Thankyou for messege.";
    header('Location: index.php');
  
  }else{
    echo "Error:". $sql . "<br>". $conn->error;
  }
  $conn->close();
}


?>