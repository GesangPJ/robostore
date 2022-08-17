 <!-- HEADER -->
 <header>
     <!-- TOP HEADER -->
     <div id="top-header">
         <div class="container">
             <ul class="header-links pull-left">
                 <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                 <li><a href="#"><i class="fa fa-envelope-o"></i> paudrastore@gtech.id</a></li>
                 <li><a href="#"><i class="fa fa-map-marker"></i> R1-R5 2nd floor, Paudra Tower, Central Atlantis</a>
                 </li>
             </ul>
             <ul class="header-links pull-right">
                 <!--kalau sudah login-->
                 <?php if (isset($_SESSION['customer'])):?>
                 <li><a href="account.php"><i class="fa fa-user-o"></i>Your Account</a></li>
                 <li><a href="logout.php"><i class="fa fa-user-o"></i>Log Out</a></li>
                 <!--//kalau sudah login-->
                 <!--kalau belum login-->
                 <?php else : ?>
                 <li><a href="customlogin.php"><i class="fa fa-user-o"></i>Log In</a></li>
                 <?php endif ?>
                 <!--done-->
             </ul>
             <br>
         </div>
     </div>
     <!-- /TOP HEADER -->

     <!-- MAIN HEADER -->
     <div id="header">
         <!-- container -->
         <div class="container">
             <!-- row -->
             <div class="row">
                 <!-- LOGO -->
                 <div class="col-md-3">
                     <div class="header-logo">
                         <a href="index.php" class="logo">
                             <img src="./img/logo.png" alt="">
                         </a>
                     </div>
                 </div>
                 <!-- /LOGO -->



                 <!-- ACCOUNT -->
                 <div class="col-md-3 clearfix">
                     <div class="header-ctn">
                         <div class="menu-toggle">
                             <a href="#">
                                 <i class="fa fa-bars"></i>
                                 <span>Menu</span>
                             </a>
                         </div>
                         <!-- /Menu Toogle -->
                     </div>
                 </div>
                 <!-- /ACCOUNT -->
             </div>
             <!-- row -->
         </div>
         <!-- container -->
     </div>
     <!-- /MAIN HEADER -->
 </header>
 <!-- /HEADER -->

 <!-- NAVIGATION -->
 <nav id="navigation">
     <!-- container -->
     <div class="container">
         <!-- responsive-nav -->
         <div id="responsive-nav">
             <!-- NAV -->
             <ul class="main-nav nav navbar-nav">
                 <li class="active"><a href="index.php">Home</a></li>
                 <li><a href="laptopgaming.php">Laptops</a></li>
                 <li><a href="smartphone.php">Smartphones</a></li>
                 <li><a href="voucher.php">Digital Vouchers</a></li>
             </ul>
             <!-- /NAV-->
         </div>
         <!-- /responsive-nav -->
     </div>
     <!-- /container -->
 </nav>
 <!-- /NAVIGATION -->