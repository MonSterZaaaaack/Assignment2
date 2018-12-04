<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 update customer phonenumber</title>
</head>
<body>
<?php
/* connect to database */
include 'connectdb.php';
?>
<h1>Here is the new customer info:</h1>
<ol>
<?php
/* read input data from POST */
   $Cid= $_POST["customername"];
   $newnumber = $_POST["number"];
/* update the phone number of a given user */
   $query = 'UPDATE Customer SET Phonenumber = "'.$newnumber.'" WHERE CustomerID = "'.$Cid.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     } 
/* print the new phone number has been updated */
   echo "new Phone number updated.";
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

