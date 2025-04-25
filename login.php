<?php  


$errorn = $errorp = "";
include("header.php");
 if(isset($_SESSION['user'])){
    echo "<script> window.location.assign('http://localhost/Yummy/index.php?home=true') </script>";
     exit();
   
}
?>
<?php
include("./db/db.php"); 
 if(isset($_POST['login'])){
  
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $login = "SELECT * FROM user WHERE username='$username'";

    $res = $conn->query($login);
    if($res->num_rows ==1){
        while($row = $res->fetch_assoc()){
            // echo $row['password'];
             if(password_verify($pass,$row['password'])){
            $username = $row['username'];
            $_SESSION['user'] =['username'=>$username,'id'=>$row['id']];
            if(isset($_SESSION['order_id'])){
                echo "<script> window.location.assign('http://localhost/Yummy/order.php') </script>";
            }else{
            // header("location:./index.php?home=true"); 
            echo "<script> window.location.assign('http://localhost/Yummy/index.php?home=true') </script>";
            }   
             }
             else{
                $errorp = " password sahi dal bhai";
                $_POST['password']=''; 
             }

        }

    }
    else{
        $errorn = " USername sahi dal bhai";
        $_POST['username']='';
    }


 }
?>
<div class="container pt-5 pb-5">
    <div class="row offset-3">
        <div class="col-12 col-sm-6">
        <h2 class="text-center text-success"> Login Hare....! </h2>

            <form action="" method="post">
                   <div class="pt-2 pb-1">
                    <label for="username" class="form-label">User Name </label>
                    <input type="text" class="form-control" required id="username" name="username" placeholder="Enter User Name ">
                    <p style="color:red"  > <?php echo $errorn ?></p>
                   </div>
                   <div class="pt-2 pb-1">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" required  name="password" placeholder="Enter User Name ">
                    <p style="color:red"  > <?php echo $errorp ?></p>
                   </div>
                   <div class="pt-2 pb-1">
                    <button type="submit" name="login" class="btn btn-info form-control"> Submit  </button>
                   </div>
                   <p>Not a member? <a href="./singup.php">Register</a></p>
                          
            </form>


        </div>

    </div>
</div>



<?php include("footer.php"); ?>
