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
            
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Deprectiom</th>
            <th>operation</th>
        </tr>
     <?php
        $sql = "SELECT * FROM product";
        $result = mysqli_query($con,$sql);
        if($result){

            while( $row = mysqli_fetch_assoc($result)){
                $productname=$row['productname'];
                 $price=$row['price'];
                 $quantity=$row['quantity'];
                  $deprection=$row['deprection'];

                

                echo '<tr>
                <td>'.$productname.'</td>
                <td>'.$price.'</td>
                <td>'.$quantity.'</td>
                <td>'.$deprection.'</td>
                <td>
                
                <button class="delete"><a href="deleteProduct.php?
                deleteid='.$productname.'">delete</a></button>
                
                <button class="update"><a href="updateProduct.php?
                updateid='.$productname.'">update</a></button>
                </td>
            </tr>';
   
            }
        }
     
     ?>
    </table>
    <a class="add" href="product.html">Add Product</a>
</body>
</html>