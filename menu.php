
<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>


<style>
.food-menu-container {
    margin-top: 20px;

}

.food-menuname{
    padding : " 20px"
}
</style>

<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.php">Home</a></li>
               
            </ul>
            <h1 class="logo"><img  class="logo_start" src="newlogo.png" alt=""> </h1>
        </div>
    </nav>




<section id="food-menu">
    <h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h2>
        <h2 class="food-menu-heading">MENU</h2>
        <div class="food-menu-container container">

        <?php
                $sql = "SELECT * FROM nproduct";
                $result = mysqli_query($conn, $sql);
                

                if (mysqli_num_rows($result) > 0) {
                 
                    while($row = mysqli_fetch_assoc($result)) {
        ?>
       
            <div class="food-menu-item" style = "  flex: 1 1 555px;">
                <div class="food-img">
                    <img src="<?php echo  $row['np_image']; ?>" alt=""/>
                </div>
                <div class="food-description">
                    <h2 class="food-titile"><?php echo $row['np_name']; ?></h2>
                    <p>
                    <?php echo $row['np_about']; ?>
                    </p>
                    <p class="food-price">Price: &#8360; <?php echo $row['np_price']; ?></p>
                </div>
            </div>
            <?php       }
            }
        ?>
        </div>
            </div>
        </selection>


      
      
</body>
</html>