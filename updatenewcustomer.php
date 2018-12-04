<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 update customer phonenumber</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the new customer info:</h1>
<ol>
<?php
   $Cid= $_POST["customername"];
   $newnumber = $_POST["number"];
   $query = 'UPDATE Customer SET Phonenumber = "'.$newnumber.'" WHERE CustomerID = "'.$Cid.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     } 
   echo "new Phone number added.";
   echo "<br>";
   echo "New Number is : ";
   echo $newnumber;
   echo "<br>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

