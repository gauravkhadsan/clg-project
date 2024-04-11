<?php 
include 'config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hungery hub</title>
        <script>const carousel = new bootstrap.Carousel('#myCarousel')</script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
          <a class="navbar-brand col-lg-3 me-0" href="#">Hungery <b>hub</b></a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html">About us</a>
            </li>
            </ul>
           <?php

           if(isset($_SESSION['user_name'])){
           $user=$_SESSION['user_name'];
           $select=mysqli_query($conn,"SELECT * FROM `user-form` WHERE name='$user'");
           $row=mysqli_fetch_array($select);
           $id=$row['id'];
           ?>
          
          <?php
          if(isset($id)){
          ?><div class="login">
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <div class="btn btn-primary"><?php echo $_SESSION['user_name']; ?> </div>
          </div>
          
          <a class="nav-login" href="logout.php"><img class="logout" src="fonts/logout1.png" alt=""></a>
          </div> 
          <?php }
        }else{?>
           <div class="d-lg-flex col-lg-3 justify-content-lg-end">
             <div class="btn btn-primary"><a class="nav-link" href="login.php">login</a> </div>

           </div>
           <?php }?>
          
        </div>
      </div>
    </nav>

    <section>
        <div class="content">

            <div class="left">
                <div class="info">
                    <h2>Order your Best Food <br> Any Time</h2>
                    <p class="roboto">Hey,Our delicious food is waiting for you,<br>We are always near to you with fresh
                        food of food</p>
                    <button class="poppins"><a href="products.php">Explore now</a></button>
                </div>
            </div>


            <div class="right">
                <img src="image/roll-removebg-preview.png" alt="" srcset="">
            </div>

        </div>
    </section>
    </div>



    <div class="searchbar">
        <div class="search">
            <p class="seap">What's in your Mind..?</p>
            <input type="search" name="search" id="" placeholder="Search near by delicious food restaurants...">
        </div>
    </div>    
  

  <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img class="bir" src="image/fried-rice.jpg" alt="">
    <h2 class="fw-normal"> "Savor the Flavors of Japan with Our Authentic Japanese Fried Rice"</h2>
    <p>"Experience the perfect blend of savory flavors and aromatic spices in our Japanese Fried Rice. Made with premium ingredients and expertly crafted, each bite transports you to the heart of Japan's culinary tradition."</p>
    <p><a class="btn btn-secondary" href="products.php">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="bir" src="image/paneer.jpg" alt="">
    <h2 class="fw-normal"> "Indulge in Richness: Delightful Mattar Paneer Delicacy"</h2>
    <p>"Savor the creamy goodness of tender paneer cubes and vibrant green peas simmered in a flavorful tomato-based gravy. Our Mattar Paneer is a true celebration of traditional Indian cuisine, offering a burst of flavors in every bite."</p>
    <p><a class="btn btn-secondary" href="products.php">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="bir" src="image/roti.jpg" alt="">
    <h2 class="fw-normal">"Aloo Sabji Delight: Comforting Potatoes in a Spiced Gravy"</h2>
    <p>"Indulge in the comforting simplicity of our Aloo Sabji, where tender potatoes are lovingly cooked in a rich blend of aromatic spices, creating a symphony of flavors. Paired perfectly with soft, warm rotis, this classic combination promises a satisfying and wholesome meal that's reminiscent of home-cooked goodness."</p>
    <p><a class="btn btn-secondary" href="products.php">View details »</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">First featurette heading. It’ll blow your mind.</h2>
    <p class="lead">"Ramen: Noodles of Delight
<br>
Embark on a culinary journey to Japan with our tantalizing Ramen bowls, where each slurp tells a story of savory perfection. Crafted with precision and passion, our Ramen boasts tender noodles immersed in a flavorful broth that's both comforting and invigorating. From the richness of the broth to the delicate balance of toppings, every bowl of Ramen at our establishment promises an authentic taste adventure that keeps patrons coming back for more. "</p>
  </div>
  <div class="col-md-5">
   <img class="feature" src="image/ramen (2).jpg" alt="">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. See for yourself.</h2>
    <p class="lead">"Khause: A Taste of Tradition
      <br>

Step into a world of savory delights with Khause, where heritage meets culinary excellence. Our signature dish, Khause, is a culinary masterpiece crafted with care and tradition. Each bite unveils layers of flavor and texture, reminiscent of the rich history and cultural tapestry of our region. From the succulent meat to the aromatic spices, Khause promises an unforgettable dining experience that delights the senses and captivates the palate. p>
  </div>
  <div class="col-md-5 order-md-1">
   <img class="feature" src="image/khause.jpg" alt="">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. checkout.</h2>
    <p class="lead">
"Pawan Rice: A Culinary Marvel
<br>
Discover the essence of authentic taste with Pawan Rice, where every grain narrates a story of purity and flavor. Sourced from the finest fields and cultivated with care, Pawan Rice promises a symphony of aroma and texture that captivates the senses. Whether it's the aromatic Basmati or the wholesome Brown, our rice varieties stand as a testament to quality and tradition.</p>
  </div>
  <div class="col-md-5">
    <img class="feature" src="image/prawn rice.jpg" alt="">
  </div>
</div>
<hr class="featurette-divider">

<h2 class="fw-normal">Customer review..!</h2>

<div class="row">
  <div class="col-lg-4">
    <img class="bir" src="review/2150493075.jpg" alt="">
    <h2 class="fw-normal">Visited the Taj diner down the street.</h2>
    <p>" Ate their Paav bhaji and matar panner. Reminded me of Mom's Sunday suppers. Friendly service, cozy atmosphere. A taste of nostalgia worth savoring."</p>
    
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="bir" src="review/cust.jpg" alt="">
    <h2 class="fw-normal">Dined at the new hydrabad junction uptown.</h2>
    <p>" Tried their signature Chicken biryani, cooked to perfection. Flavors were bold, presentation elegant. Service was attentive, ambiance modern. A delightful culinary experience, worth returning for."</p>
  
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="bir" src="review/portrait-young-beautiful-woman-standing-smiling.jpg" alt="">
    <h2 class="fw-normal">Discovered a charming café downtown.</h2>
    <p>" Opted for their  Ramen, bursting with flavor. Every bite felt like a journey to the coast. Service was impeccable, ambiance cozy and inviting. A delightful culinary escape; I'll be back for more.".</p>
    
    
    
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
<hr class="featurette-divider">


<!-- /END THE FEATURETTES -->

</div>
<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p class="condition">© 2017–2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</body>
</html>

