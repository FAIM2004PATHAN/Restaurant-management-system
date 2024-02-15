<header class="header">
   
   <style>
      .honey{
         color: #e18644;
      }
      .logo{
         display: block;
         width: 400%;
      }
      
   </style>
   

   <div class="flex">

      <a href="#" class="logo" >Panchywati</a>

      <nav class="navbar">
         <a href="admin.php" class="honey"><h1 class="honey">add products</h1></a><br>
         <a href="products.php" class="cart">view products</a><br>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"> <p>cart</p><span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>