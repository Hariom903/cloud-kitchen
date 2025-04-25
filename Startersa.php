<?php include("./db/db.php");   
if(isset($_GET['category_id'])){
      $id1 = $_GET['category_id'];
 
     $cate = " SELECT * FROM category WHERE id='$id1' ";
     $data = $conn->query($cate);
     while($i = $data->fetch_assoc()){ 
        $cat_name = $i['name'];
     }

    
}
?>
<div class="tab-header text-center">
    <p>Menu</p>

    <h3><?php  echo $cat_name ?></h3>
</div>
<div class="row gy-5">
<?php
include("./db/db.php");
if(isset($_GET['category_id'])){
     $id = $_GET['category_id'];
}
$getdata = "SELECT * FROM items WHERE category_id=$id";
$res = $conn->query($getdata);
while ($row = $res->fetch_assoc()) { ?>
    <div class="col-lg-4 menu-item">
        <a href="assets/img/menu/<?php  echo  $row['img_path']; ?>" class="glightbox"><img src="assets/img/menu/<?php  echo $row['img_path']; ?>" class="menu-img img-fluid" alt=""></a>
        <h4><?php echo $row['name']; ?></h4>
        <p class="ingredients">
            <?php  echo $row['description'];  ?>
        </p>
        <p class="price">
            $<?php  echo $row['price']; ?>
        </p>
        <a href="./order.php?order_id=<?php echo $row['id'] ?>" class="btn btn-danger"> Order Now</a>
    </div>  
    <!-- Menu Item -->
<?php  }

?>
</div>






