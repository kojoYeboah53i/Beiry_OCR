<?php
session_start(); 
//include_once "upload.php"
?>
<!DOCTYPE html>
<html>
<head>
  <title>ORC RESUlTS</title>
</head>
<body>


  <?php
  
     // $raw_text = "";
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      echo "<br> here is the file <br>";
     // printf('<b>%s</b>', $_SESSION['file_']);
      //var_dump('<b>%s</b>', $_SESSION['file_']);

      $raw_text = ($_SESSION['file_']);



      unset($_SESSION['message']);
     
    }

   /* 
$results = array("my name: isaac", "my dob: january");
    ob_start();
    var_dump($results);
echo "<br/> ";
echo "<br/> ";

$raw_text = ob_get_clean();
echo $raw_text;
echo "<br/> ";
echo "<br/> ";
*/

  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>

    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>





