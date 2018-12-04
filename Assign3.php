<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Assignment3 </title>
</head>
<body>
<?php
	include 'connectdb.php';
?>
<h1> Welcome to the Assignment3 </h1>
<h2> Customers'information </h2>
<form action = "getCustomer.php" method = "post">
<?php
	include 'getData.php';
?>
<input type="submit" value = "Get Customer's information">
</form>

<h2> Product information </h2>
<form action = "getProduct.php" method = "post">
<?php
     	include 'getproducts.php';
?>
<input type="submit" value = "Get Product information">
</form>

<p>
<hr>
<p>
<h2> Add a new Purchase</h2>
<form action = "addnewpurchase.php" method = "post">
<?php
	include 'newpurchaseinfo.php';
?>
<input type="submit" value = "Confirm this purchase">
</form>

<p>
<hr>
<p>
<h2> Add a new Customer</h2>
<form action = "addnewcustomer.php" method = "post">
<?php
     	include 'newcustomer.php';
?>
<input type="submit" value = "Add this customer">
</form>

<p>
<hr>
<p>
<h2> Update a Customer's phone number</h2>
<form action = "updatenewcustomer.php" method = "post">
<?php
     	include 'updatecustomer.php';
?>
<input type="submit" value = "update this customer">
</form>

<p>
<hr>
<p>
<h2> Delete a Customer</h2>
<form action = "deletecustomer.php" method = "post">
<?php
     	include 'getData.php';
?>
<input type="submit" value = "delete this customer">
</form>

<p>
<hr>
<p>
<h2> List customers</h2>
<form action = "listcustomer.php" method = "post">
<?php
        include 'getquantity.php';
?>
<input type="submit" value = "List all customer">
</form>

<p>
<hr>
<p>
<h2> Description of products has never been purchased</h2>
<?php
        include 'listDescription.php';
?>

<p>
<hr>
<p>
<h2> Product sales' info</h2>
<form action = "productsale.php" method = "post">
<?php
        include 'chooseproduct.php';
?>
<input type="submit" value = "List all info">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
