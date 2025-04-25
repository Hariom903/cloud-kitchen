<?php session_start();
  ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Yummy Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Yummy</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php?home=true" class=" <?php echo $act = isset($_GET['home']) ? 'active' : ''; ?>">Home<br></a></li>
          <li><a href="about.php?about=true" class=" <?php echo $act = isset($_GET['about']) ? 'active' : ''; ?>">About</a></li>
          <li><a href="menu.php?category_id=1" class=" <?php echo $act = isset($_GET['category_id']) ? 'active' : ''; ?>">Menu</a></li>
          <li><a href="EventsSection.php?event=true" class=" <?php echo $act = isset($_GET['event']) ? 'active' : ''; ?>">Events</a></li>
          <li><a href="chefssection.php?chefs=true" class=" <?php echo $act = isset($_GET['chefs']) ? 'active' : ''; ?>">Chefs</a></li>
          <li><a href="gallery.php?gallery=ture" class=" <?php echo $act = isset($_GET['gallery']) ? 'active' : ''; ?>">Gallery</a></li>
          <?php if(!isset($_SESSION['user'])){ ?>
          <li><a href="login.php?Login=ture" class=" <?php echo $act = isset($_GET['Login']) ? 'active' : ''; ?>">Login</a></li>
          <li><a href="singup.php?singup=ture" class=" <?php echo $act = isset($_GET['singup']) ? 'active' : ''; ?>">Sing Up</a></li>
          <?php }else{ ?>
             <li><a href="./logout.php" >Logout</a></li>
             <li><a href="./my_order.php" >my order</a></li>

       <?php   } ?>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="Contact.php?contact=true" class=" <?php echo $act = isset($_GET['contact']) ? 'active' : '';?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="Booktable.php?booktable=true" class=" <?php echo $act = isset($_GET['booktable']) ? 'active' : ''; ?>">Book a Table</a>

    </div>
  </header>