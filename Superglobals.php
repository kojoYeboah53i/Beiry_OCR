<?php
#super globals $_SERVER

#Associative arrays are arrays that use named keys that you assign to them.

$server=[
                                #built in function to get server name 
    /*key*/'host_Server_name'=> $_SERVER['SERVER_NAME'],
            'http_host'=> $_SERVER['HTTP_USER_AGENT'],
            'ip_address'=> $_SERVER['SERVER_ADDR'],
            'query_string'=> $_SERVER['QUERY_STRING'],
            'server_admin'=>$_SERVER['SERVER_ADMIN']

            
];

#echo $server ['host_Server_name'];

#echo $server ['HTTP_USER_AGENT'];
echo $_SERVER['HTTP_USER_AGENT']; //isaac this is a small minor array error so try fix it 
echo "<br>";
echo "http user agent here";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php 

#i want to see how to use id's to separate forms 
#so "name" is like id tag in javascript
function get_data(){
if(isset($_POST['sub2'])) { 
       
        echo "correct";
}
       
else if(isset($_POST['sub1'])) { 
        echo "wrong";}


else{
        echo "weird";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
   strong {
 color: blue;

  
  }

  button{
background-color:lime; width: auto; height: auto;

  }
  h4{  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  height: 3px; color: yellow;
}
h1{  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  height: 3px; color: green; position: relative;
}
form{

  right: 40px;
}
ul.{

font-size:8px, color: magenta;
}
li.{

font-size:9px, color:brown;
}


</style>
</head>
<body>
  <div class ="container">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h4> Sur Name:</h4>  <input type="text" name="fname">
  <br>
  <input type="submit"  name ="sub1">
</form>
<br>

<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <h4> Name:</h4> <input type="text" name="fname">
  <br>
  <input type="submit"  name ="sub2">
</form>

<strong>
<?php echo get_data(); ?>:
</strong>
<?php 
/*
echo "<br>";
//echo $server; 
echo "<br>";
print_r ($server);
  echo "<br>";

  foreach($server as $key){
    echo $key . ',' ;
  }
*/?>

<h1>Server Info</h1>
<br>
<?php if($server): ?>
<ul class="List-Group">
<?php foreach ($server as $key => $value):?> 
 <li class="list-Group-Item">
   <strong>
     <?php echo $key; ?>:
   </strong>
   <?php echo $value; ?>
 </li>

<?php endforeach; ?>
</ul>
<?php endif; ?>


</div>
</body>
</html>

