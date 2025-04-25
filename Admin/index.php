<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    
    </head>
<body>
    
   <?php
   session_start();
    include("header.php");
    if(isset($_GET['login']) && !isset($_SESSION['admin']['name'])){
    include("login.php");
    }
    elseif(isset($_GET['additem']) && isset($_SESSION['admin']['name'])){
        include("additem.php");
    }
    elseif(isset($_GET['itemlist']) && isset($_SESSION['admin']['name'])){
    include("itemlist.php");
    }
    elseif(isset($_GET['orderlist'])&&isset($_SESSION['admin']['name'])){
        include("orderlist.php");
    }
   ?>
        

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    
</html>
<script>
$(document).ready(function () {
    new DataTable('#myTable');
  });
  </script>
<?php 
 if(isset($_GET['logout'])){
    session_unset();
    header("location:http://localhost/Yummy/admin/?login=true");
 }
?>