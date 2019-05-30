<?php
session_start();


$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'pdf','gif', 'png', 'zip', 'txt', 'xls', 'doc' );

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = 'C:/xampp/my_xampp/htdocs/testing001/uploaded_files/';
      //include ( 'C:/xampp/my_xampp/htdocs/testing001/vendor/pmdunggh/pdftotext/PdfToText.phpclass' ) ;

      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
        
        
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
 /* echo "<br> here is the file br>";
        echo $newFileName; }*/
}

$_SESSION['message'] = $message;
$_SESSION['file_'] =  $newFileName;

header("Location:SampleOCRWSProjectPHP.php");
/*

function oneFunc()
{
  $_file = 'samle' ;
  $pdf	=  new PdfToText("$_file.pdf") ; 
     //  echo  $message  ;
  if (!$pdf) {
      echo "<br>the pdf file wasn't on the second condition!<br>";
      echo  $message  ;

  } 

  else
   {
      echo "<br>calling the output func<br>";

      output("Original file contents :\n") ;
      echo "<br>first output<br>";

      output(file_get_contents("$_file.txt")) ;
      echo "<br>2nd output<br>";

      output("-----------------------------------------------------------\n") ;
      echo "<br>third output<br>";


      output("Extracted file contents :\n") ;
      echo "<br>fourth output<br>";

      output($pdf -> Text) ;
      echo "<br>last output<br>";
  }
}*/



