<?php  
 //login_success.php  
 /*
 session_start();  
 if(isset($_SESSION["username"]))  
 {  

      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:pdo_login.php");  
 } */ 
 ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <body>
    
    <center>
    <h3>Select pdf file</h3>
    <form action="phpapi.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" name="sub"/>
    </form>
    </center>
    
    </body> 
    </html>