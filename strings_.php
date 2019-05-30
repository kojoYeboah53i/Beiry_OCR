<?php
/*
$mystring = "there is some error in the file upload";

$pos_ = stripos($mystring, '=> string');
$end_ = $pos_ + 3;

$results = substr($mystring, $end_, strlen($mystring) -($pos_));

echo $results;

*/


$mystring = 'there is some error in the file upload substr($mystring, $end_, strlen($mystring)';

$srt_ = stripos($mystring, 'rr');//fix

echo "<br>";
echo "whole string length=";
echo $fine = strlen($mystring);

$end_ = $srt_ + 19;//fix ;//stripos($mystring, "rle");


$results = substr($mystring, $end_, ($srt_));
echo "<br>";

echo "<br>";
echo $mystring;
echo "<br>";
echo "<br>";
echo $results;
echo "strpos =";
echo "<br>";
echo $srt_;

echo "<br>";
echo "endpos =";

echo "<br>";

echo $end_;


/* 
$results = array("my name: isaac", "my dob: january"); => this is the right syntax
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