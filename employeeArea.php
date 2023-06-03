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
    <link rel="stylesheet" href="employeeArea.css">
</head>
<body>
    <nav id="navbar">
     
        <img class="logo" src="logo.png" >
        <ul class="nav-area">
            <li><a class="active" href="#">Home</a></li>
            <li><a class="activee"  href="product.html">Product</a>
            </li>
          
            <li ><a class="activeee" href="order.html">Customer</a></li>   
            <li ><a class="activeeee" href="newEmployee.html">Employee</a></li>
            <li ><a class="activeeeee" href="#">About</a></li>
        </ul>
          
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
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
        echo "<option value='" . $row["fname"] . "'>" . $row["fname"] . "</option>";
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