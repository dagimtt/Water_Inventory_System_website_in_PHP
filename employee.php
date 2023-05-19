<?php
include 'connection.php';

  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
   // $date=$_POST['date'];
    $address=$_POST['address'];
    $account=$_POST['account'];
    $salary=$_POST['salary'];
   // $salaryto=$_POST['salaryto'];

    $sql = "INSERT INTO table2 (fname,lname,contact,addresss,account,salary)
    values('$fname','$lname','$contact','$address','$account',$salary)";

    $result = mysqli_query($con,$sql);
    if($result){
     // echo "inserted succ";
     header('location:employeTable.php');
    }
    else{
      die(mysquli_error($con));
    }
  }
?>