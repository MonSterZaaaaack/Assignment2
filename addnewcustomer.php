<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Add new customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are new Customer's info:</h1>
<ol>
<?php
   $cfirstname= $_POST["firstname"];
   $clastname = $_POST["lastname"];
   $cityname = $_POST["city"];
   $phonenumber = $_POST["number"];
   $dealer = $_POST["dealerid"];
   $query1= 'SELECT MAX(CustomerID) AS maxid FROM Customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   echo $cfirstname;
   echo "<br>";
   echo $clastname;
   echo	"<br>";
   echo $phonenumber;
   echo	"<br>";
   echo $dealer;
   echo	"<br>";
   $row=mysqli_fetch_assoc($result);
   $newID = intval($row["maxid"]) + 1;
   $Cid = (string)$newID;
   echo $Cid;
   echo	"<br>";
   $query = 'INSERT INTO Customer VALUES("'. $Cid . '","' . $cfirstname . '","' . $clastname . '","' . $cityname . '","' . $phonenumber . '","' . $dealer . '")';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     } 
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

