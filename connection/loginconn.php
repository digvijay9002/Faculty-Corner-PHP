<?php
session_start();
require('testconn.php');

$name = $_POST['name'];
$Password = $_POST['pass'];
// $email = $_POST['email'];

$sql = "SELECT * FROM logindata WHERE name = '$name' OR email='$name'";
$result = mysqli_query($db_conn, $sql);
if (!$result) {
    echo "error";
} else {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (!($row['password'] == $Password && ($row['name'] == $name || $row['email'] == $name))) {
        $_SESSION['flag'] = 1;
?>
        <script>
            window.location.replace("../php/login.php");
        </script>
    <?php
        // header('location:../login.php');

    } else if ($row['password'] == $Password && ($row['name'] == $name || $row['email'] == $name)) {

        $_SESSION['name'] = $row['name'];
    ?>
        <script>
            window.location.replace("../index.php");
        </script>
<?php
        // header('location:../faculty_registration.php');


    } else {
        echo "error";
    }
}
?>