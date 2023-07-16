<?php
// $db_conn = mysqli_connect('localhost','ictmu6ya_faculty_director','_$.6nJ0W6btU','ictmu6ya_faculty_director');

// if($db_conn === false){
//     die("Error: Couldnot connect with DB" . mysqli_connect_error());
// }
?>

<?php
// $servername = "localhost";
// $username = "ictmu6ya_faculty";
// $password = "ictmu6ya_faculty";
// $dbname = "ictmu6ya_faculty";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hcd";

// Create connection
$db_conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}
// echo "connect";
?>