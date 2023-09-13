<?php
include '../connect.php';


if(isset($_GET['id'])){
    $selectedId = $_GET['id'];
    

    $sql = "SELECT np_id,np_price FROM nproduct WHERE np_id = $selectedId";
    $result = $conn->query($sql);
    
    $fields = array();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $fields = $row;
        // echo $fields;

        
    }
    
    $conn->close();
    
   
    echo json_encode($fields);
}


   
?>
