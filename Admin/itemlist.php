<div class="container pt-5"> 
<div class="table-responsive " > 
<table class="table ">
<thead class="table-dark"> 
    <tr> 
        <th> Name  </th>
        <th> discription  </th>
        <th> price  </th>
        <th> img </th>
        <th> opretion   </th>
    </tr>
</thead>
<tbody>
     <?php  
      include("../db/db.php"); 
      try{
      $getitem = "SELECT * FROM items";
      $res = $conn->query($getitem);
      while($row = $res->fetch_assoc()){ ?>
           <tr>
            <td> <?php  echo $row['name'] ?> </td>
            <td> <?php  echo $row['description'] ?> </td>
            <td> $<?php  echo $row['price'] ?> </td>
            <td>
            <a href="../assets/img/menu/<?php echo $row['img_path']; ?>" ><img src="../assets/img/menu/<?php echo $row['img_path']; ?>" class=" img-fluid" width="50px"  alt=""></a>     
            </td>
            <td>
             <form action="./deleteitem.php" method="POST">
                <button type="submit" value="<?php echo $row['id']; ?>" name="edit" class="btn btn-primary"> Edit  </button>
                <button type="submit" value="<?php echo $row['id']; ?>"  name="delete"  class="btn btn-danger"> Delete  </button>
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
 

 
?>