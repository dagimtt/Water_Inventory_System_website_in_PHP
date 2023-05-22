<?php
$servername="localhost";
$username="root";
$password="";
$database="just";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn->connect_error){
    die('failed'.connect_error);
}
else{
    echo "connected";
}
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
}
$sql="INSERT INTO selena(email,password)values('DANI','33333')";
if($conn->query($sql)===TRUE){
    echo "inserted";
}
else{
    echo "not";
}



?>