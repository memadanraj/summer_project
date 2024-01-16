
<?php session_start();

    if(!isset($_SESSION['isloggedin'])){

      echo '<script> alert ("You are Loged out !!"); </script> ';

        header('Location: admin.php');
    }

?>
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
        $special=0;
        $nspecial=0;
         $sql= " SELECT np_id FROM nproduct ";
         $result = mysqli_query($conn,$sql);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $count++;
            }
         
         }
         $sqlforspecial= " SELECT np_id FROM nproduct Where np_status= 'Special' ";
         $result = mysqli_query($conn,$sqlforspecial);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $special++;
            }
         
         }
         $sqlfornspecial= " SELECT np_id FROM nproduct Where np_status= 'nonSpecial' ";
         $result = mysqli_query($conn,$sqlfornspecial);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $nspecial++;
            }
         
         }

         $sqli= " SELECT con_name FROM contact ";
         $result = mysqli_query($conn,$sqli);
         if (mysqli_num_rows($result) > 0) {
                 
            while( mysqli_fetch_assoc($result)) {
                $cont++;
            }
         
         }
         $sqli= " SELECT SUM(g_total) FROM norder ";
         $result = mysqli_query($conn,$sqli);
         if (mysqli_num_rows($result) > 0) {
                 
            while($row = mysqli_fetch_assoc($result)) {
                $revenu= $row['SUM(g_total)'];
               
         }
        }
        $ocount=0;
        $sqli= " SELECT o_id FROM norder ";
        $result = mysqli_query($conn,$sqli);
        if (mysqli_num_rows($result) > 0) {
                
           while($row = mysqli_fetch_assoc($result)) {
               $ocount++;
              
        }
       }
       $ccount=0;
       $sqli= " SELECT p_mode FROM norder Where p_mode='cash' ";
       $result = mysqli_query($conn,$sqli);
       if (mysqli_num_rows($result) > 0) {
               
          while($row = mysqli_fetch_assoc($result)) {
              $ccount++;
             
       }
      }
      $ecount=0;
      $sqli= " SELECT p_mode FROM norder Where p_mode='Ebanking' ";
      $result = mysqli_query($conn,$sqli);
      if (mysqli_num_rows($result) > 0) {
              
         while($row = mysqli_fetch_assoc($result)) {
             $ecount++;
            
      }
     }


?>
<h2>Dashboard</h2>
<br>
<center>

<div class="menu-heading">
    
    
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
        <p>Total Special</p>
        <h3><?php echo $special ; ?></h3>
    </div>
    <div class="dashboard-card">
        <p>Total NonSpecial</p>
        <h3><?php echo $nspecial ; ?></h3>
    </div>
    <div class="dashboard-card">
        <p>Total Revenus</p>
        <h3><?php echo $revenu ; ?></h3>
    </div>
    <div class="dashboard-card">
        <p>Total Invoice</p>
        <h3><?php echo $ocount ; ?></h3>
    </div>
    <div class="dashboard-card">
        <p>Total Cash Payment</p>
        <h3><?php echo $ccount ; ?></h3>
    </div>
    <div class="dashboard-card">
        <p>Total E-banking</p>
        <h3><?php echo $ecount ; ?></h3>
    </div>
</div>
</center>

   
</body>
</html>