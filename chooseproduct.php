<?php
/* read all products' descriptions from product table */
$query = "SELECT * FROM Product ORDER BY Description";
$result = mysqli_query($connection,$query);
if(!$result){
	die("database query failed.");
}
/* ask user which product they want to choose /*
echo "Which Product you are looking for?</br>";
/* display all description as radio buttons wait for user to choose */
while($row = mysqli_fetch_assoc($result)){
        echo '<input type = "radio" name = "productid" value ="';
        echo $row["ProductID"];
        echo '">'.$row["Description"] ."<br>";
}
mysqli_free_result($result);
?>
