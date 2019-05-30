<?php
if(isset($_GET["value"])) //this is like if serial.availbale()>0 in arduino 
{
    $myfile=fopen("file.text","w"); // the variable $myfile creates a file.text on the server 
    $text=$_GET["value"];
    fwrite($myfile,$text);
    fclose($myfile); //fwrite funtion writes value inside buffer(Serial.available )into file.text
}

?>




