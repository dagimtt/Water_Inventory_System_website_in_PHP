<?php
 include 'connection.php';
 if(isset($_GET['deleteid'])){
    $email = $_GET['deleteid'];

    $sql = "DELETE FROM customer WHERE email='$email'";
    $result =mysqli_query($con,$sql);

    if($result){
       // echo "Deleted succ";
       header('location:customerTable.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>