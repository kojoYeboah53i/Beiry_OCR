<?php  
//require "pdo_login.php";
 //login_success.php  
 session_start();


 /*
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
     // $con = mysql_connect("localhost","mysql_user","mysql_pwd");
if (!$connect)
  {
  $message = '<label>Database not found </label>';
  }

  else{
   
 }

  catch(PDOException $error)  
  {  
       $message = $error->getMessage();  
  }  
*/

 if(isset($_SESSION["username"]))  
 {  

      echo '<br /><br /><a href="logout.php">Logout</a>';  
      echo '<br /><br />';

      /*
       $sql = "SELECT * FROM Customers";

    $result = mysql_query($connect, $sql) or die('bad query : $sql'); 

  }
     // $row = mysql_fetch_assoc($result);
  
     $NAME = $result['CUSTOMERNAME'];
     $CONTACT = $result['CUSTOMERCONTACT'];
     
     echo "Customer Name: " . $NAME . "<br/>";
     echo "Customer Contact: " . $CONTACT . "<br/>";
      */
    
     // $result = ("SELECT `customerName`, `customerContact` FROM `customers` ");
      // some code
//mysql_close($con);

      




      
       
 }  
 else  
 {  
      header("location:pdo_login.php");  
 }  

 //if (isset ($_POST['sub_'])){
    //echo '<br /><br />';
    
    // $result = "empty variable";
     
   /// echo $result;


 

  /*{
  echo "Database my_db created";
  }
else
  {
  echo "Error creating database: " . mysql_error();s
  }*/
 ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <body>
    
    <center>
    <h3>Select pdf file</h3>

    <form action="totext.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="image" />

    <input type="submit"/>

    </form>
    <br />
    <!--<button type="button" id="" name ="sub_">show</button>
-->
    </center>
    <button> 
    </body> 
    </html>