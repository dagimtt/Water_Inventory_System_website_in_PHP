<?php
include 'connection.php';
$productname = $_GET['updateid'];
$sqll = "SELECT * FROM product WHERE productname='$productname'";
$result = mysqli_query($con,$sqll);
$row = mysqli_fetch_assoc($result);
$productname = $row['productname'];
$price = $row['price'];
$quantity = $row['quantity'];
$deprection = $row['deprection'];
  if(isset($_POST['sub'])){
   // $productname=$_POST['productname'];
    $price=$_POST['price'];
    $deprection=$_POST['deprection'];
     $quantity=$_POST['quantity'];

   $sql = "UPDATE product SET productname='$productname',price='$price',quantity='$quantity',deprection='$deprection' WHERE productname='$productname'";

    $result = mysqli_query($con,$sql);
    if($result){
    //  echo "updated succ";
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="product.css">
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          .dropdown-a{
          color: white;
        font-size: 12px;
        text-transform: uppercase;
        border: 1px solid transparent;
        padding: 7px 10px;
        border-radius: 3px;
        }
          .dropdown-content a {
            float: none;
            color: black;
             height: 40px;
            text-decoration: none;
            display: block;
            text-align: left;
          }
          
          .dropdown-content a:hover {
            background-color: #ddd;
          } 
          .dropdown:hover .dropdown-content {
            display: block;
          }
          .newPro{
            position: relative;
            padding: 40px;
            margin-top: 150px;
            margin-left: 280px;  
            display: block;
            height: 350px;
            width: auto;
            background-color: black;
            opacity: 10px;
            background: url("image/gold9.jpg") no-repeat;
            background-size: cover;
            opacity: 1;
            border-radius: 20px;
            
            
        }
          .input1,.input2,.input3,.input4{
            width: 85%;
            height: 30px;
            padding-top: 10px;
            margin-top: 5px;
            outline: none;
           border: 2px solid #aaa;
            box-sizing: border-box;
            font-size: large;
            border-radius: 4px;
            text-align: center;
           
            
        }
        input[type=text]:focus{
          border-color: black;
          box-shadow: 0 0 8px 0 dodgerblue;
      }
    

        </style>
</head>

<body>
<nav id="navbar">

<img class="logo" src="image/logo.png">
<ul class="nav-area">
    <li><a class="active" href="inde1.html"><i class="fa-solid fa-house"></i>    Home</a></li>
    <li>   <div class="dropdown">
        <a class="dropbtn">product 
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="product.html"><i class="fa-sharp fa-solid fa-plus"></i>   new product</a>
          <a href="productTable.php"> <i class="fa-brands fa-product-hunt"></i>  product list</a>
          <a href="totalTable.php"><i class="fa-solid fa-store"></i> Total</a>
          
        </div>
    </li>
    <li>   <div class="dropdown">
      <a class="dropbtn"><i class="fa-solid fa-person-military-pointing"></i>  customer
        <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown-content">
        <a href="orderTable.php"> <i class="fa-solid fa-arrow-down-short-wide"></i> order information</a>
        <a href="customerTable.php"> <i class="fa-duotone fa-list"></i>  customer list</a>
        
      </div>
  </li>   
    <li><div class="dropdown">
        <a class="dropbtn"> <i class="fa-light fa-person-dress"></i> employee 
        </a>
        <div class="dropdown-content">
          <a href="newEmployee.html"><i class="fa-sharp fa-solid fa-plus"></i> new employee</a>
          <a href="employeTable.php"> <i class="fa-light fa-person-dress"></i>  employee list</a>
          
        </div></li>
    <li><a class="activeeeee" href="#">About</a></li>
</ul>
</nav>
    <div class="newPro" style="width:350px">
        <label class="leg"> UPDATE Product</label><br><br>
    <form method="post" action="">
        <input placeholder="Product Name" name="productname" type="text" class="input1" value=<?php echo $productname?>><br><br>
        <br>

        <input placeholder="Price" name="price" type="text" class="input2" value=<?php echo $price?>><br><br>
        <br>
        <input placeholder="Quantity" name="quantity" type="text" class="input3" value=<?php echo $quantity?>><br><br>
        <input placeholder="Deprection" name="deprection" type="text" class="input4" value=<?php echo $deprection?>><br><br>
        <br><br>
        <input type="submit" name="sub" value="Update" class="b1">

        <input type="reset" value="Reset" class="b2">
      </form>
    </div>

    <script type="text/javascript">
        var lastScrollTop = 0;
        navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function () {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top = "-80px";
            } else {
                navbar.style.top = "0";
            }
            lastScrollTop = scrollTop;
        })
    </script>
</body>

</html>