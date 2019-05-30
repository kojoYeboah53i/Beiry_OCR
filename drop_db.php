<html>
   <head>
      <title>Deleting MySQL Database</title>
   </head>
   
   <body>
      <?php
$dbhost = 'localhost';
$dbuser = 'root';
$db = 'TUTORIALS';
         
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $db);

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';

$sql = 'DROP DATABASE TUTORIALS';
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
   die('Could not DROP database: ' . mysql_error());
}
echo "Database TUTORIALS Dropped successfully\n";
mysql_close($conn);
      ?>
   </body>
</html>