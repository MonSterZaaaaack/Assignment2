<?php
$query = "SELECT * FROM Product ORDER BY Description";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
echo "Which Product you are looking for?</br>";
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "productid" value ="';
        echo $row["ProductID"];
        echo '">'.$row["Description"] ."<br>";
}
mysqli_free_result($result);
?>
