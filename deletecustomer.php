<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 delete customer </title>
</head>
<body>
/* connect to database */
<?php
include 'connectdb.php';
?>
<h1>Delete customer:</h1>
<ol>
<?php
/* read all input from POST */
   $Cid= $_POST["customername"];
/* delete a customer from customer table where customerID = input customer id */
   $query = 'DELETE FROM Customer WHERE CustomerID = "'.$Cid.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
/* print the customer ID of the customer been deleted from customer table */
   echo "Customer ID :";
   echo $Cid;
   echo " deleted";
   echo "<br>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

