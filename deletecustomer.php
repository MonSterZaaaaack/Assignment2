<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 delete customer </title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Delete customer:</h1>
<ol>
<?php
   $Cid= $_POST["customername"];
   $query = 'DELETE FROM Customer WHERE CustomerID = "'.$Cid.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
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

