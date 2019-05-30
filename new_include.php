<?php
//require "pdo_login.php"
/*
$host = "localhost";  
$username = "root";  
$password = "";  
$database = "testing";  
$message = "";  
 */
     $connect = mysql_connect('localhost' , 'root' , '', 'testing' );  

$sql = "CREATE TABLE IF NOT EXISTS  Customers (customerID INT NOT NULL AUTO_INCREMENT,
  
 customerName VARCHAR(50) NOT NULL,
 customerLocation VARCHAR(60) NOT NULL,
 customerContact DOUBLE NOT NULL,
PRIMARY KEY(customerID)
)";


$result = mysql_query($sql, $connect) or die ("Bad create: $sql");

echo "helo world";
?>




<!--

<html>
<body>

<div class="menu">


<?php // include 'menu.php';?>


</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>


</body>
</html>

-->