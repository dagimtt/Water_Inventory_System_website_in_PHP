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
table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
          }
          
          table th,
          table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
          }
          
          table th {
            background-color: #f2f2f2;
            color: #333;
          }
          
          table tr:hover {
            background-color: #e3f2fd;
          }
          table tr:visited {
            background-color: red;
          }
          
          table td {
            color: #555;
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
button.update  {
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
button.update a:visited {
  color: black; 
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
  margin: 2px 1px; 
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
            <th>id</th>
            <th>Prodact Name</th>
            <th>Total Produced</th>
            <th>Total Sold</th>
            <th>Total Money</th>
        </tr>
     <?php
        $sql = "SELECT * FROM total";
        $result = mysqli_query($con,$sql);
        if($result){

            while( $row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['productname'];
                $produced = $row['produced'];
                $sold = $row['sold'];
                $money = $row['money'];
           

                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$produced.'</td>
                <td>'.$sold.'</td>
                <td>'.$money.'</td>
            </tr>';
   
            }
        }
     
     ?>
    </table>
</body>
</html>