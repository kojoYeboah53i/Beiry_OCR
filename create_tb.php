<html>
   <head>
      <title>Creating MySQL Tables</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = 'TUTORIALS';

         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
         
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


         mysqli_select_db( 'TUTORIALS' );
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not create table: ' . mysql_error());
         }
         echo "Table created successfully\n";
         mysqli_close($conn);
      ?>
   </body>
</html>