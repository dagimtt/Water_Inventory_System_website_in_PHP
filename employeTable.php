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
        table{
    width: 60%;
    border-collapse: collapse;
    margin-top: 50px;
    margin-left: 200px;
    border:3px solid black;
    color:white;

}
.table td{
    border:5px solid black;
    color:black;
}
.table td,.table th{
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: center;
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
.update{

  
}
.update a{
    color: white;
    font-weight: 10px;  
    background-color:blue;
  
}
</style>
</head>
<body>
    <br>
    <br>
    <br>
    <a class="add" href="newEmployee.html">Add employee</a>
    <table class="table">
        <tr bgcolor="gray">
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact</th>
            <th>Address</th>
          
            <th>acount stutes</th>
            <th>salary</th>
            
            <th>operation</th>
        </tr>
     <?php
        $sql = "SELECT * FROM table2";
        $result = mysqli_query($con,$sql);
        if($result){

            while( $row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $contact = $row['contact'];
               // $dates = $row['dates'];
                $addresss = $row['addresss'];
                $account = $row['account'];
                $salary = $row['salary'];
               // $salaryto = $row['salaryto'];

                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$contact.'</td>
                
                <td>'.$addresss.'</td>
                <td>'.$account.'</td>
                <td>'.$salary.'</td>
          
                <td>
                
                <button class="delete"><a href="deleteEmployee.php?
                deleteid='.$id.'">delete</a></button>
                
                <button class="update"><a href="updeteEmployee.php?
                updateid='.$id.'">update</a></button>
                </td>
            </tr>';
   
            }
        }
     
     ?>
    </table>
</body>
</html>