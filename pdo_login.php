<?php
    session_start();  
    $host = "localhost";  
    $username = "root";  
    $password = "";  
    $database = "testing";  
    $message = "";  
    try  
    {  
         $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
         if(isset($_POST["login"]))  
         {  
              if(empty($_POST["username"]) || empty($_POST["password"]))  
              {  
                   $message = '<label>All fields are required</label>';  
              }  
              else  
              {  
                   $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                   $statement = $connect->prepare($query);  
                   $statement->execute(  
                        array(  
                             'username'     =>     $_POST["username"],  
                             'password'     =>     $_POST["password"]  
                        )  
                   );  
                   $count = $statement->rowCount();  
                   if($count > 0)  
                   {  
                        $_SESSION["username"] = $_POST["username"];  
                        header("location:a_toText.php");  
                   }  
                   else  
                   {  
                        $message = '<label>Wrong Data</label>';  
                   }  
              }  
         }  
    }  
    catch(PDOException $error)  
    {  
         $message = $error->getMessage();   // . $exception->getMessage();
    }  
    ?>  
    <!DOCTYPE html>  
    <html>  
         <head>  
              <title>login Page</title>  
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
             
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
         </head>  
         <body>  
              <br />  
              <div class="container" style="width:500px;">  
                   <?php  
                   if(isset($message))  
                   {  
                        echo '<label class="text-danger">'.$message.'</label>';  
                   }  
                   ?>  
                   <h3 align=""> Login</h3><br />  
                   <form method="post">  
                        <label>Username</label>  
                        <input type="text" name="username" class="form-control" placeholder="Username" />  
                        <br />  
                        <label>Password</label>  
                        <input type="password" name="password" class="form-control" placeholder="password" />  
                        <br />  
                        <input type="submit" name="login" class="btn btn-info" value="Login" />  
                   </form>  
              </div>  
              <br />  
         </body>  
    </html>  
