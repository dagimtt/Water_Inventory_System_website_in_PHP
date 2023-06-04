<?php
  include 'connection.php';
$fname="";
$lname="";

if(isset($_POST['submit'])){
    $name=$_POST['cb1'];
    $area=$_POST['cb2'];
    $sql = "UPDATE table2 SET Area='$area' WHERE fname = '$name'";
    $result = mysqli_query($con,$sql);
    if($result){
      //echo "inserted succ";
     header('location:employeTable.php');
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
    <link rel="stylesheet" href="employeeArea.css">
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
    <div class="div1">
        <h2>Assign Area To Employee</h2>
        <br>
        <fieldset class="fild" ><legend>Assign Area</legend>
            
           <br> <br>
           <form method="post" action="">
                <label class="empLabel2">Select Employee:</label><br>
                <select name="cb1" class="desi">
                    <?php
                 
                $sql = "SELECT fname,lname FROM table2";


$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row as an option in the dropdown list
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["fname"] . "'>" . $row["fname"] . " " . $row["lname"] . "</option>";
    }
} else {
    echo "<option value=''>No names found</option>";
}

?>
                </select><br>
                <label class="empLabel2">Select Area:</label><br>
                <select name="cb2" class="desi">
                    <option vlaue="Mechanics">Mechanics</option>
                    <option vlaue="Operator">Operator</option>
                    <option vlaue="Manager">Manager</option>
                    <option vlaue="Shift Leader">Shift Leader</option>
                    <option vlaue="Compressor">Compressor</option>
                </select><br>
            <input name="submit" class="b1" type="submit" value="assign Area">
            <br>
            <br>
            <input name="reset" class="b2" type="reset" value="clear">
</form>
        </fieldset>
    </div>
    <script type="text/javascript">
        var lastScrollTop = 0;
        navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function(){
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if(scrollTop > lastScrollTop){
                navbar.style.top="-80px";
            } else{
                navbar.style.top="0";
            }
            lastScrollTop = scrollTop;
        })
    </script>
</body>
</html>