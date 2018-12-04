<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Assignment3 </title>
</head>
<body>
<!-- connect to database -->
<?php
	include 'connectdb.php';
?>
<h1> Welcome to the Assignment3 </h1>
<!-- List all the information about all the customers 
*  in alphabetical order by last name. 
*  When a user selects a customer, display all of his/her products that 
*  he/she has purchased. -->
<h2> Customers'information </h2>
<form action = "getCustomer.php" method = "post">
<?php
	include 'getData.php';
?>
<input type="submit" value = "Get Customer's information">
</form>

<!-- List all the products in alphabetical order by description OR in order by 
 * price. Allow the user to decide if the order is ascending or 
 * descending for both the description and price. -->
<h2> Product information </h2>
<form action = "getProduct.php" method = "post">
<?php
     	include 'getproducts.php';
?>
<input type="submit" value = "Get Product information">
</form>

<!--  Insert a new purchase (prompt for necessary data) 
 *  Note: Send an error message if they try to give an 
 *  invalid customer id number or invalid product number 
 *  (or make your GUI so that it doesnt allow them to pick those). 
 *  If the user tries to let a customer purchase 
 *  a product they already have purchased, 
 *  instead just let them change the quantity that the customer 
 *  will have purchased of that product.  
 *  Don't allow the quantity to go lower, just higher by the amount 
 *  they want now. -->
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

<!-- Insert a new customer (prompt for necessary data) 
 * Note: Send an error message 
 * if they try to insert an existing customer id number 
 * (or make your GUI so that it generated the new key for the user) -->
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

<!-- Update a customer's phone number, prompt for the customer id number, 
 * display the current phone number before prompting them for the 
 * new phone number. Note: Send an error message if the user doesn't enter 
 * an existing customer id (or use your GUI to only allow them to pick from 
 * a list of current customers) -->
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

<!-- Delete a customer (Prompt for the customer id to delete) 
 * Note: Send a warning message if they try to delete a 
 * non existing customer id number 
 * (or make your GUI so that they can only pick 
 * an existing customer from a list) -->
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

<!-- List all the customer names who bought more than a given quantity of 
 * any product. Prompt the user for the quantity. 
 * Display the description of the product and quantity purchased also -->
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

<!-- List the description of any product that has never been purchased -->
<p>
<hr>
<p>
<h2> Description of products has never been purchased</h2>
<?php
        include 'listDescription.php';
?>

<!-- List the total number of purchases for a particular product 
 * and the product description 
 * and the total money made in sales for that product 
 * (cost * quantity). Prompt the user for the product id 
 * (Note: display an error message if the the product does not exist 
 * or create the GUI in a way that the user cant 
 * pick a product that doesnt exist) --> 
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

<!-- Allow the user to click on one of the customers 
and if this field is null 
then let the user find an image online and add the url 
to the officials table AND display the image in your user interface. 
If the field is not null, display the image at the url--> 
<h2> Customers'image </h2>
<form action = "getImage.php" method = "post">
<?php
        include 'getData.php';
?>
<input type="submit" value = "Get Customer's Image">
</form>


<?php
mysqli_close($connection);
?>
</body>
</html>
