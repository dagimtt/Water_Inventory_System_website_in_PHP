<?php
include 'connection.php';

  if(isset($_POST['submit'])){
    $productname=$_POST['productname'];
    $price=$_POST['price'];
    $deprection=$_POST['deprection'];
     $quantity=$_POST['quantity'];
    
     $select = "SELECT * FROM product WHERE productname = '$productname'";
     $result = mysqli_query($con,$select);
     if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_array($result);
      $quantity2= $row['quantity'];
      $quantity3 =  $quantity2+ $quantity;

      $sql = "UPDATE product SET price='$price',quantity='$quantity3',deprection='$deprection' WHERE productname='$productname'";

      $result = mysqli_query($con,$sql);
      if($result){
       // echo "updated succ";
        header('location:productTable.php');
      }
      else{
        die(mysquli_error($con));
      }
     }else{
      $sql = "INSERT INTO product (productname,price,quantity,deprection)
      values('$productname','$price','$quantity','$deprection')";
  
      $result = mysqli_query($con,$sql);
      if($result){
        //echo "inserted succ";
      header('location:productTable.php');
      }
      else{
        die(mysquli_error($con));
      }
     }
   
  }
?>