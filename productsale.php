<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Product info</title>
</head>
<body>
<?php
/* connect to database */
include 'connectdb.php';
?>
<h1>Here are Products information:</h1>
<ol>
<?php
/* read input data from POST */
   $product= $_POST["productid"];
/* read the total quantity of a given product been sold in all sales record */
   $query1 = 'SELECT SUM(Quantity) AS quantity FROM Purchaseinfo WHERE Purchaseinfo.ProductID = "'.$product.'"';
   $result=mysqli_query($connection,$query1);
    if (!$result) {
         die("database query1 failed.");
     }
  $row = mysqli_fetch_assoc($result);
  $total = intval($row["quantity"]);
/* convert the total quantity into integer and read the cost of a given
 * product from Product table */
  $query2 = 'SELECT Cost FROM Product WHERE ProductID = "'.$product.'"';
  $result=mysqli_query($connection,$query2);
    if (!$result) {
         die("database query2 failed.");
     }
  $row = mysqli_fetch_assoc($result);
/* convert the cost from string to float */
  $cost = floatval($row["Cost"]);
/* calculate the total cost and then print the total cost */
  $totalcost = $total * $cost;
  echo "The total money made in sales for that product is : ";
  echo $totalcost;
  echo "<br>";
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

