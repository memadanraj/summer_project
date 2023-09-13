




   <?php
include 'connect.php';
include 'nav.php';
?>

<?php

 $uid = $_GET['uid'];
 $sql = "SELECT * FROM `nproduct` WHERE `np_id`= '$uid'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $name=$row['np_name'];
 $price=$row['np_price'];
 $about=$row['np_about'];



 if (isset($_POST['submit'])) {

   $name = $_POST['pname'];
   $price = $_POST['pprice'];
   $about = $_POST['pdis'];
   $status=$_POST['food'];

   

   $sql = " UPDATE `nproduct` SET  `np_id`='$uid', `np_name`='$name', `np_price`='$price',`np_status`='$status', `np_about`= '$about' WHERE `np_id`='$uid' ";
   $result = $conn->query($sql);
   if ($result == TRUE) {
     echo "New record created successfully.";
     header('Location: itemlist.php');
   
   }else{
     echo "Error:". $sql . "<br>". $conn->error;
   }
   $conn->close();
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/insertform.css" />
</head>
<body>


   <div class="insert_form">
    <form action="#" method = "POST" >
       
    Product Name :
    <input type="text" name="pname" id="" autocomplete="off" value=<?php echo $name ?>   >

    Price :

    <input type="text" name="pprice" id="" autocomplete="off" value=<?php echo $price ?>  > <br> <br>
     Status:

<input type="radio" id="nonSpecial" name="food" value="nonSpecial"> 
 <label for="html">nonSpecial</label><br>
  <input type="radio" id="Special" name="food" value="Special">
  <label for="Special">Special</label><br>
  <br><br> 
    Product description :<br> <br>

    <textarea name="pdis" id="" cols="30" rows="5"   autocomplete= "off"  ><?php echo $about ?> </textarea>

    <input type="submit" value="submit" name= "submit">

    </form>
</div>
 


 
</body>
</html>
