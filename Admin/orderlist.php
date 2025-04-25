
<div class="container pt-5"> 
<div class="table-responsive " > 
<table id="myTable" class="table ">
<thead class="table-dark"> 
    <tr> 
        <th> user Name </th>
        <th> item Name  </th>
        <th> address  </th>
        <th> pincode </th>
        <th>price   </th> 
        <th> phone num   </th> 
        <th>  Order status   </th> 
        <th>  opretion   </th> 
    </tr>
</thead>
<tbody>
<?php  
//  $user_id =  $row['user_id'];
//  $item_id = $row['item_id'];
//  $price= $row['price'];
//  $address = $_POST['address'];
//  $pincode = $_POST['pincode'];
      include("../db/db.php"); 
      try{
      $getitem = "SELECT * FROM order_list";
      $res = $conn->query($getitem);
      while($row = $res->fetch_assoc()){ ?>
        <tr>
         <td> <?php
         
        $userid =  $row['user_id'];
         $res1 = $conn->query("SELECT username FROM user WHERE id='$userid'");
         while($name = $res1->fetch_assoc()){
          echo  $name['username'];
         }
         

         ?> </td>
         <td> <?php  
         
         $itemid = $row['item_id']; 
         $res1 = $conn->query("SELECT name FROM items WHERE id='$itemid'");
         while($name = $res1->fetch_assoc()){
          echo $name['name'];
         }
         
         ?> </td>
         <td> <?php  echo  $row['address'] ?> </td>
         <td> <?php  echo $row['pincode'] ?> </td>
         <td> $<?php  echo $row['price'] ?> </td>
         <td> <?php  echo $row['phone'] ?> </td>
         <td> <?php  echo $row['status'] ?> </td>
         <td>
          <form action="" method="POST">
            <select name="status">
         <option value="1">1</option>        
         <option value="2">2</option>        
         <option value="3">3</option>        
        </select>
              <input type="hidden" name="order_id" value="<?php echo $row['id'] ?>">
             <button href="?hell" type="submit" value="<?php echo  $row['item_id']; ?>" name="edit_status" class="btn btn-primary"> edit_status  </button>
          </form>  
         </td>
        </tr>

  <?php  } 

   }catch(Exception $e) {
     print_r($e);
   }

    ?>
</tbody>
 </table>
</div>
</div>

<?php  
 if(isset($_POST['edit_status']) && $_POST['status']){
print_r($_POST);
   $up_id= $_POST['edit_status'];
   $or_id= $_POST['order_id'];
   $status = $_POST['status'];
   
   try{ 
   $res1 = $conn->query("UPDATE `order_list` SET `status`=$status WHERE item_id=$up_id && id=$or_id ");
   if($res1){
    // print_r($_POST);
    // header("refresh: 1");
    // die();
//   echo " <script> location.reload(); </script> ";
echo '<meta http-equiv="refresh" content="0">';
   }
   }
   catch(Exception $e){
    print_r($e);
   }

 }

 
?>