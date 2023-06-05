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
     
     //
     $select = "SELECT * FROM order_table WHERE email = '$email'";
     $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
     $row = mysqli_fetch_array($result);
 

     $sql = "UPDATE order_table SET size='$size', quantity='$quantity',phone='$phone',place='$place', date='$date',message='$textearea' WHERE email='$email'";

     $result = mysqli_query($con,$sql);
     if($result){
      echo "updated succ";
      // header('location:productTable.php');
      header('location:startAdmin.html');
     }
     else{
       die(mysquli_error($con));
     }
    }
    else{
     //
     $sql = "INSERT INTO order_table (email,quantity,size,phone,place,date,message)
    values('$email','$quantity','$size','$phone','$place','$date','$textearea')";

    $result = mysqli_query($con,$sql);
    if($result){
     // echo "inserted succ";
     echo '<script>alert("Ordered succse!");</script>';
     echo "<script>(window.location='startAdmin.html')</script>";
   //  header('location:');
    }
    else{
      die(mysquli_error($con));
    }
    }

   
    
  }
?>