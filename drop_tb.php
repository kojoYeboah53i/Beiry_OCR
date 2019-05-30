<html>
   <head>
      <title>Creating MySQL Tables</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
        // $db = 'TUTORIALS';

$conn = mysql_connect($dbhost, $dbuser, $dbpass /*$db*/);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }

         echo 'Connected successfully<br />';
         $sql = "CREATE TABLE tutorials_tbl( ".
         "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
         "tutorial_title VARCHAR(100) NOT NULL, ".
         "tutorial_author VARCHAR(40) NOT NULL, ".
         "submission_date DATE, ".
         "PRIMARY KEY ( tutorial_id )); ";


         mysql_select_db( 'GREYHOUND' );

         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
         echo "Table CREATED successfully in GREYHOUND DB\n";

         $sql = "DROP TABLE tutorials_tbl";

         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
         echo "<br />Table delete successfully in GREYHOUND DB\n";
         
         mysql_close($conn);
      ?>
   </body>
</html>