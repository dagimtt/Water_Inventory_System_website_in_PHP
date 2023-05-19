<?php
include 'connection.php';
$id = $_GET['updateid'];
  if(isset($_POST['subm'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
   // $date=$_POST['date'];
    $address=$_POST['address'];
    $account=$_POST['account'];
    $salary=$_POST['salary'];
   // $salaryto=$_POST['salaryto'];

   $sql = "UPDATE table2 SET id=$id,fname='$fname',lname='$lname',contact='$contact',addresss='$address' ,account='$account',salary='$salary' WHERE id=$id";

    $result = mysqli_query($con,$sql);
    if($result){
     // echo "updated succ";
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
    <script src="loder.js" defer></script>
    <link rel="stylesheet" href="newemployee.css">
    <link rel="stylesheet" href="loder.css">
</head>

<body>

<form id="for" method="post">
        <div class="div1">
            <h2>New Employee</h2>
            <fieldset class="fild">
                <legend>General Information</legend>
                <fieldset class="dd">
                    <div class="d1">
                    <label class="empLabel"  >Firest Name:</label><br>
                    <input id="fname" class="empinput" type="text" name="fname" ><br><br>
                   </div>
                   <div class="d1">
                    <label class="empLabel">Last Name:</label><br>
                    <input id="lname" class="empinput" type="text" name="lname"><br><br>
                </div>
                <div class="d1">
                    <label class="empLabel">Contact:</label><br>
                    <input id="contact" class="empinput" type="text" name="contact"><br><br>
                </div>
                  <!--  <label  class="empLabel">Join Date:</label><br>
                    <input id="date" class="empinput" type="text" name="date"><br><br>-->
                </fieldset>
                <fieldset class="ddd">
                    <div class="d2">
                    <label class="empLabel2">Address:</label><br>
                    <input id="address" class="empinput2" type="text" name="address"><br>
                </div>
                <div class="d2">
                    <label class="empLabel2">Acount Stutus:</label><br>
                    <select id="accont" class="desi" name="account">
                        <option value="salesman">Activ</option>
                        <option value="salesman">salesman</option>
                        <option value="salesman">salesman</option>
                    </select><br>
                </div>
                <div class="d2">
                    <label class="empLabel2">Salary:</label><br>
                    <input id="salary" class="empinput2" type="text" name="salary"><br>
                </div>
                   <!-- <select id="salaryto" class="desi" name="salaryto">
                        <option value="salesman">salesman</option>
                        <option value="salesman">salesman</option>
                          <label class="empLabel2">Salary Pay To:</label><br>
                        <option value="salesman">salesman</option>
                    </select><br>
                            -->
                </fieldset>
                <input class="b1" type="submit" value="update" name="subm">
                <input class="b2" type="reset" value="reset">
                <!--<input class="b3" type="button" value="">-->
            </fieldset>
        </div>
    </form>
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