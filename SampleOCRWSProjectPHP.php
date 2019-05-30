<?php
session_start();
$client = new SoapClient("http://www.ocrwebservice.com/services/OCRWebService.asmx?WSDL"
, array("trace"=>1, "exceptions"=>1)

);
/**
 * Login        : lydtand
 * License code : F0983FA8-66E6-4554-AB62-049BCF3954DB
 * 
 */
$params = new StdClass();
//$params->user_name = "<username>";
$params->user_name = "ASARE44";
$params->license_code = "DBAF3446-6D8C-492F-BF84-D901B45A1EEF";

//$params->license_code = "<license_code>";
			 

$inimage = new StdClass();
if (isset($_SESSION['message']) && $_SESSION['message']) {
    printf('<b>%s</b>', $_SESSION['message']);
    //echo "<br> <h1>here is the TEXT extracted</h1><br>";
   
    $_upfile= $_SESSION['file_'];
   // echo  $_upfile  ;
   echo "<br>";
    unset($_SESSION['message']);
  }

  function getString($mystring = "", $copy_from = 0, $stringlen  = 0)
  {
      $foo = $mystring;
 
      //$str = stripos($foo, $copy_from);
     
      return substr($foo, $copy_from, $stringlen);
        
  }  

  function getStringPos($mystring = "", $copy_from = "")
  {
      $foo = $mystring;

      $str_ = stripos($foo, $copy_from);
     
      //substr($foo, $copy_from, $stringlen);
        return $str_;
        }  

        function Getname_($nameStr = "")
{
$raw= $nameStr;
$ready_str= getString($raw, 218, 200) ;
$value_= getString($ready_str, 64, 15) ;

return $value_;
}

function Getdate_of_birth_($dateStr = "")
{
$raw= $dateStr;
$ready_str= getString($raw, 218, 200) ;
$value_= getString($ready_str, 95,10) ;

return $value_;
$raw="";
}

//membershio no.
function Get_membership_no($dateStr = "")
{
$raw= $dateStr;
$ready_str= getString($raw, 218, 200) ;
$value_= getString($ready_str, 128,10) ;

return $value_;
$raw="";
}
  
//date of issue
function Get_date_of_issue($dateStr = "")
{
$raw= $dateStr;
$ready_str= getString($raw, 218, 200) ;
$value_= getString($ready_str, 160,10) ;

return $value_;
$raw="";
}
  
  $uploadFileDir =  'C:/xampp/my_xampp/htdocs/testing001/uploaded_files/';

  $dest_path = $uploadFileDir . $_upfile;

  $handle = fopen("$dest_path", 'r');

//$handle = fopen("C:\\sample_image.jpg", 'r');
$card_image = fread($handle, filesize("$dest_path"));

//$card_image = fread($handle, filesize("C:\\sample_image.jpg"));
fclose($handle);

$inimage->fileName = $dest_path;
$inimage->fileData = $card_image;

$params->OCRWSInputImage = $inimage;

$settings = new StdClass();
$settings->ocrLanguages = array("ENGLISH");
$settings->outputDocumentFormat  = "TXT";
$settings->convertToBW = FALSE;
$settings->getOCRText = TRUE; 
$settings->createOutputDocument = FALSE; //change this to true for debugging
$settings->multiPageDoc = FALSE;
$settings->ocrWords = FALSE;

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

//my own scripts
ob_start();

var_dump($result);
$raw = ob_get_clean();

$name= Getname_($raw);

$date_of_birth_ = Getdate_of_birth_($raw);
$membership_no = Get_membership_no($raw);

$date_of_issue= Get_date_of_issue($raw);

//date of birth ,membership no. ,date of issue ,gender
$nhis_ = array(  "name ", "dod","mem_no", "doi" );

//echo $nhis_[4];
echo "<br>";
/*
 //$myJSON = json_encode($myArr);
echo "name :";
 echo "<h2>  $nhis_[0] = $name</h2> "; echo "<br>";
echo "date_of_birth:";

 echo "<h2> $nhis_[1] =$date_of_birth_</h2> "; echo "<br>";
//echo "gender:"; echo "<br>";

 //echo $nhis_[2]= $gender ; echo "<br>";
 echo "membership_no";

 echo "<h2>$nhis_[2] =$membership_no </h2> " ; echo "<br>";
 echo "date_of_issue" ;

 echo "<h2>$nhis_[3] = $date_of_issue </h2> "; echo "<br>";

*/
echo "<table >
<tr>

<th><h2>Customer</h2></th>
<th><h2>Card info</h2></th> 
</tr>
<tr>
  <td><h3>name   </h3></td>
  <td><h3> $name</h3><td>
  </tr>
  <tr>
  <td><h3>Gender</h3></td>
  <td><h3>Female</h3></td>
  </tr>
  <tr>
  <td><h3>Date of Birth  </h3>
  <td><h3>$date_of_birth_</h3>

  </tr>
  

</tr>
<tr>
<td><h3>Membership no.  </h3>
<td><h3>$membership_no </h3> 
</tr>

</tr>
<tr>
<td><h3>Date of issue.  </h3>
<td><h3>$date_of_issue </h3> 
</tr>
</tr>
<tr>
<td><h3>Type of card.</h3>
<td><h3>NHIS </h3> 
</tr>
</table>";


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
                <style>
                  table, th, td {
  border: 1px solid black;
  text-align: left;

  padding: 8px;
}
                </style>
                <body>
                  <br>
                 
                  <br>
                <form method="POST" action="SampleOCRWSProjectPHP.php" >

 

    
</body>
</html>