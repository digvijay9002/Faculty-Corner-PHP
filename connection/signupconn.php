<?php
session_start();

require('testconn.php');

$SRNO = NULL;
$name = $_POST['name'];
$Password = $_POST['password'];

$CPass = $_POST['confirm_password'];
$email = $_POST['email'];



if ($Password != $CPass) {
    $_SESSION['pass'] = 1;

    header('location:../php/signup.php');
} else if ($Password == $CPass) {
    $SQL = "INSERT INTO `logindata`(`name`, `password`, `email`) VALUES ('$name','$Password','$email');";
    $result = mysqli_query($db_conn, $SQL);

    if (!$result) {
        echo 'Errror';
    } else {
        //  echo 'done';
        // $_SESSION['UserCreated']=1;
        // header('location: https://ictmu.in/hcd/faculty-directory/index.php');
?>
        <script>
            window.location.replace("../php/login.php");
        </script>
<?php
    }
}


?>