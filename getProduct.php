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
/* read all input from POST */
   $whichorder= $_POST["ordertype"];
/* choose different orders to display all products' information */
   if($whichorder == "DesA"){
   $query = 'SELECT * FROM Product ORDER BY Description';
   }
   elseif($whichorder == "DesD"){
   $query = 'SELECT * FROM Product ORDER BY Description DESC';
   }
   elseif($whichorder == "CostA"){
   $query = 'SELECT * FROM Product ORDER BY Cost ';
   }
   elseif($whichorder == "CostD"){
   $query = 'SELECT * FROM Product ORDER BY Cost DESC';
   }            
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
/* print all the information of all products in a given order */
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "Product name: ";
        echo $row["Description"];
        echo " Quantity : ";
        echo $row["Quantity"];
	echo " ProductID: ";
	echo $row["ProductID"];
	echo " Cost : ";
	echo $row["Cost"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
