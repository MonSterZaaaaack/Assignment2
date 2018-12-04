<?php
   $query = 'SELECT Description FROM Product WHERE ProductID NOT IN(SELECT ProductID FROM Purchaseinfo)';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["Description"];
        echo "<br>";
   }
   mysqli_free_result($result);
?>
