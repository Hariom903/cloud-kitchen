
<?php include("header.php");?>
<main class="main">

<!-- Hero Section -->
 <?php include("hero.php"); ?>
<!-- /Hero Section -->



<!-- Why Us Section -->
 <?php include("whyus.php");?>
<!-- /Why Us Section -->

<?php 
 if(isset($_GET['category_id'])){
include("menu.php");
 }
 ?> 

<!-- Stats Section -->
 <?php #include("stats.php") ?>
<!-- /Stats Section -->


<!-- Testimonials Section -->
 <?php #include("Testimonials.php"); ?>
<!-- /Testimonials Section -->

<!-- Events Section -->
 <?php #include("EventsSection.php"); ?>
<!-- /Events Section -->

<!-- Chefs Section -->
 <?php #("chefssection.php"); ?>
<!-- /Chefs Section -->

<!-- Book A Table Section -->
 <?php #include("Booktable.php"); ?>
<!-- /Book A Table Section -->
<?php #include("gallery.php"); ?>

<!-- Gallery Section -->

<!-- /Gallery Section -->

<!-- Contact Section -->
<?php #include("Contact.php");?>
<!-- /Contact Section -->

</main>

<?php include("footer.php");?>