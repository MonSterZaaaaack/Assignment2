<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 Customer's info</title>
</head>
<body>
<?php
/* connect to database */
include 'connectdb.php';
?>
<h1>Here are your Customer's information:</h1>
<ol>
<?php
/* read input from POST */
   $whichCustomer= $_POST["customername"];
/* find the cusimage for a given customer */
   $query = 'SELECT cusimage FROM Customer WHERE CustomerID = "' .$whichCustomer. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
$row=mysqli_fetch_assoc($result);
if ($row["cusimage"] == NULL){
        echo "Please enter the url: ";
	echo '<form name="form" action="addimage.php" method="post">';
	echo "<br>";
	echo "<br>";
	echo '<input type="text" name="subject">;';
	echo '<input type="hidden" name="Cid" value = "'.$whichCustomer.'">;';
	echo '<input type="submit" value="Use this url">;'; 
	echo "</form>";
}
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

