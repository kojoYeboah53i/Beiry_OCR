<?php
$dsn = 'mysql:host=localhost;dbname=educate'; //Data source Name
$username = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);
 ?>