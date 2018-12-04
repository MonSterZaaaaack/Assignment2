<?php
$query = "SELECT * FROM Customer ORDER BY Firstname";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
echo "Who made this purchase?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "customerid" value ="';
        echo $row["CustomerID"];
        echo '">'.$row["Firstname"]." ".$row["Lastname"]."<br>";
}
mysqli_free_result($result);
$query = "SELECT * FROM Product ORDER BY Description";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
echo "What product he/she purchased?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "productid" value ="';
        echo $row["ProductID"];
        echo '">'.$row["Description"]."<br>";                      
}
echo "What quantity he/she purchased?</br>";
echo '<input type = "text" name = "quantity">';
echo "<br>"; 
mysqli_free_result($result);
?>

