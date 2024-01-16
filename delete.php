


<?php session_start();

    if(!isset($_SESSION['isloggedin'])){

      echo '<script> alert ("You are Loged out !!"); </script> ';

        header('Location: admin.php');
    }

?>
<?php
 include 'connect.php';



 if (isset($_GET['did'])) {
     $pro_id = $_GET['did'];
     
 $sql = "DELETE FROM nproduct WHERE np_id ='$pro_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('Location: itemlist.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);


}

mysqli_close($conn);
 }
?>

