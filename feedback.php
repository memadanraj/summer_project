

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
   
    <link rel="stylesheet" href="css/itemlist.css">

</head>
<body>
<style>

</style>
<?php
    include 'nav.php';
    include 'connect.php';
  ?>

 

<h2> Feedback List </h2>
    
   
    <table class="table" >
    <thead>
        <tr >
            <th>             
            Customer Name
            </th>
            <th>
                Email
            </th>
           <th>
                Messege
            </th>
           
           
          
        </tr>
        </thead>
         
        <tbody>
              
      <!-- view data and operation here -->
        <?php
                $sql = "SELECT * FROM contact";
                $result = mysqli_query($conn, $sql);
                

                if (mysqli_num_rows($result) > 0) {
                 
                    while($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr class="table-row">
                    <td><?php echo $row['con_name']; ?></td>
                    <td><?php echo $row['con_email']; ?></td>
                    <td><?php echo $row['con_msg']; ?></td>
                    </td>
                    </tr>
        <?php       }
            }
        ?>
                   
                
    </tbody>
    </table>
    </div>


</body>
</html>


