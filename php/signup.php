
<html>
    <head>
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <link rel="icon" type="image/x-icon" href="./Image/discussion-forum-icon-9.jpg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="../css/signup1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&family=Ubuntu+Mono&display=swap" rel="stylesheet">

    <script src="./JS/signup.js"></script>
    
    <body>
    
    <div class="d-flex justify-content-md-center align-items-center vh-100">
        <div class="row justify-content-center">
        <div class="col- col-sm-4 col-md-4 col-lg-6">
        <form action="../connection/signupconn.php" method="POST">
             <div class="center_img">
                 <img src="../image/mulogo.png" class="image_size">
             </div>    
           
            <label for="username">Username</label>
            <input class= "Signininput" type="text" placeholder="Username" name="name">
    
            <label for="password">Password</label>
            <input class= "Signininput" type="password" placeholder="Password" id="password" name="password">
            </label>

            <input class= "Signininput" type="password" placeholder="Re-enter Password" id="confirm_password" name="confirm_password">

            <?php
                    session_start();

                if(isset($_SESSION['pass']))
                    {
                            echo "-> Password doesn't match";
                            session_destroy();
                    }
                



            ?>
            <br>
            <label for="Email">Email</label>
            <input class= "Signininput" type="email" placeholder="Enter Email" name="email">
        
            <br>

            <br>
       
                <div class="row justify-content-center"> 
            <button class="btn" id="lgin">Create</button>
                </div>
            
            </div>
        </div>
    </div>
    
        </form>
    </body>
    
    </html>