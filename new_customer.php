<?php
include 'connection.php';
$email = $_GET['updateid'];
// 1st table
$sqll = "SELECT * FROM order_table WHERE email='$email'";
$result = mysqli_query($con,$sqll);
$row = mysqli_fetch_assoc($result);
$size = $row['size'];
$phone = $row['phone'];
$quantity1 = $row['quantity'];
$place = $row['place'];
$date = $row['date'];
//second table
$sql = "SELECT * FROM product WHERE productname='$size'";
$result1= mysqli_query($con,$sql);
$row1 = mysqli_fetch_assoc($result1);
$price1 = $row1['price'];
$privQuant = $row1['quantity'];
$totalprice = $price1 * $quantity1;
$currentQuant = $privQuant-$quantity1;
  if(isset($_POST['sub'])){
   $size=$_POST['name'];
    $phone=$_POST['phone'];
    $quantity=$_POST['quantity'];
     $place=$_POST['place'];
     $price=$_POST['price'];
     $date=$_POST['date'];

   $sql2 = "UPDATE product SET quantity='$currentQuant' WHERE productname='$size'";

    $result = mysqli_query($con,$sql2);
    if($result){
    // echo "updated succ";
    header('location:productTable.php');
    }
    else{
      die(mysquli_error($con));
    }
  }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer</title>
    <link rel="stylesheet" href="Css/customer2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
   

</head>
<body>
    <div class="header-div">
        <h1 class="header">Customer Information</h1>
    </div>
   
    <div class="box-general">
    <form  action="" method="post">
        <div class="box-1">
<label for="">Product Name</label></br>
<input type="text" name="name" id="custName"  onkeyup="validateCustName()" value=<?php echo $size?>></br>
<span id="cust"></span>
<label for="">Contact #</label></br>
<input type="text" name="phone" id="contact" onkeyup="validateContact()"  value=<?php echo $phone?>></br>
<span id="cust2"></span>
<label for="">Address</label></br>
<input type="text" name="place" id="address" onkeyup="validateAddress()" value=<?php echo $place?>></br>
<span id="cust3"></span>
</div>
<div class="box-2">
<label for="">Price</label></br>
<input type="text" name="price" id="price" onkeyup="price()" value=<?php echo $totalprice?>>
<span id="cust2"></span>
<label for="">date</label></br>
<input type="text" name="date" id="money" onkeyup="validateAmount()" value=<?php echo $date?>>
<span id="cust3"></span>
        <label for="">Amount</label>
        <input type="text" name="quantity" id="amount" onkeyup="validateAmount()" value=<?php echo $quantity1?>>
        <span id="cust4"></span>
    </div>
    <input class="searchbtn" name="sub" type="submit" value="DELIVER" >
    </form>
</div>
<script defer src="validation/customer.js"></script>
</body>
</html>