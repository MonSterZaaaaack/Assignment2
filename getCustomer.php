<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Customer's info</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your Customer's information:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customername"];
   $query = 'SELECT * FROM Product,Purchaseinfo WHERE Purchaseinfo.ProductID = Product.ProductID AND Purchaseinfo.CustomerID = "' .$whichCustomer. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo "Product name: ";
        echo $row["Description"];
	echo " ";
	echo "Quantity : ";
	echo $row["Quantity"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
