<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
//$email2 = $_POST['email1'];

$password2 = $_POST['password1'];
//$contact2 = $_POST['contact1'];

$connection = new mysqli("localhost", "root", "");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO mydba (name, password)
VALUES ('$name2', '$password2')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
/*
 
//$db = mysqli_select_db("mydba", $connection); // Selecting Database

if (isset($_POST['name1'])) {
    $sql= "INSERT INTO form_element"."(name, password)"."VALUES "."('$name2', ' '$password2')";

    mysql_select_db('mydba');

    $retval = mysql_query( $sql, $connection );
         
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
         

//$query = mysql_query("insert into form_element(name, password) values ('$name2', ' '$password2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysqli_close($connection); // Connection Closed
*/

/*


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

*/
?>