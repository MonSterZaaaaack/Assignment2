<?php
/* read the data of all customers in customer table order by firstname */
$query = "SELECT * FROM Customer ORDER BY Firstname";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
/* make radio buttons for each customer 
 * let user to choose which customer made this purchase */
echo "Who made this purchase?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "customerid" value ="';
        echo $row["CustomerID"];
        echo '">'.$row["Firstname"]." ".$row["Lastname"]."<br>";
}
mysqli_free_result($result);
/* read the description of all products from product table */
$query = "SELECT * FROM Product ORDER BY Description";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
/* make radio buttons for each product 
 * let user to choose which product have been purchased */
echo "What product he/she purchased?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "productid" value ="';
        echo $row["ProductID"];
        echo '">'.$row["Description"]."<br>";                      
}
/* prompt user to input the quantity of products been purchased */
echo "What quantity he/she purchased?</br>";
echo '<input type = "text" name = "quantity">';
echo "<br>"; 
mysqli_free_result($result);
?>

