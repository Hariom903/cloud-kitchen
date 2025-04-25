<?php include("header.php");
   include("./db/db.php")
?>

<!-- Menu Section -->
<section id="menu" class="menu section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          
        <?php  
                        $cate = " SELECT * FROM category ";
                        $data = $conn->query($cate);
                        while($i = $data->fetch_assoc()){ ?>
                         <li class="nav-item">
                    <a href="?category_id=<?php echo $i['id'] ?>" class="nav-link">
                               <h4><?php echo $i['name'] ?></h4>
                    </a>
            </li><!-- End tab nav item -->  
                    <?php     }

                       ?> 
         
         
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="menu-starters">

                <?php require("./Startersa.php") ?>

            </div><!-- End Starter Menu Content -->
        </div>

    </div>

</section><!-- /Menu Section -->
<?php include("footer.php"); ?>