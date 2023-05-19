<?php
//$db=mysqli_connect($host,$user,$password,$db_name,3306);
  $con = mysqli_connect('localhost','root','','employee',3307);
  if($con){
    //echo "conn suc";
  }    
  else
    die(mysqli_error($con));

?>