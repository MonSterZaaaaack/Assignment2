<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 list all customer</title>
</head>
<body>
<?php
/* connect to database */
include 'connectdb.php';
?>
<h1>Here are all the customers:</h1>
<ol>
<?php
/* read all input from POST */
   $quant= $_POST["quantity"];
   $intquan = intval($quant);
/* use join to get the data of all purchase info from different tables */
   $query = 'SELECT * FROM Customer,Product,Purchaseinfo WHERE Customer.CustomerID = Purchaseinfo.CustomerID AND Product.ProductID = Purchaseinfo.ProductID AND Purchaseinfo.Quantity > "'.$intquan.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
/* show the customer name , product description, and quantity
 * if he/she purchased any product more than a give number */
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["Firstname"];
        echo " ";
        echo $row["Lastname"]." Puchased ".$row["Quantity"]." ".$row["Description"];
        echo "<br>";
   }
   mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
