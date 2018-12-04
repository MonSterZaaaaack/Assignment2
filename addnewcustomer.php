<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Add new customer</title>
</head>
<body>
/* Connect to datebase*/
<?php
include 'connectdb.php';
?>
<h1>Here are new Customer's info:</h1>
<ol>
<?php
/* read all input from POST */
   $cfirstname= $_POST["firstname"];
   $clastname = $_POST["lastname"];
   $cityname = $_POST["city"];
   $phonenumber = $_POST["number"];
   $dealer = $_POST["dealerid"];
/* find the max customer ID */
   $query1= 'SELECT MAX(CustomerID) AS maxid FROM Customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
/* convert it into integer and then +1 to make a new customer ID*/
   $row=mysqli_fetch_assoc($result);
   $newID = intval($row["maxid"]) + 1;
   $Cid = (string)$newID;
   echo $Cid;
   echo	"<br>";
/* insert this new Customer into customer table */
   $query = 'INSERT INTO Customer VALUES("'. $Cid . '","' . $cfirstname . '","' . $clastname . '","' . $cityname . '","' . $phonenumber . '","' . $dealer . '",NULL)';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     } 
/* print if the new customer been added successfully */
   echo "New Customer ";
   echo $cfirstname;
   echo " ";
   echo $clastname;
   echo "'s information added.";
   echo "<br>";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

