<?php include "ledStatus.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckLED</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <style>
       
    h1 {
        font-size: 45px; color: blue;
    }
    h2 {
        font-size: 15px; color:magenta;

    }
    body{
        color: grey;
    }

    button{
background-color:lime; width: auto; height: auto;color: blue;

  }

h4{  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  height: 3px; position: relative; color: orange;
}
div{

  right: 40px;
}

    </style>


</head>


<body>

      

   <br>
 <div>  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST"> <br>
   <h4>CHANGE LED STATE</h4> <br>
   

 
   <button type="submit" name ="LEDON"  value ="ON">TURN ON</button></div> <br>
   
   <span></span>  
 

   
   <button type="submit"name ="LEDON" value ="OFF">TURN OFF</button> <br>
  
<!--name="enter"
Always specify the type attribute for 
the <button> element. Different browsers may 
    use different default types for the <button> element.
 -->

   </form>
   <?php 
   //put the php code into a function and echo it within the html dom
   //that way u can put the output at specific places 
   echo toggleLED();
    ?>
 </div>

</body>
</html>