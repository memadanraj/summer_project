
    

   <?php

include 'nav.php';
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
<br>

<center> UPDATE Product</center><br >
  <br>
<div class="insert_form">
  
    <form action="#" method = "POST"  enctype= "multipart/form-data">
        Image :
        <input type="file" name = "uploadfile" required> <br> <br>

    Product Name :
    <input type="text" name="pname" id="" required>

    Price :

    <input type="text" name="pprice" id="" required><br><br>
    
    Status:

  <input type="radio" id="nonSpecial" name="food" value="nonSpecial"> 
   <label for="html">nonSpecial</label><br>
  <input type="radio" id="Special" name="food" value="Special">
  <label for="Special">Special</label><br>
    <br><br> 

 
    Product description :<br> <br>

    <textarea name="pdis" id="" cols="30" rows="5" required></textarea>

 


    <input type="submit" value="submit" name= "upload">

    </form>
</div>
</body>
</html>


<?php
include 'connect.php';
?>


<?php session_start();

    if(!isset($_SESSION['isloggedin'])){

      echo '<script> alert ("You are Loged out !!"); </script> ';

        header('Location: admin.php');
    }

?>
<?php
if (isset($_POST['upload'])){
$filename= $_FILES["uploadfile"]["name"];
$tempname =$_FILES["uploadfile"]["tmp_name"];
$folder ="image/". $filename;
move_uploaded_file( $tempname, $folder);
$pname= $_POST['pname'];
$pprice= $_POST['pprice'];
$pdis= $_POST['pdis'];
$pstatus= $_POST['food'];
  
$sql = "INSERT INTO `nproduct`( `np_image`,`np_name`, `np_price`,`np_about`,`np_status` ) VALUES ('$folder','$pname','$pprice','$pdis','$pstatus')";
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
