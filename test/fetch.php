<?php 
  include("../connect.php");
 
   $sql = "SELECT * FROM nproduct WHERE np_id='".$_POST['id']."'";
   $query = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>