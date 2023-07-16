<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link rel="icon" type="image/x-icon" href="./Image/discussion-forum-icon-9.jpg">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&family=Ubuntu+Mono&display=swap" rel="stylesheet">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script src="../JS/login.js"></script>

<body>

    <div class="d-flex justify-content-md-center align-items-center vh-100">

        <div class="row justify-content-center">

            <div class="col- col-sm-4 col-md-4 col-lg-6">
                <form action="../connection/loginconn.php" method="post">


                    <div class="center_img">
                        <img src="../image/mulogo.png" class="image_size">
                    </div>



                    <br>
                    <p>
                        <label for="username" class="upass">Username</label>
                        <input class="Signininput" type="text" placeholder="Enter Username" name="name" required>
                    </p>


                    <label for="password" class="upass">Password </label>

                    <input class="Signininput" type="password" placeholder="Password" name="pass" id="id_password" required>




                    <?php
                    session_start();
                    if (isset($_SESSION['flag'])) {
                        echo 'Invalid login credential';
                    }
                    if (isset($_SESSION['UserCreated'])) {
                        echo 'Account Created';
                    }
                    if (isset($_SESSION['changed'])) {
                        echo 'Password Successfully Changed';
                    }


                    ?>
                    <br>
                    <!-- <p class="right"><a class="fgpcss" href="./php/forgotpass.php">Forgot password?</a></p> -->

                    <p class="right"><a class="signupcss" href="../php/signup.php">Create Account</a></p>
                    <br>
                    <button class="btn" id="lgin" type="submit">LOGIN</button>
                </form>

            </div>
        </div>

    </div>


</body>

</html>