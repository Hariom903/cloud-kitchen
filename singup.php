<?php # session_start(); 
  
  if(isset($_SESSION['user'])){
    session_start();
    echo " window.location.assign('http://localhost/Yummy/index.php?home=true')";
       exit();
     
  }
include("header.php"); ?>
<?php  
 $error = '';

 if(isset($_POST['singup'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
   $cpassword =$_POST['cpassword'];
  if($password===$cpassword){
    include("./db/db.php");
    $hash = password_hash($password,PASSWORD_DEFAULT);
    try{
    $user = "INSERT INTO user(`username`,`password`) VALUES('$username','$hash')";
    $setdata =$conn->prepare($user);
    $res = $setdata->execute();
    $id = $setdata->insert_id;
    if($res){
       $_SESSION['user'] =['username'=>$username,'id'=>$id];
       if(isset($_SESSION["order_id"])){
        // header("location:./order.php");
        echo "<script> window.location.assign('http://localhost/Yummy/order.php') </script>";
       }
       else{
        // header("location:./index.php?home=true");
        echo "<script> window.location.assign('http://localhost/Yummy/index.php?home=true') </script>";
       }
    }
    }catch(Exception $e){
        print_r($e);
    }

  }
  else{
     $error =" password mismatch ";
  }
 }


?>
<div class="container pt-5 pb-5">
    <div class="row offset-3">
        <div class="col-12 col-sm-6">
        <h2 class="text-center text-success"> sing Up Hare....! </h2>

            <form action="" method="post">
                   <div class="pt-2 pb-1">
                    <label for="username" class="form-label">User Name </label>
                    <input type="text" class="form-control" required id="username" name="username" placeholder="Enter User Name ">
                   </div>
                   <div class="pt-2 pb-1">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" required  name="password" placeholder="Enter User Name ">
                    <p style="color:red"  > <?php echo $error ?></p>
                   </div>
                   <div class="pt-2 pb-1">
                    <label for="cpassword" class="form-label">confirm password</label>
                    <input type="cpassword" class="form-control" id="cpassword" required  name="cpassword" placeholder="Enter User Name ">
                   </div>
                   <div class="pt-2 pb-1">
                    <button type="submit" name="singup" class="btn btn-info form-control">  sing Up </button>
                   </div>
            </form>


        </div>

    </div>
</div>

<?php include("footer.php"); ?>



