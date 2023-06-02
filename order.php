<?php
include 'connection.php';

  if(isset($_POST['submit'])){
    $size=$_POST['size'];
    $quantity=$_POST['quantity'];
    $email=$_POST['email'];
     $date=$_POST['date'];
     $phone=$_POST['phone'];
     $place=$_POST['place'];
     $textearea=$_POST['textearea'];
     
     $sql = "INSERT INTO order_table (email,quantity,size,phone,place,date,message)
    values('$email','$quantity','$size','$phone','$place','$date','$textearea')";

    $result = mysqli_query($con,$sql);
    if($result){
     // echo "inserted succ";
     header('location:startAdmin.html');
    }
    else{
      die(mysquli_error($con));
    }
    
  }
?>