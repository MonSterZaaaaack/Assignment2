<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 list all customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are all the customers:</h1>
<ol>
<?php
   $quant= $_POST["quantity"];
   $intquan = intval($quant);
   $query = 'SELECT * FROM Customer,Product,Purchaseinfo WHERE Customer.CustomerID = Purchaseinfo.CustomerID AND Product.ProductID = Purchaseinfo.ProductID AND Purchaseinfo.Quantity > "'.$intquan.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
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
