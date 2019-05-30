
<html>
   <head>
      <title>Creating MySQL Database</title>
   </head>
   
   <body>
      <?php
      //the $sql parameter is require 
//the $on parameter is used to open the specfic connection else 
//the last opened connection used

//mysql_db_name($sql, )

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = 'CREATE DATABASE IF NOT EXISTS TUTORIALS';
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
   die('Could not create database: ' . mysql_error());
}
echo "Database TUTORIALS created successfully\n";
mysql_close($conn);



/*
       //variables
       $dbhost = 'localhost';
       $dbuser = 'root';
       $dbpass = '';

       //in_built connect server function 
       $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
                //perform test on connnection
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }

         echo 'Connected successfully<br />';

            //creates database
         $sql = ' CREATE DATABASE IF NOT EXISTS PEOPLES ';
         $retval = mysql_query( $sql, $conn );
         
                //perform test on connnection
            if(! $retval ) {
            die('Could not create database: ' . mysql_error());
         }
                 
         //close connection to server//

         echo "Database PEOPLES created successfully\n";
         mysql_close($conn);
         */
      ?>
   </body>
</html>

