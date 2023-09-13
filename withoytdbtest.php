<?php
// Simulate fetching data from a database based on the selected option
if(isset($_GET['selectedValue'])){
    $selectedValue = $_GET['selectedValue'];
    
    // Replace this with your actual data retrieval logic
    $data = array();
    if ($selectedValue == '1') {
        $data['field1'] = 'Value A';
        $data['field2'] = 'Value X';
    } elseif ($selectedValue == '2') {
        $data['field1'] = 'Value B';
        $data['field2'] = 'Value Y';
    } elseif ($selectedValue == '3') {
        $data['field1'] = 'Value C';
        $data['field2'] = 'Value Z';
    }

    echo json_encode($data);
}
?>
