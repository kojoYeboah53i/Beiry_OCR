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
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DicksSuckerLogin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="jq.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <p><h1>Login</h1></p>
    <!--this is how to pass the submit request to the php file for processing -->
    <form action="<?php echo $CurrentScript;?>" method="post">

        <!-- the variable name follows the name tag -->
        <input type="text" name="usr_nm" id="" placeholder="nameOFsucker"> 
        <br>
        <br>
        <input type="password" name="usr_ps" id=""  placeholder="password">
        <br>
    <h1>  Gender: </h1><b> <br>
<input type="radio" name="gender" value="female">Female <br>
<input type="radio" name="gender" value="male">Male <br>
        <input type="submit" name="sub_" value="submit">

    </form>
    
</body>
</html>