<?php
session_start();
//include_once "index.php";
$client = new SoapClient("http://www.ocrwebservice.com/services/OCRWebService.asmx?WSDL"
, array("trace"=>1, "exceptions"=>1)

);

$params = new StdClass();
$params->user_name = "ASARE44";
$params->license_code = "DBAF3446-6D8C-492F-BF84-D901B45A1EEF";
			 

$inimage = new StdClass();


//copy uploaded file
if (isset($_SESSION['message']) && $_SESSION['message']) {
  printf('<b>%s</b>', $_SESSION['message']);
  echo "<br> here is the file <br>";
 
  $_upfile= $_SESSION['file_'];
 // echo  $_upfile  ;
 echo "<br>";
  unset($_SESSION['message']);
}


$uploadFileDir =  'C:/xampp/my_xampp/htdocs/testing001/uploaded_files/';

$dest_path = $uploadFileDir . $_upfile;

//$card_image = fread($handle, filesize("$dest_path"));

$handle = fopen("$dest_path", 'r');

    $card_image = fread($handle, filesize("$dest_path"));
    fclose($handle);

    $inimage->fileName =  $dest_path;
    $inimage->fileData = $card_image;

    $params->OCRWSInputImage = $inimage;

    $settings = new StdClass();
    $settings->ocrLanguages = array("ENGLISH");
    $settings->outputDocumentFormat  = "TXT";
    $settings->convertToBW = false;
    $settings->getOCRText = true;
    $settings->createOutputDocument = false;
    $settings->multiPageDoc = false;
    $settings->ocrWords = false;

    $params->OCRWSSetting = $settings;

try 
{
$result = $client->OCRWebServiceRecognize($params);
} 
catch (SoapFault $fault) 
{
print($client->__getLastRequest());
print($client->__getLastRequestHeaders());
}

//ob_start();
    var_dump($results);

/*
//$raw_text = ob_get_clean();


 //$raw_text =printr($result);


//0$raw_text = $result;

$mystring = $raw_text;

$srt_ = stripos($mystring, '=> string');//fix

echo "<br>";
echo "whole string length=";
echo $fine = strlen($mystring);

$end_ = $srt_ + 19;//fix ;//stripos($mystring, "rle");


$results_ = substr($mystring, $end_, ($srt_));
echo "<br>";

echo "<br>";
echo $mystring;
echo "<br>";
echo "<br>";
echo $results_;
echo "strpos =";
echo "<br>";
echo $srt_;

echo "<br>";
echo "endpos =";

echo "<br>";

echo $end_;

*/

if(isset($_POST['upload'])){
                    header("Location:index.php");

                }
?>

<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>OCR PARSER</title>
                </head>
                <body>
                  <br>
                  <br>
                <form method="POST" action="phpapi.php" >

 

    <button type="submit" name="upload" >upload another</button>
            </form>
</body>
</html>
  
 






