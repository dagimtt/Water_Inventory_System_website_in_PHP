<?php
 include 'connection.php';
 if(isset($_GET['deleteid'])){
    $email = $_GET['deleteid'];

    $sql = "DELETE FROM order_table WHERE email ='$email'";
    $result =mysqli_query($con,$sql);

    if($result){
      //  echo "Deleted succ";
      header('location:orderTable.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>