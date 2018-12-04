<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Add new purchase</title>
</head>
<body>
/* connect to database */
<?php
include 'connectdb.php';
?>
<h1>Here are your new purchased info:</h1>
<ol>
<?php
/* read input from POST */
   $whichCustomer= $_POST["customerid"];
   $whatproduct = $_POST["productid"];
   $whatquantity = $_POST["quantity"];
   $addquantity = intval($whatquantity);
/* insert this new purchase infomation into Purchaseinfo table
*  if the customer purchased this product before, then update the quantity */ 
   $query = 'INSERT INTO Purchaseinfo VALUES("'.$whichCustomer.'","'.$whatproduct.'","'.$addquantity.'")ON DUPLICATE KEY UPDATE Quantity = "' .$addquantity. '" + Quantity ';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }   
/* print if this purchase been added successfully */
   echo "Purchase info added.";
   echo "<br>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

