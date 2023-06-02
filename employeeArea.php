


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
           
                <label class="empLabel2">Select Employee:</label>
                <select class="desi">
                    <?php
                   include 'connection.php';
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
                <label class="empLabel2">Select Area:</label>
                <select class="desi">
                    <option vlaue="salesman">Mechanics</option>
                    <option vlaue="salesman">Operator</option>
                    <option vlaue="salesman">Manager</option>
                    <option vlaue="salesman">Shift Leader</option>
                    <option vlaue="salesman">Compressor</option>
                </select><br>
            <input class="b1" type="button" value="Add Employee">
            <br>
            <br>
            <input class="b2" type="button" value="Update">
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