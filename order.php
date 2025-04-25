<?php include("header.php"); ?>
<?php
if (isset($_GET['order_id'])) {
    $_SESSION['order_id'] = $_GET['order_id'];
}
if (!isset($_SESSION['user'])) {
    // header("location:./login.php");
    echo "<script> window.location.assign('http://localhost/Yummy/login.php') </script>";
    die();
}
?>

<div class="row p-5">
    <div class=" col-12 ps-4 pe-4 col-sm-6 ">
        <div class="container text-center pt-5 pb-5">
            <div class="row ">
                <div class="col-12 col-sm-6">
                    <h2 class="text-center text-success"> Order Now Hare....! </h2>
                    <div class="row gy-5">
                        <?php
                        include("./db/db.php");
                        $id =  $_SESSION['order_id'];
                        $getdata = "SELECT * FROM items WHERE id=$id";
                        $res = $conn->query($getdata);
                        while ($row = $res->fetch_assoc()) {
                            $price = $row['price'];
                            ?>
                           
                            <div class="col-lg-4 offset-3 menu-item">
                                <a href="assets/img/menu/<?php echo  $row['img_path']; ?>" class="glightbox"><img src="assets/img/menu/<?php echo $row['img_path']; ?>" class="menu-img img-fluid" alt=""></a>
                                <h4><?php echo $row['name']; ?></h4>
                                <p class="ingredients">
                                    <?php echo $row['description'];  ?>
                                </p>
                                <p class="price">
                                    $<?php echo $row['price']; ?>
                                </p>
                            </div>
                        <?php  }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6  col-12  ps-4 pe-4">

        <form action="" method="post">
            <div class="pt-2 pb-1">
                <label for="username" class="form-label">User Name </label>
                <input type="text" class="form-control" required id="username" name="username" value="<?php echo $_SESSION['user']['username'] ?>" placeholder="Enter User Name ">
            </div>
            <div class="pt-2 pb-1">
                <label for="phone" class="form-label">mobile Number </label>
                <input type="number" class="form-control" id="phone" required name="phone" placeholder="Enter phone  number ">
            </div>
            <div class="pt-2 pb-1">
                <label for="address" class="form-label">address</label>
                <textarea type="cpassword" class="form-control" id="address" required name="address" placeholder="Enter your address  "> </textarea>
            </div>
            <div class="pt-2 pb-1">
                <label for="pincode" class="form-label">pincode </label>
                <input type="number" class="form-control" id="pincode" required name="pincode" placeholder="Enter pincode  number ">
            </div>



            <div class="pt-2 pb-1">
                <button type="submit" name="order" class="btn btn-info form-control"> Order </button>
            </div>
        </form>


    </div>

</div>
<?php 
 if(isset($_POST['order'])){
    $mobile = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $user_id = $_SESSION['user']['id'];
    $item_id =  $_SESSION['order_id'];
    $price1 = $price; 
    try{
    $order = "INSERT INTO order_list(`address`,`pincode`,`item_id`,`user_id`,`price`,`phone`,`status`) VALUES('$address',$pincode,$item_id,$user_id,$price1,'$mobile',0)";
    $res  = $conn->query($order);
   if($res){
    //    echo "<script> alert('order succsefull done ') </script>";
     header("Location: http://localhost/Yummy/my_order.php");
    // echo "<script> window.location.assign('http://localhost/Yummy/my_order.php') </script>";
    //    unset($_SESSION['order_id']);
    //    $_GET['order_id']='';
    //    echo '<meta http-equiv="refresh" content="0">';
   }
}
catch(Exception $e ){
  echo($e);
}

 }

?>
<?php include("footer.php"); ?>