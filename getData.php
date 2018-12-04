<?php
$query = "SELECT * FROM Customer ORDER BY Firstname";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
echo "Which customer you are looking for?</br>";
while($row = mysqli_fetch_assoc($result)){
	echo '<input type = "radio" name = "customername" value ="';
	echo $row["CustomerID"];
        echo '">'."Customer ID :".$row["CustomerID"] ." ". $row["Firstname"] . " " . $row["Lastname"] ." ".$row["City"]. " ".$row["Phonenumber"]. " DealerID: " .$row["DealerID"]. "<br>";
}
mysqli_free_result($result);
?>

