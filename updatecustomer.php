<?php
/* read all customer from customer table orderd by firstname */
$query = "SELECT * FROM Customer ORDER BY Firstname";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
/* make radio buttons for each customer
 * and let the user to choose he/she want to
 * update which customer's phone number 
 * and also show the current phone number to the user */
echo "Which customer you are looking for?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "customername" value ="';
        echo $row["CustomerID"];
        echo '">'."Customer ID :".$row["CustomerID"] ." ". $row["Firstname"]. " ".$row["Lastname"]." ".$row["Phonenumber"];
	echo "<br>";
}
/* prompt the user to input the new phone number */
echo "New Customer's phone number is :</br>";
echo '<input type = "text" name = "number">';
echo "<br>";
mysqli_free_result($result);
?>
