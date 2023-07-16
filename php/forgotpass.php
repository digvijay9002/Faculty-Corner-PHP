<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../connection/testconn.php');
require('../PHPMailer-master/src/Exception.php');
require('../PHPMailer-master/src/PHPMailer.php');
require('../PHPMailer-master/src/SMTP.php');

session_start();
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "SELECT name, email FROM logindata WHERE email = '$email' ";
    // exit(0);
    $result = mysqli_query($db_conn, $sql);

    if (!$result) {
        echo "error";
    } else {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if (!$row['email'] == $email) {
            echo "<script>window.alert('Enter Registered email Only')</script>";
        } else if ($row['email'] == $email) {

            $random = rand(100000, 999999);

            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['random'] = $random;





            //Sending email code

            // PHPMailer classes into the global namespace

            // Base files 

            // create object of PHPMailer class with boolean parameter which sets/unsets exception.
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP(); // using SMTP protocol                                     
                $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
                $mail->SMTPAuth = true; // enable smtp authentication                             
                $mail->Username = 'testmailer9002@gmail.com'; // sender gmail host              
                $mail->Password = 'hacker@777'; // sender gmail host password                          
                $mail->SMTPSecure = 'tls'; // for encrypted connection                           
                $mail->Port = 587; // port for SMTP     

                $mail->setFrom('testmailer9002@gmail.com', "Admin"); // sender's email and name
                $mail->addAddress($email, "Receiver"); // receiver's email and name

                $mail->Subject = 'One Time Password';
                $mail->Body = 'Your OTP is ' . $random;

                $mail->send();


                header('location: enterotp.php');



            } catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ';
            }
        } else {
            echo 'error';
        }
    }

}


?>
<html>

<link rel="stylesheet" type="text/css" href="../css/forgot_pass.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&family=Ubuntu+Mono&display=swap"
    rel="stylesheet">


<body>

    <form action="forgotpass.php" method="POST">
        <h3> Recover Account </h3>
        <label> Enter Your Email :
            <input type="email" name="email" class="Signininput" placeholder="enter email" required></label>
        <button class="btn" name="submit"> Get OTP</button>
    </form>
</body>


</html>