<div class="container pt-5">
    <div class="row offset-3">
        <div class="col-12 col-sm-6">
        <h2 class="text-center text-success"> Login Hare....! </h2>

            <form action="" method="post">
                   <div class="pt-2 pb-1">
                    <label for="username" class="form-label">User Name </label>
                    <input type="text" class="form-control" required id="username" name="username" placeholder="Enter User Name ">
                   </div>
                   <div class="pt-2 pb-1">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" required  name="password" placeholder="Enter User Name ">
                   </div>
                   <div class="pt-2 pb-1">
                    <button type="submit" name="login" class="btn btn-info form-control"> Submit  </button>
                   </div>
            </form>


        </div>

    </div>
</div>

<?php
include("../db/db.php"); 
 if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $pass = $_POST['password'];
     $hash = md5($pass);
    $login = "SELECT * FROM user WHERE username='$username'&& password='$hash'";
    $res = $conn->query($login);
    if($res->num_rows ==1){
        while($row = $res->fetch_assoc()){
       
            $username = $row['username'];
            $_SESSION['admin'] = ['name'=>$username];
            header("location:http://localhost/Yummy/admin");    

        }
    }


 }
?>