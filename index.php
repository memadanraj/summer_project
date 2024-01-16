
<?php 

include 'connect.php';

?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NEWA Cottage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>


    <!-- nav bar -->
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="admin.php">Admin Login</a></li>
            </ul>
            <h1 class="logo"><img  class="logo_start" src="newlogo.png" alt=""> </h1>
        </div>
    </nav>

    <!-- Eat enjoy slidebar  -->
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Enjoy Repeat</h1>
            <p>Namaste, Welcome To Newa Cottege.</p>
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    </section>
<!--  newa About section here  -->
    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've been making healthy food last for 10 years</h2>
                <p>
                    Welcome to Newa Cottage, a beautiful cottage in the heart of Bikash Chowk.
                     For nearly two decades,we have been dedicated to offering
                      a taste of Nepal through our mouthwatering fast food 
                      and traditional dishes. Since our inception in 2005,
                       we've been on a mission to bring the vibrant 
                       flavors and culture of Nepal to your table.
                </p>
            </div>
            <div class="about-img">
                            <img src='image/momo3.jpg' border='0' alt='momo3'/>
            </div>
        </div>
    </section>
    <!--  types of food veg non veg section  -->
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                    <img src="image/cato.webp" alt="error" />
                    <div class="img-content">
                        <h3>Non-Vegetarian</h3>
                        <a href= "" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                    <div class="img-content">
                        <h3>Vegeterian</h3>
                        <a href="" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                    <img src="image/fastfood.jpeg" alt="error" />
                    <div class="img-content">
                        <h3>FastFood</h3>
                        <a href="" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  aajako special meanu  -->
    <section id="food-menu">
    <h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h2>
        <h2 class="food-menu-heading">Aaja Ko special ?</h2>
        <div class="food-menu-container container">

        <?php
                $sql = "SELECT * FROM nproduct WHERE np_status='Special'";
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

        <!--  more cick and display menu  -->
        <div class="moremenu-container">
                    
                
            <a href="menu.php" class="btn btn-primary">More</a>
            </div>
    </section>

    <!--  review of customers  -->
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="image/rukman.jpg" alt="" />
                        <p class="customer-name">Rukman Puri</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="image/Madan.png" alt="" />
                        <p class="customer-name">Madan Raj Kharel</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="image/sukrit.jpg" alt="" />
                        <p class="customer-name">Sukrit puri</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
        </div>
    </section>

    <!--  map with contact us  -->
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.059438582938!2d84.40534487447545!3d27.653632676213373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994faede64dbb3f%3A0xe5b5353bc4101f38!2sNewa%20cottage%20and%20Restaurant!5e0!3m2!1sne!2snp!4v1705405749551!5m2!1sne!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <form action="contact.php " method ="POST">
                <input type="text" placeholder="Your Name" name="conname" />
                <input type="email" placeholder="E-Mail"  name = "conemail" />
                <textarea cols="30" rows="6" placeholder="Type Your Message" name = "conmes" ></textarea>
                <input type="submit" class="btn btn-primary" value="Submit" style="color:white;text-align:center;" name="submit">
               
            </form>
            </div>
        </div>
    </section>
    <!--  website footer -->
    <footer id="footer">
        <h2>Newa Cottege &copy; all rights reserved  </h2>
    </footer>
</body>
<!-- 
    .................../ JS Code for smooth scrolling /...................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/app.js"></script>

</html>

