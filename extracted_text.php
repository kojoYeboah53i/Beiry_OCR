<?php
session_start();


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




