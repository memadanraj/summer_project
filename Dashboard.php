<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<style>
    .menu-heading{
       
    margin-bottom: 20px;
}

.menu-heading h1{
    margin-bottom: 0;
}



    .dashboard-grid{
        margin: auto;
        width: 63%;

       
    display: grid;
    grid-template-columns: 250px 250px 250px;
    gap: 25px;
    
}

.dashboard-card{
 
    background-color: darkblue;
    color: white;
    padding: 0 15px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    box-shadow: 1px 2px 8px gray;
}

.dashboard-card h3{
    font-size: 30px;
    font-family: sans-serif;
    
    
}




</style>
 <?php
         include 'nav.php';
         include 'connect.php';
        $count= 0;
        $cont=0;
         $sql= " SELECT np_id FROM nproduct ";
         $result = mysqli_query($conn,$sql);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $count++;
            }
         
         }

         $sqli= " SELECT con_name FROM contact ";
         $result = mysqli_query($conn,$sqli);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $cont++;
            }
         
         }


?>
<center>
<div class="menu-heading">
    <h1>Dashboard</h1>
    <hr>
</div>
<div class="dashboard-grid">
    <div class="dashboard-card">
        <p>Total Product</p>
        <h3><?php echo $count ; ?></h3>
    </div>

    <div class="dashboard-card">
        <p>Total Feedback</p>
        <h3><?php echo $cont ; ?></h3>
    </div>

    <div class="dashboard-card">
        <p>Total Income</p>
        <h3>26</h3>
    </div>
</div>
</center>

   
</body>
</html>