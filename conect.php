<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
      //connects to mysql server 


      //variables
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';

         //in_built connect database function 
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         //perform test on connnection
         if(! $conn ) {

            //dies if connection fails
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>