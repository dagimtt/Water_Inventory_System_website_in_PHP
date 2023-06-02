<?php
include 'connection.php';

  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $select = "SELECT * FROM user WHERE email = '$email' && password='$password'";
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
       $row = mysqli_fetch_array($result);
       if($row['user_type']=='admin'){
        header('location:inde1.html');
       }
       elseif($row['user_type']=='user'){
        header('location:order2.html');
       }
      
    }
    else{

      header('location:login.html');
     }
   
  }
?>