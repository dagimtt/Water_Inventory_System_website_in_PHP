<?php
include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="employeeTable.css">
    <style>
          body{
      
      }
          table{
    width: 60%;
    border-collapse: collapse;
    margin-top: 50px;
    margin-left: 200px;
    border:3px solid black;
    color:white;
    background-color: white;

}
td,th{
      padding: 4px 14px;
      border: 2px solid black;
      text-align: center;
      
}
td{
    color:black;
    background-color: #F0D6D1;
}
.add{
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
   margin: 20px 300px;
   
   width: 100px;
   background-color: blue;
   color: white;
   font-weight: 100px;
   height: auto;
  
   
}
.add:hover{
  background-color: red;
}
.delete{
   
   
    
}
.delete a{
    background-color:red;
    color: white;
    font-weight: 10px;
    height: auto;
}
button.update {
  background-color: #4CAF50; 
  border: none; 
  color: white; 

  text-align: center; 
  text-decoration: none; 
  display: inline-block; 
  font-size: 14px; 
  margin: 2px 1px; 
  cursor: pointer; 
}

button.update a {
  color: white; 
  text-decoration: none; 
}
button.delete {
  background-color: red; 
  border: none; 
  color: white;  
  text-align: center; 
  text-decoration: none; 
  display: inline-block; 
  font-size: 14px; 

  cursor: pointer; 
}

button.delete a {
  color: white; 
  text-decoration: none; 
}
</style>
</head>
<body>
    <br>
    <br>
    <br>
   
    <table class="table">
        <tr bgcolor="gray">
            
            <th>Firest Name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>address</th>
            <th>Gender</th>
            <th>operation</th>
           
        </tr>
     <?php
        $sql = "SELECT * FROM customer WHERE email !='dagimtekuash@gmail.com'"  ;
        $result = mysqli_query($con,$sql);
        if($result){

            while( $row = mysqli_fetch_assoc($result)){
                $fname=$row['fname'];
                 $lname=$row['lname'];
                 $email=$row['email'];
                  $address=$row['address'];
                  $gender=$row['gender'];

                

                echo '<tr>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$gender.'</td>
                <td>
                
                <button class="delete"><a href="deleteCustomer.php?
                deleteid='.$email.'">delete</a></button>
                </td>
            </tr>';
   
            }
        }
     
     ?>
    </table>
</body>
</html>