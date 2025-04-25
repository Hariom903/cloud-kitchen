<?php if(isset($_POST['delete'])){
include("../db/db.php");

      $id = $_POST['delete'];
     try{ 
      $delete = "DELETE FROM items WHERE id='$id'";
     $res1 = $conn->query($delete);
     if($res1){
      header("location:http://localhost/Yummy/admin/?itemlist=true");   
     }
     }
     catch(Exception $e ){
         print_r($e);
     }
 }
 ?>