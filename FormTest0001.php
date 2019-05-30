
<?php
#this is how constant is define in php
define('ADMIN',  'Yeboah'); #single quotes actually mean a big deal in php
define('AUTHOR',  'Isaac'); #single quotes actually mean a big deal in php
echo" Authour: ADMIN .  AUTHOR";   #the '.'in php actually means concatenate 
echo "<br>";
echo "<br>";


echo "hello world";

#line break in PHP 
echo ".<br/>";

#some default function to show time on browser
date_default_timezone_set("UTC");

echo date('h:i:s:u a, l F jS Y e');

if (isset($_POST['sub_'])) 
{

$toCollect_usrname = $_POST['usr_nm'];
$toCollect_usrpassword = $_POST['usr_ps'];
}
#this is how to embedd html with the php script
echo("<p> <h1> This is html tag in PHP</h1> </p>");

$str = <<<'EOD'
Example of string
spanning multiple lines
using heredoc syntax.
<br/>
<!-- honestly i don't see the diff yet between heredoc and nowdoc -->
<!-- both read html tags -->

<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

EOD;

echo $str; 


echo"<p>there shouldn't a problem here </p>";
#echo ADMIN;

#increment and decrement 
$randdom_num = 5;
echo $randdom_num . "<br>";

echo $randdom_num. "this is a random number". "<br>";
 $randdom_num++; #the variable increases after the compiler sees the "++"

echo $randdom_num++. "this is a random number++". "<br>";

echo $randdom_num . "this is the current value of random number". "<br>";
#so ++ before the variable gives
echo ++$randdom_num. "this is a ++random number". "<br>";



#php pointer or reference 
$ref_num = $randdom_num;

echo $ref_num. "<br>";

echo "<br>";  $ref_num = &$randdom_num;
echo "<br>"; $ref_num = 1000; 
echo "<br>";
echo $randdom_num; 


echo "<br>";
echo "<br>";
#tenary operators
#  (condition ) ? value if true : value if false;
$var =  (19 > 4) ? 4 : 19;
echo $var."<br>";
#another example
#$message = 'Hello '.($user->is_logged_in() ? $user->get('first_name') : 'Guest');
echo "<br>";
echo "<br>";


#php array
$cars = array('benz',' toyota', 'ford');
echo $cars[2]. "<br>";
echo "<br>";

//add a new item to array
$cars[6] ="lambogaini";
echo $cars[6]. "<br>";

//loop through array
foreach($cars as $vehicle){
echo $vehicle . ',';
}echo "<br>";echo "<br>";


//array reference
$user = "Philip";
$street = "Santa ";
$school = "UCC";

//put them into the array
$customer = array('name'=>$user,' residence'=>$street, 'class'=>$school);

//loop through array
foreach($customer as $key=>$value){
  echo $key .' : ' .$value;

}

#always accessible, regardless of scope 
if (isset($_POST['sub_'])) 
{
$_the_nameEnter =($_POST['usr']);   
$_the_pswdEnter =($_POST['usrpwd']);   
echo "<br>";
echo "<h2>the result shows here:</h2>";
echo "<br>";
$vlue = ($_the_pswdEnter == "kojo")? " $_the_nameEnter": " <h2>wrong password</h2>"; echo $vlue;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
   img {
    position: relative;
    left: 1px;
    top: 1px;
    z-index: -2;

  
  }

  button{
background-color:lime; width: auto; height: auto;

  }

h4{  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  height: 3px; 
}
form1{

  right: 40px;
}

}

</style>

    <!-- always add the link to your stylesheet before the css can work -->
    <link rel="stylesheet" type="text/css" href="driveAPP.css" />
    <body>
  <div>    
      <form action="FormTest0001.php" method = "post">
      <h4>LOGIN</h4>
      <br>
         <!--input type and name of variable that's it -->
   <input type="text" name ="usr"> <br>
  <input type="passwprd" name="usrpwd">  <br>
   
   <!--button type submit that's it -->
   <button type="submit" name ="sub_">Submit</button> <br>
   </div>
   <!--<input type="passwprd" name="usrpwd"> -->
   </form>
   <br>
   <br>
   <form1 action="ledStatus.php" method= "post"> <br>
   <h4>CHANGE LED STATE</h4> <br>
   
   <input type="hidden" name ="enterLED" value="ON"> <br>
   <button type="submit" name="ON">TURN ON</button> <br>
   <input type="hidden" name ="enterLED1" value="OFF"> <br>
   <button type="submit" name="OFF">TURN OFF</button> <br>

   </form1>


</body>
</html>

