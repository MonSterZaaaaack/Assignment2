<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Product info</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are Products information:</h1>
<ol>
<?php
   $product= $_POST["productid"];
   $query1 = 'SELECT SUM(Quantity) AS quantity FROM Purchaseinfo WHERE Purchaseinfo.ProductID = "'.$product.'"';
   $result=mysqli_query($connection,$query1);
    if (!$result) {
         die("database query1 failed.");
     }
  $row = mysqli_fetch_assoc($result);
  $total = intval($row["quantity"]);
  $query2 = 'SELECT Cost FROM Product WHERE ProductID = "'.$product.'"';
  $result=mysqli_query($connection,$query2);
    if (!$result) {
         die("database query2 failed.");
     }
  $row = mysqli_fetch_assoc($result);
  $cost = intval($row["Cost"]);
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

