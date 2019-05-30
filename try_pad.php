<?php


   
$results = array("my name: isaac", "my dob: january");
    ob_start();
    var_dump($results);
echo "<br/> ";
echo "<br/> ";

$raw_text = ob_get_clean();
//echo $raw_text;
echo "<br/> ";
echo "<br/> ";


//echo getString($raw_text,'is', 5) ;

//date of birth ,membership no. ,date of issue ,gender
$nhis_ = array(  "name ", "dod",  "gender", "mem_no", "doi" );

//echo $nhis_[4];
echo "<br>";
$name = "";
$date_of_birth= "";
$membership_no= "";
 $date_of_issue= "";
 $gender = "";


 //$myJSON = json_encode($myArr);
echo "name :"; echo "<br>";
 echo $nhis_[0] = "kwame"; echo "<br>";
echo "date_of_birth:"; echo "<br>";

 echo  $nhis_[1] =$date_of_birth; echo "<br>";
echo "gender:"; echo "<br>";

 echo $nhis_[2]= $gender ; echo "<br>";
 echo "membership_no"; echo "<br>";

 echo $nhis_[3] =$membership_no ; echo "<br>";
 echo "date_of_issue" ; echo "<br>";

 echo $nhis_[4] = $date_of_issue ; echo "<br>";





?>