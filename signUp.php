<?php
include 'connection.php';

  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $usertype='user';
    
    $select = "SELECT * FROM user WHERE email = '$email' && password='$password'";
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)<=0){
        $sql = "INSERT INTO customer (email,fname,lname,address,gender)
        values('$email','$fname','$lname','$address','$gender')";
        $result = mysqli_query($con,$sql);
        if($result){
         // echo "customer inserted succ";
         header('location:login.html');
        }
        else{
          die(mysquli_error($con));
        }
        $sqll = "INSERT INTO user (email,password,user_type)
        values('$email','$password','$usertype')";
        $result = mysqli_query($con,$sqll);
        if($result){
         // echo "user inserted succ";
         //header('location:employeTable.php');
        }
        else{
          die(mysquli_error($con));
        }
    }else{
      header('location:sign _up.html');
    }
   
  }
?>