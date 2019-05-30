<?php
 //test user inputs
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//this variable holds the path of action to this script
$CurrentScript = $_SERVER ['PHP_SELF'];


if (isset($_POST['sub_'])) {


//if ($_SERVER["REQUEST_METHOD"] == "POST") { 

 


$u_name = test_input($_POST["usr_nm"]);
$u_psd = test_input($_POST["usr_ps"]);


 if (strlen($u_psd) < 6) {
     echo 'password too short!';
 }
 if (empty($u_name) || empty($u_psd)) {
   echo 'doucebag! fill all fields';
 }

$vlue = ($u_name == 'kojo' && $u_psd == '1234567')?'<script>window.location.href="true.html"</script>':'user not found'; echo $vlue;
 

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><strong> LOGIN</strong> </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<!--
<form action="index.html" method="post">
-->
    <form  class="box" action="<?php echo $CurrentScript;?>" method="post">
  <h1>Login</h1>
  <input type="text"name="usr_nm" id="" placeholder="Username">
  <input type="password"name="usr_ps" id="" placeholder="Password">
  <input type="submit" name="sub_" value="submit">
</form>


  </body>
</html>