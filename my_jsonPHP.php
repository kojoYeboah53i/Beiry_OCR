<?php
//always convert json array and json object
//to php array and php object respectively before manipulating it 
//json_decode($my_json) and json_decode($my_json, true) for convertion respectively


//header("Content-Type: application/json"); for non-html output, also content - type: text/plain

// Define recursive function to extract nested values
function printValues($arr) {
    global $count;
    global $values;
    
    // Check input is an array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    
    /*
    Loop through array, if value is itself an array recursively call the
    function else add the value found to the output items array,
    and increment counter by 1 for each value found
    */
    foreach($arr as $key=>$value){
        if(is_array($value)){
            printValues($value);
        } else{
            $values[] = $value;
            $count++;
        }
    }
    
    // Return total count and values found in array
    return array('total' => $count, 'values' => $values);
}

global $mystring;

$mystring = 'there is some error in the file upload substr($mystring, $end_, strlen($mystring)';
 
// Assign JSON encoded string to a PHP variable
$json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';
// Decode JSON data into PHP associative array format
$arr = json_decode($json, true);


// Call the function and print all the values
$result = printValues($arr);
echo "<h3>" . $result["total"] . " value(s) found: </h3>";
echo implode("<br>", $result["values"]);
 
echo "<hr>";

// Print a single value
echo $arr["book"]["author"] . "<br>";  // Output: J. K. Rowling
echo $arr["book"]["characters"][0] . "<br>";  // Output: Harry Potter
echo $arr["book"]["price"]["hardcover"];  // Output: $20.32


?>