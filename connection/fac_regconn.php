<?php
session_start();
error_reporting(0);
include('./testconn.php');

$uname = $_SESSION['name'];

$sql = "SELECT SrNo FROM logindata WHERE name = '$uname'";
$result = mysqli_query($db_conn, $sql);

if (mysqli_num_rows($result) > 0)
        while ($rowData = mysqli_fetch_array($result)) {
                $SrNo = $rowData["SrNo"];
        }


if (isset($_POST['submit'])) {

        $prefix = $_POST['prefix'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $position = $_POST['Position'];
        $Qualification = $_POST['Qualification'];
        $domain = $_POST['domain'];
        $exp_year = $_POST['exp_year'];
        $fileToUpload = $_POST['fileToUpload'];
        $filename = basename($_FILES["fileToUpload"]["name"]);


        //IMAGE UPLOAD CODE
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
        }

        // Allow certain file formats
        if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
        ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
        } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                        echo "Sorry, there was an error uploading your file.";
                }
        }

        include('./testconn.php');
        // $main_details="INSERT INTO reg_details(`SrNo`,`prefix`,`name`,`email`,`position`,`qual`,`domain`,`exp_year`,`profile_photo`) VALUES ('$SrNo','$prefix','$name','$email','$position','$Qualification','$domain','$exp_year','$filename')";
        $main_details = "INSERT INTO `reg_details`(`prefix`, `name`, `email`, `position`, `qual`, `domain`, `exp_year`, `profile_photo`) VALUES ('$prefix','$name','$email','$position','$Qualification','$domain',$exp_year,'$filename')";

        $result = mysqli_query($db_conn, $main_details);
        if (!$result) {
                echo 'There is some Error in submit the data';
                echo $main_details;
        }

        //ADD certificate to the database
        $certificate_count = count($_POST["certificate_name"]);
        //Getting post values
        $cert_name = $_POST["certificate_name"];
        $academic_years_certificate = $_POST["academic_years_certificate"];

        if ($certificate_count > 0) {
                for ($i = 0; $i < $certificate_count; $i++) {
                        if (trim($_POST["certificate_name"][$i] != '')) {
                                $certificate_entry = mysqli_query($db_conn, "INSERT INTO certificate (SrNo,certificate_name,academic_years) VALUES('$SrNo','$cert_name[$i]','$academic_years_certificate[$i]')");
                                // echo ($sql);
                        }
                }
        }
        //ADD Publications To the database

        $publication_count = count($_POST["title"]);
        //Getting post values
        $title = $_POST["title"];
        $academic_years_publication = $_POST["academic_years_publication"];
        $description_publication = $_POST["description_publication"];

        if ($publication_count > 0) {
                for ($i = 0; $i < $publication_count; $i++) {
                        if (trim($_POST["title"][$i] != '')) {
                                $publication_entry = mysqli_query($db_conn, "INSERT INTO publications (SrNo,title,academic_years,description) VALUES('$SrNo','$title[$i]','$academic_years_publication[$i]','$description_publication[$i]')");
                        }
                }
        }

        //ADD Editorial Board Member

        $EBM_count = count($_POST["ebm"]);

        $EBM_of = $_POST["ebm"];
        if ($EBM_count > 0) {
                for ($i = 0; $i < $EBM_count; $i++) {
                        if (trim($_POST["ebm"][$i] != '')) {
                                $EBM_entry = mysqli_query($db_conn, "INSERT INTO ebm (SrNo,EBM_of) VALUES('$SrNo','$EBM_of[$i]')");
                        }
                }
        }

        //ADD PMMB

        $PMMB_count = count($_POST["PMMB"]);
        $PMMB_of = $_POST["PMMB"];
        if ($PMMB_count > 0) {
                for ($i = 0; $i < $PMMB_count; $i++) {
                        if (trim($_POST["PMMB"][$i] != '')) {
                                $PMMB_entry = mysqli_query($db_conn, "INSERT INTO pmmb (SrNo,PMMB_of) VALUES('$SrNo','$PMMB_of[$i]')");
                        }
                }
        }

        //ADD Funded Project

        $project_count = count($_POST["project"]);
        $project_name = $_POST["project"];
        $academic_years_project = $_POST["academic_years_project"];
        $description_project = $_POST["description_project"];

        if ($project_count > 0) {
                for ($i = 0; $i < $project_count; $i++) {
                        if (trim($_POST["project"][$i] != '')) {
                                $project_entry = mysqli_query($db_conn, "INSERT INTO project (SrNo,project_name,academic_years,description) VALUES('$SrNo','$project_name[$i]','$academic_years_project[$i]','$description_project[$i]')");
                        }
                }
        }

        $reviewer_count = count($_POST["reviewer"]);
        $reviewer_of = $_POST["reviewer"];

        if ($reviewer_count > 0) {
                for ($i = 0; $i < $reviewer_count; $i++) {
                        if (trim($_POST["reviewer"][$i] != '')) {
                                $reviewer_entry = mysqli_query($db_conn, "INSERT INTO reviewer_data (SrNo,`reviewer_of`) VALUES('$SrNo','$reviewer_of[$i]')");
                        }
                }
        }

        //ADD patent 

        $patent_count = count($_POST["patent"]);
        $patent_name = $_POST["patent"];

        if ($patent_count > 0) {
                for ($i = 0; $i < $patent_count; $i++) {
                        if (trim($_POST["patent"][$i] != '')) {
                                $patent_entry = mysqli_query($db_conn, "INSERT INTO patent (SrNo,patent_name) VALUES('$SrNo','$patent_name[$i]')");
                        }
                }
        }

        $event_d_count = count($_POST["event_d"]);
        $delivered = $_POST["event_d"];
        $year_d = $_POST["event_year_d"];

        if ($event_d_count > 0) {
                for ($i = 0; $i < $event_d_count; $i++) {
                        if (trim($_POST["event_d"][$i] != '')) {
                                $event_d_entry = mysqli_query($db_conn, "INSERT INTO event_d (SrNo,delivered,year) VALUES('$SrNo','$delivered[$i]','$year_d[$i]')");
                        }
                }
        }



        $event_o_count = count($_POST["event_o"]);
        $organized = $_POST["event_o"];
        $year_o = $_POST["event_year_o"];

        if ($event_o_count > 0) {
                for ($i = 0; $i < $event_o_count; $i++) {
                        if (trim($_POST["event_o"][$i] != '')) {
                                $event_o_entry = mysqli_query($db_conn, "INSERT INTO event_o (SrNo,organized,year) VALUES('$SrNo','$organized[$i]','$year_o[$i]')");
                        }
                }
        }

        $event_p_count = count($_POST["event_p"]);
        $participated = $_POST["event_p"];
        $year_p = $_POST["event_year_p"];


        if ($event_p_count > 0) {
                for ($i = 0; $i < $event_p_count; $i++) {
                        if (trim($_POST["event_p"][$i] != '')) {
                                $event_p_entry = mysqli_query($db_conn, "INSERT INTO event_p(SrNo,participated,year) VALUES('$SrNo','$participated[$i]','$year_p[$i]')");
                        }
                }
        }

        $achievement_count = count($_POST["achievements"]);
        $achievements = $_POST["achievements"];

        if ($achievement_count > 0) {
                for ($i = 0; $i < $achievement_count; $i++) {
                        if (trim($_POST["achievements"][$i] != '')) {
                                $event_p_entry = mysqli_query($db_conn, "INSERT INTO achievements(SrNo,achievements) VALUES('$SrNo','$achievements[$i]')");
                        }
                }
        }
}
?>
<script>
        window.location.replace("../php/faculties.php");
</script>
<?php
// header('location: ../php/faculties.php');

?>