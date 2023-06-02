<?php
 include 'connection.php';
 if(isset($_GET['deleteid'])){
    $productname = $_GET['deleteid'];

    $sql = "DELETE FROM product WHERE productname ='$productname'";
    $result =mysqli_query($con,$sql);

    if($result){
      //  echo "Deleted succ";
      header('location:productTable.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>