<?php
echo "<h1> LED STATUS</h1> . <br> "; 
//led status from html.dom
 
function toggleLED() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$LED_on =($_POST["LEDON"]);
//$u_name = test_input($_POST["usr_nm"]);

//$LED_off =($_POST["LEDOFF"]);

$var =($LED_on == 'ON') ? "<h2> LED IS ON<h2> " :"<h2> LED IS OFF<h2>" ; echo $var;

/*
 * Always specify the type attribute for the <button> element. 
 * Different browsers may use different default types for the <button> element.
 */
}



}

/**
 * what is php 7, how does it differ from what i have been doing

 */


?>

