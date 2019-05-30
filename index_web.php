<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
  <title>OCR upload</title>
</head>
<body>


  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      echo "<br> here is the file <br>";
  
      var_dump('<b>%s</b>', $_SESSION['file_']);


      unset($_SESSION['message']);
     
    }
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
