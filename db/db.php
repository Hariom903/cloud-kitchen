<?php
try{
    $conn  = mysqli_connect("localhost", "root", "", "cloud_kitchen");
    // echo "conrctrsgg";
}catch(Exception $e){
    echo "<pre>";
    print_r($e->getMessage().$e->getLine());exit;
}

?>