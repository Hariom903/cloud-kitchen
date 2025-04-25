<?php include("../db/db.php"); ?>
<div class="container pt-5">
  <div class="row offset-2">
    <div class="col-12 col-sm-6">
      <h2 class="text-center text-success"> Add item Hare....! </h2>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="pt-2 pb-1">
          <label for="name" class="form-label"> item Name</label>
          <input type="text" class="form-control" required id="name" name="name" placeholder="Enter item Name ">
        </div>
        <div class="pt-2 pb-1">
          <label for="category" class="form-label"> Category</label>
          <select name="category" class="form-control">
            <option> Select Category </option>
            <?php
            $cate = " SELECT * FROM category ";
            $data = $conn->query($cate);
            while ($i = $data->fetch_assoc()) { ?>
              <option value="<?php echo $i['id'] ?>"> <?php echo $i['name'] ?> </option>
            <?php     }

            ?>

          </select>
        </div>
        <div class="pt-2 pb-1">
          <label for="img" class="form-label">image</label>
          <input type="file" class="form-control" id="img" required name="img" />
        </div>

        <div class="pt-2 pb-1">
          <label for="discription" class="form-label">discription</label>
          <textarea class="form-control" id="discription" required name="discription"></textarea>
        </div>
        <div class="pt-2 pb-1">
          <label for="price" class="form-label">price</label>
          <input type="number" class="form-control" id="price" required name="price" />
        </div>
        <div class="pt-2 pb-1">
          <button type="submit" name="additem" class="btn btn-info form-control"> Submit </button>
        </div>
      </form>


    </div>

  </div>
</div>

<?php

if (isset($_POST['additem'])) {
  if (isset($_FILES['img'])) {
    try {
      $file_name = $_FILES['img']['name'];
      $path = "../assets/img/menu/" . $file_name;
      move_uploaded_file($_FILES['img']['tmp_name'], $path);
      // echo ' file upload ';
    } catch (Exception $e) {
      print_r($e);
    }
  }
  $name = $_POST['name'];
  $dis = $_POST['discription'];
  $price = $_POST['price'];
  $cate_id = $_POST['category'];
  $file_path = $file_name;

  $setdata = "INSERT INTO items(`name`,`description`,`price`,`img_path`,`category_id` ) VALUES ('$name','$dis',$price,'$file_path',$cate_id)";
  $res = $conn->query($setdata);

  if ($res) {
    header("location:http://localhost/Yummy/admin/");
  }
}
?>