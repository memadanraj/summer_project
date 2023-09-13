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

 

<h2> Item List </h2>
    <div class="container">
        <div class="divadd"> 
            <button  class="btnadd" > <a  style="color:white; text-decoration: none;"  href="insert.php">Add Product</a> </button>
        </div>
   
    <table class="table" >
    <thead>
        <tr >
            <th>             
           Pid
            </th>
            <th>
                Product
            </th>
           <th>
                Price
            </th>
            <th>
               About
            </th>
            <th>
                Image
            </th>
            <th>
                Status
            </th>
             <th>
                Operation
            </th>
          
        </tr>
        </thead>
         
        <tbody>
              
      <!-- view data and operation here -->
        <?php
                $sql = "SELECT * FROM nproduct";
                $result = mysqli_query($conn, $sql);
                

                if (mysqli_num_rows($result) > 0) {
                 
                    while($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr class="table-row">
                    <td><?php echo $row['np_id']; ?></td>
                    <td><?php echo $row['np_name']; ?></td>
                    <td><?php echo $row['np_price']; ?></td>
                    <td><?php echo $row['np_about']; ?></td>
                    <td> <img src="<?php echo  $row['np_image']; ?>" alt="" height="100px" width = "100px"></td>
                    <td><?php echo $row['np_status']; ?></td>
                    <td ><button class="btnitm"><a  style="color:white; text-decoration: none;"  href="update.php? uid=<?php echo $row['np_id']; ?>">Update</a></button>
                     &nbsp;
                    <button class="btnitm"> <a style="color:white; text-decoration: none;"  href="delete.php? did=<?php echo $row['np_id']; ?>">Delete</a></button>
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


