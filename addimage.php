<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Customer's info</title>
</head>
<body>
<?php
/* connect to database */
include 'upload_file.php';
include 'connectdb.php';
?>
<h1>Here are your Customer's information:</h1>
<ol>
<?php
/* read input from POST */
   $Url= $_POST["subject"];
   $cid =$_POST["Cid"];
/* find the cusimage for a given customer */
   $query = 'UPDATE Customer SET cusimage = "' .$Url.'" WHERE CustomerID = "' .$cid. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
$row=mysqli_fetch_assoc($result);
echo '<img src="' . $row["cusimage"] . '" height="60" width="60">';
mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

