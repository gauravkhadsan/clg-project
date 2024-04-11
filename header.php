<header class="header">

   <div class="flex">

      <a href="#" class="logo">Hungery <b>hub</b></a>

      

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>


   </div>

</header>