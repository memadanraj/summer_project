<?php

include '../connect.php';
$sql = "SELECT * FROM nproduct";
$result = mysqli_query($conn, $sql);

$options = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options[] = $row;
    }
}

$conn->close();


echo json_encode($options);
?>
