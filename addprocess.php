<?php
//Retrieving Post Data From Form
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
include("_connect.php");
//Add product to table
mysql_query("
INSERT INTO products
(name,description,price)
VALUES
('$name','$description','$price')
");
//Notify user
?>
Product added, <a href="add.php">click here to return</a>