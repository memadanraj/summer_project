<?php
include 'connect.php';


if(isset($_GET['id'])){
    $selectedId = $_GET['id'];
    

    $sql = "SELECT p_id,p_price FROM product WHERE p_id = $selectedId";
    $result = $conn->query($sql);
    
    $fields = array();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $fields = $row;
    }
    
    $conn->close();
    
   
    echo json_encode($fields);
}


   
?>
