<?php
 include 'connection.php';
 if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM table2 WHERE id =$id";
    $result =mysqli_query($con,$sql);

    if($result){
       // echo "Deleted succ";
       header('location:employeTable.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>