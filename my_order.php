<?php include("header.php");   ?>
<div class="container pt-5"> 
<div class="table-responsive " > 
<table class="table ">
<thead class="table-dark"> 
    <tr> 
        <th> Name  </th>
        <th> discription  </th>
        <th> price  </th>
        <th> img </th>
        <th> status </th>
        <!-- <th> opretion   </th> -->
    </tr>
</thead>
<tbody>
  <?php include("./db/db.php");
   $u_id = $_SESSION['user']['id'];
   $getitem = "SELECT * FROM order_list WHERE user_id=$u_id";
      $res = $conn->query($getitem);
      while(  $row = $res->fetch_assoc()){ 
      $item_id =   $row['item_id'];
       $status =  $row['status'];
     $getitem1 = "SELECT * FROM  items WHERE id=$item_id";
     $res1 = $conn->query($getitem1);
     while(  $row1 = $res1->fetch_assoc()){ ?> 
     <tr>
     <td> <?php  echo $row1['name'] ?> </td>
            <td> <?php  echo $row1['description'] ?> </td>
            <td> $<?php  echo $row1['price'] ?> </td>
            <td>
            <a href="./assets/img/menu/<?php echo $row1['img_path']; ?>" ><img src="./assets/img/menu/<?php echo $row1['img_path']; ?>" class=" img-fluid" width="50px"  alt=""></a>     
            </td>
            <td>
                <?php
                  if($status==2){
                    echo "Out for Delivery";
                  }
                  elseif($status==1){
                    echo " Order Placed,";
                  }
                  elseif($status==3){
                    echo "Delivered";
                  }
                  else{
                    echo " Order now,"; 
                  }


                ?>
            </td>

            <!-- <td>
             <form action="./deleteitem.php" method="POST">
                <button type="submit" value="<?php #echo $row1['id']; ?>" name="edit" class="btn btn-primary"> Edit  </button>
                <button type="submit" value="<?php # echo $row1['id']; ?>"  name="delete"  class="btn btn-danger"> Delete  </button>
             </form>  
            </td> -->
     </tr>

    <?php  }
   
  }
  
  ?>

</tbody>
 </table>
</div>
</div>

<?php include("footer.php"); ?>