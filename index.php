<?php
session_start();
error_reporting(0);


include('./connection/testconn.php');

$uname = $_SESSION['name'];

$sql = "SELECT SrNo FROM logindata WHERE name = '$uname'";
$result = mysqli_query($db_conn, $sql);

if (mysqli_num_rows($result) > 0)
        while ($rowData = mysqli_fetch_array($result)) {
                $SrNo = $rowData["SrNo"];
        }



?>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Faculties</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="./css/faculties.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSqnEw" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script src="./js/jquery-3.6.4.min.js"></script>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">


                <a class="navbar-brand" href="javascript:window.location.href=window.location.href">
                        <img class="col- col-sm- col-md- col-lg- col-xl-8" src="./image/ict logo black.png" style="width:100%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                                <?php
                                if (isset($uname)) {
                                        echo '<li class="nav-item">
                                        <a class="nav-link" href="./php/faculty_registration.php">Get Listed Here!</a>
                                </li>
                                        
                                <li class="nav-item">
                                        <a class="nav-link" href="./php/update_details.php">Update Details</a>
                                </li>
                                
                                
                                ';
                                }; ?>
                                <?php
                                if (isset($uname)) {
                                        //         echo '<li class="nav-item">
                                        //         <a class="nav-link" href="">Welcome, ' . $uname . '</a>
                                        // </li>
                                        echo '
                                <li class="nav-item">
                                        <a class="nav-link" href="./connection/logout.php"><span class="glyphicon glyphicon-log-out"></span>SignOut</a>
                                </li>
                                
                                ';
                                } else {
                                        echo '<a class="nav-link" href="./php/login.php">Login Now!</a>';
                                };
                                ?>

                        </ul>
                </div>
        </nav>


        <!-- <div class="all_f">--- All Faculties ---</div> -->
        <div class="wrapper four">
                <div class="type">
                        <h3 class="typing">List of all faculties:</h3>
                </div>

                <div style="overflow-x: auto;" class="col- col-sm- col-md- col-lg- col-xl-8 container justify-content-center main_div">


                        <table class="main_table">

                                <?php
                                $query = "SELECT * from reg_details";
                                $result = mysqli_query($db_conn, $query);



                                while ($data = mysqli_fetch_assoc($result)) {

                                        $prefix = $data['prefix'];
                                        $name = $data['name'];
                                        $generated_name = $data['name'];
                                        $generated_name .= ".php";


                                        $email = $data['email'];
                                        $position = $data['position'];
                                        $qual = $data['qual'];
                                        $domain = $data['domain'];
                                        $exp_year = $data['exp_year'];

                                ?>

                                        <tr>
                                                <td rowspan="8">
                                                        <img src="./uploads/<?php echo $data['profile_photo']; ?>" class="faculty_photo">
                                                </td>

                                                <td class="col-">
                                                        <label class="faculty_name">
                                                                <h2><?php echo "<a href='$generated_name'>$prefix $name</a>" ?></h2>
                                                        </label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                        </tr>
                                        <tr>
                                                <td><label class="faculty_td"> <?php echo $email ?></td>
                                        </tr>
                                        <tr>
                                                <td><label class="faculty_td"><b>Designation:</b> <?php echo $position ?></td>
                                        </tr>
                                        <tr>
                                                <td class="faculty_td"><b>Qualification:</b> <?php echo $qual ?></td>
                                        </tr>
                                        <tr>
                                                <td class="faculty_td"><b>Domain:</b></label> <?php echo $domain ?></td>
                                        </tr>
                                        <tr>
                                                <td label class="faculty_td"><b>Experience:</b></label> <?php echo $exp_year ?> Years</td>
                                        </tr>
                                        <tr style="height:3vh;"></tr>



                                <?php

                                        $file = fopen($generated_name, "w");


                                        $sql22 = "SELECT SrNo FROM reg_details WHERE name = '$name'";
                                        $result22 = mysqli_query($db_conn, $sql22);

                                        if (mysqli_num_rows($result22) > 0)
                                                while ($rowData = mysqli_fetch_array($result22)) {
                                                        $p_id = $rowData["SrNo"];
                                                }

                                        $q = mysqli_query($db_conn, "SELECT * FROM reg_details where name = '$name'");

                                        while ($row = mysqli_fetch_assoc($q)) {

                                                $content = "<html><head><title>" . $row['prefix'] . $row['name'] .
                                                        "</title>
                                                        <head>
                                                
                <link rel='stylesheet' href='./css/faculties.css' type='text/css'>
                </head>               
                
                <body>
                        
                        <div class='header'>
                                <img src='./image/ict logo black.png' class='logo_img'>
                        </div>
                        
                        <div class ='external_div'>
                        <div class='more_details'>
                        <div class='header2'>
                                <img src='./image/mulogo.png' class='mulogo'>
                              
                        </div>
                        
                        <div class ='f_image2'><img class='faculty_photo' src='./uploads/" . $row['profile_photo'] . "'></div>
                        <div class ='details'>
                        <p> <b>Name:</b>&nbsp;" . $row['name'] . "</p>" .
                                                        "<p> <b>Email:</b>&nbsp;" . $row['email'] . "</p>
                        <p><b>Designantion:</b>&nbsp;" . $row['position'] . "</p>
                        <p><b>Qualification:</b>&nbsp;" . $row['qual'] . "</p>
                        <p><b>Domain:</b>&nbsp;" . $row['domain'] . "</p>
                        <p><b>Experience:</b>&nbsp;" . $row['exp_year'] . " Years</p><br>";
                                        }
                                        fwrite($file, $content);


                                        $q2 = mysqli_query($db_conn, "SELECT PMMB_of FROM pmmb where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q2)) {
                                                if ($row > 0) {

                                                        $heading_PMMB = "<p><b>Professional Membership:&nbsp;</b></p>";
                                                        fwrite($file, $heading_PMMB);

                                                        $q2 = mysqli_query($db_conn, "SELECT PMMB_of FROM pmmb where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q2)) {
                                                                $content2 = "<ul><li>" . $raw['PMMB_of'] . "</li></ul></p>";
                                                                fwrite($file, $content2);
                                                        };
                                                };
                                        };

                                        $q3 = mysqli_query($db_conn, "SELECT title,description FROM publications where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q3)) {
                                                if ($row > 0) {
                                                        $heading_publications = "<br><p><b>Publications:&nbsp;</b></p>";
                                                        fwrite($file, $heading_publications);

                                                        $q3 = mysqli_query($db_conn, "SELECT title,description FROM publications where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q3)) {
                                                                $content3 = "<p><ul><li>" . $raw['title'] . "-" . $raw['description'] . "</li></ul></p>";
                                                                fwrite($file, $content3);
                                                        };
                                                };
                                        };


                                        $q4 = mysqli_query($db_conn, "SELECT project_name,description FROM project where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q4)) {
                                                if ($row > 0) {
                                                        $heading_projects = "<br><p><b>Projects:&nbsp;</b></p>";
                                                        fwrite($file, $heading_projects);
                                                        $q4 = mysqli_query($db_conn, "SELECT project_name,description FROM project where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q4)) {

                                                                $content4 = "<p><ul><li>" . $raw['project_name'] . "<br>" . $raw['description'] . "</li></ul></p>";
                                                                fwrite($file, $content4);
                                                        }
                                                }
                                        };

                                        $q5 = mysqli_query($db_conn, "SELECT EBM_of FROM ebm where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q5)) {
                                                if ($row > 0) {
                                                        $heading_EBM = "<br><p><b>Editorial Board Member:&nbsp;</b></p>";
                                                        fwrite($file, $heading_EBM);

                                                        $q5 = mysqli_query($db_conn, "SELECT EBM_of FROM ebm where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q5)) {

                                                                if ($raw > 0) {
                                                                        $content5 = "<p><ul><li>" . $raw['EBM_of'] . "</li></ul></p>";
                                                                        fwrite($file, $content5);
                                                                }
                                                        }
                                                };
                                        };

                                        $q6 = mysqli_query($db_conn, "SELECT patent_name FROM patent where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q6)) {
                                                if ($row > 0) {
                                                        $heading_patent = "<br><p><b>Patent:&nbsp;</b></p>";
                                                        fwrite($file, $heading_patent);

                                                        $q6 = mysqli_query($db_conn, "SELECT patent_name FROM patent where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q6)) {

                                                                if ($raw > 0) {
                                                                        $content6 = "<p><ul><li>" . $raw['patent_name'] . "</li></ul></p>";
                                                                        fwrite($file, $content6);
                                                                }
                                                        }
                                                }
                                        }

                                        $q7 = mysqli_query($db_conn, "SELECT certificate_name FROM certificate where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q7)) {
                                                if ($row > 0) {
                                                        $heading_certificate = "<br><p><b>Professional Certificates:&nbsp;</b></p>";
                                                        fwrite($file, $heading_certificate);

                                                        $q7 = mysqli_query($db_conn, "SELECT certificate_name FROM certificate where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q7)) {

                                                                if ($raw > 0) {
                                                                        $content7 = "<p><ul><li>" . $raw['certificate_name'] . "</li></ul></p>";
                                                                        fwrite($file, $content7);
                                                                }
                                                        }
                                                }
                                        }

                                        $q8 = mysqli_query($db_conn, "SELECT achievements FROM achievements where SrNo = '$p_id'");
                                        while ($row = mysqli_fetch_assoc($q8)) {
                                                if ($row > 0) {
                                                        $heading_achievements = "<br><p><b>Awards & Achievements:&nbsp;</b></p>";
                                                        fwrite($file, $heading_achievements);

                                                        $q8 = mysqli_query($db_conn, "SELECT achievements FROM achievements where SrNo = '$p_id'");
                                                        while ($raw = mysqli_fetch_assoc($q8)) {

                                                                if ($raw > 0) {
                                                                        $content8 = "<p><ul><li>" . $raw['achievements'] . "</li></ul></p></div></div></body></html>";
                                                                        fwrite($file, $content8);
                                                                }
                                                        }
                                                }
                                        }
                                }
                                fclose($file);


                                ?>

                        </table>
                </div>
        </div>
</body>

</html>