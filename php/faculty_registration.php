<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
        <title>Faculty Registration</title>
        <script src="../js/jquery-3.6.4.js"></script>

        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../css/new96.css">
        <script src="../js/registration1.js"> </script>

        <script>
                $(document).ready(function() {
                        var ceritificate_i = 1;
                        $('#add_certificate').click(function() {
                                ceritificate_i++;
                                $('#certificate_field').append('<tr id="row' + ceritificate_i + '"><td></td><td style="width: 60%;"><input type="text" name="certificate_name[]" placeholder="" class="input" /></td><td><select required class="select_100" name="academic_years_certificate[]"><option value="none" selected disabled hidden>Select Academic Years </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + ceritificate_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var publication_i = 1;
                        $('#add_publication').click(function() {
                                publication_i++;
                                $('#publication_field').append('<tr></tr><tr></tr><tr id="row' + publication_i + '"><td><label class="label">Title</label></td><td style="width: 60%;"><input type="text" name="title[]" placeholder="" class="input" /></td><td><select class="select_100" name="academic_years_publication[]"><option value="none" selected disabled hidden>Select Academic Years </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + publication_i + '" class="input btn_remove">Delete</button></td></tr><tr><td><label class="label"></label></td><td colspan="4"> <textarea name="description_publication[]" class="textarea btn_remove" id="row' + publication_i + '" autocomplete="off"></textarea></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });


                $(document).ready(function() {
                        var EBM_i = 1;
                        $('#add_EBM').click(function() {
                                EBM_i++;
                                $('#EBM_field').append('<tr id="row' + EBM_i + '"><td></td><td style="width: 60%;"><input type="text" name="ebm[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + EBM_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var PMMB_i = 1;
                        $('#add_PMMB').click(function() {
                                PMMB_i++;
                                $('#PMMB_field').append('<tr id="row' + PMMB_i + '"><td></td><td style="width: 60%;"><input type="text" name="PMMB[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + PMMB_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var project_i = 1;
                        $('#add_project').click(function() {
                                project_i++;
                                $('#project_field').append('<tr></tr><tr></tr><tr id="row' + project_i + '"><td><label class="label">Project</label></td><td style="width: 60%;"><input type="text" name="project[]" placeholder="" class="input" /></td><td><select class="select_100" name="academic_years_project[]"><option value="none" selected disabled hidden>Select Academic Years </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + project_i + '" class="input btn_remove">Delete</button></td></tr><tr><td><label class="label"></label></td><td colspan="4"> <textarea name="description_project[]" class="textarea" id="row' + project_i + '"autocomplete="off"></textarea></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var reviewer_i = 1;
                        $('#add_reviewer').click(function() {
                                reviewer_i++;
                                $('#reviewer_field').append('<tr id="row' + reviewer_i + '"><td></td><td style="width: 60%;"><input type="text" name="reviewer[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + reviewer_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });


                $(document).ready(function() {
                        var event_d_i = 1;
                        $('#add_event_d').click(function() {
                                event_d_i++;
                                $('#event_d_field').append('<tr id="row' + event_d_i + '"><td></td><td style="width: 60%;"><input type="text" name="event_d[]" placeholder="" class="input" style="width:100vh;"></td><td><select required class="select_100" name="event_year_d[]"><option value="none" selected disabled hidden>Select Year </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + event_d_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var event_o_i = 1;
                        $('#add_event_o').click(function() {
                                event_o_i++;
                                $('#event_o_field').append('<tr id="row' + event_o_i + '"><td></td><td style="width: 60%;"><input type="text" name="event_o[]" placeholder="" class="input" style="width:100vh;"></td><td><select required class="select_100" name="event_year_o[]"><option value="none" selected disabled hidden>Select Year </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + event_o_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var event_p_i = 1;
                        $('#add_event_p').click(function() {
                                event_p_i++;
                                $('#event_p_field').append('<tr id="row' + event_p_i + '"><td></td><td style="width: 60%;"><input type="text" name="event_p[]" placeholder="" class="input" style="width:100vh;"></td><td><select required class="select_100" name="event_year_p[]"><option value="none" selected disabled hidden>Select Year </option><option value="2016-2017">2016-2017</option><option value="2017-2018">2017-2018</option><option value="2018-2019">2018-2019</option><option value="2020-2021">2020-2021</option><option value="2021-2022">2021-2022</option><option value="2022-2023">2022-2023</option><option value="2023-2024">2023-2024</option></td><td></td><td><button type="button" name="remove" id="' + event_p_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var patent_i = 1;
                        $('#add_patent').click(function() {
                                patent_i++;
                                $('#patent_field').append('<tr id="row' + patent_i + '"><td></td><td style="width: 60%;"><input type="text" name="patent[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + patent_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });

                $(document).ready(function() {
                        var achievement_i = 1;
                        $('#add_achievement').click(function() {
                                achievement_i++;
                                $('#achievements_field').append('<tr id="row' + achievement_i + '"><td></td><td style="width: 60%;"><input type="text" name="achievements[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + achievement_i + '" class="input btn_remove">Delete</button></td></tr>');
                        });

                        $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $('#row' + button_id + '').remove();
                        });
                });
        </script>

<body>
        <div class="sticky-top container-fluid" style="background-color:rgb(1,167,190);">
                <div class="row justify-content-center">
                        <img class="col- col-sm- col-md-5 col-lg-4 col-xl-4     " src="../image/ict logo black.png" style="width:100%;">
                </div>
        </div>

        <div class="main">

                <form method="post" action="../connection/fac_regconn.php" enctype="multipart/form-data">
                        <fieldset>
                                <legend>Personal Details</legend>


                                <div class="table-responsive">

                                        <table class="table_custom">

                                                <tr>
                                                        <td>
                                                                <label for="name" class="label" style="text-align:center;">Name *</label>
                                                        </td>
                                                        <td>
                                                                <select required class="select_101" name="prefix">

                                                                        <option value="Prof.">Prof.</option>
                                                                        <option value="Dr.">Dr.
                                                                        </option>
                                                                        <option value="Mr.">Mr.</option>
                                                                        <option value="Ms.">Ms.
                                                                        </option>
                                                                        <option value="Mrs.">Mrs.
                                                                        </option>
                                                                </select>
                                                        </td>
                                                        <td style="width: 25em;">
                                                                <input type="text" id="name" name="name" class="name_input" required autocomplete="off" style="width:100%">
                                                        </td>
                                                        <td><label for="position" class="label" style="text-align:center; width:20vh">Position *</td>
                                                        <td>
                                                                <select required class="select_100" name="Position">
                                                                        <option value="none" selected disabled hidden>Select an
                                                                                Option</option>
                                                                        <option value="Lab Assistant">Lab Assistant</option>
                                                                        <option value="Teaching Assistant">Teaching Assistant
                                                                        </option>
                                                                        <option value="Lecturer">Lecturer</option>
                                                                        <option value="Assistant Professor">Assistant Professor
                                                                        </option>
                                                                        <option value="Assoiate Professor">Assoiate Professor
                                                                        </option>
                                                                        <option value="Professor">Professor</option>
                                                                        <option value="Head Of Department">Head Of Department
                                                                        </option>

                                                                </select>
                                                        </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                                <label for="email" class="label" style="text-align:center; width:fit-content;">Email *</label>
                                                        </td>
                                                        <td colspan="2">
                                                                <input type="email" id="email" name="email" class="input" required autocomplete="off">
                                                        </td>

                                                        <td><label class="label" style="text-align:center; width:20vh">Qualification *</label></td>
                                                        <td>
                                                                <input style="width:50vh;" type="text" id="Qualfication" name="Qualification" class="input" required autocomplete="off">
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td><label class="label" style="text-align:center;">Domain *</label></td>
                                                        <td colspan="2">
                                                                <input type="text" id="domain" name="domain" class="input" required autocomplete="off">
                                                        </td>

                                                        <td><label class="label" for="exp" style="text-align:center;width:20vh">Experience *</label></td>
                                                        <td>
                                                                <input type="number" id="experience" name="exp_year" class="input" placeholder="Years" required autocomplete="off" style="width:50%">
                                                                <!-- <input type="number" id="experience" name="experience_month" class="input" placeholder="Months"required autocomplete="off"> -->
                                                        </td>
                                                </tr>


                                                <tr>
                                                        <td><label for="profile_photo" class="label" style="text-align:center;">Profile Photo *</td>
                                                        <td colspan="2">
                                                                <label class="input_file">
                                                                        <input type="file" name="fileToUpload" id="fileToUpload" required></label>
                                                        </td>
                                                        <td></td>
                                                </tr>
                                        </table>
                                </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Professional Membership</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="PMMB_field">
                                                <tr>
                                                        <td style="width:11%">
                                                                <label for="ebm" class="label">Member of</label>
                                                        <td style="width:80%">
                                                                <input type="text" name="PMMB[]" class="input" placeholder="Example: IEE" autocomplete="off" style="width: 100vh;">
                                                        </td>
                                                        <td>
                                                                <input type="button" name="add_PMMB" id="add_PMMB" class="input" value="Add More">
                                                        </td>
                                                </tr>
                                        </table>
                                </div>
                        </fieldset>

                        <br>
                        <fieldset>
                                <legend>Professional Courses Certificate</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="certificate_field">
                                                <tr>
                                                        <td style="width:11%">
                                                                <label for="Certificate" class="label">Certificate</label>
                                                        <td style="width:auto;"><input type="text" name="certificate_name[]" placeholder="Name Of Certificate" class="input" autocomplete="off" style="width:100vh;" /></td>
                                                        <td>
                                                                <select required class="select_100" name="academic_years_certificate[]">
                                                                        <option value="none" selected disabled hidden>Select Academic Years </option>
                                                                        <option value="2016-2017">2016-2017
                                                                        </option>
                                                                        <option value="2017-2018">2017-2018</option>
                                                                        <option value="2018-2019">2018-2019</option>
                                                                        <option value="2020-2021">2020-2021</option>
                                                                        <option value="2021-2022">2021-2022</option>
                                                                        <option value="2022-2023">2022-2023</option>
                                                                        <option value="2023-2024">2023-2024</option>


                                                                </select>
                                                        </td>

                                                        <td>
                                                        <td><input type="button" name="add_certificate" id="add_certificate" class="input" value="Add More"></td>
                                                </tr>

                                        </table>
                        </fieldset>

                        <br>
                        <fieldset>
                                <legend>Publications</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="publication_field">


                                                <tr>
                                                        <td style="width: 11%;">
                                                                <label for="title" class="label">Title</label>
                                                        <td style="width:auto;"><input type="text" name="title[]" placeholder="Title Of Publication" class="input" autocomplete="off" style="width:100vh;" /></td>
                                                        <td>
                                                                <select class="select_100" name="academic_years_publication[]">
                                                                        <option value="none" selected disabled hidden>Select Academic Years </option>
                                                                        <option value="2016-2017">2016-2017
                                                                        </option>
                                                                        <option value="2017-2018">2017-2018</option>
                                                                        <option value="2018-2019">2018-2019</option>
                                                                        <option value="2020-2021">2020-2021</option>
                                                                        <option value="2021-2022">2021-2022</option>
                                                                        <option value="2022-2023">2022-2023</option>
                                                                        <option value="2023-2024">2023-2024</option>


                                                                </select>
                                                        </td>
                                                        <td>
                                                        <td><input type="button" name="add_publication" id="add_publication" class="input" value="Add More"></td>
                                                </tr>

                                                <tr>
                                                        <td><label class="label">Description<br>& Link</label>

                                                        </td>
                                                        <td colspan="4"> <textarea name="description_publication[]" placeholder="Example:

Kulkarni, S.S. and Bavarva, A.A. (2021), 'A survey on various handover technologies in 5G network using the modular handover modules', International Journal of Pervasive Computing and Communications, Vol. ahead-of-print No. ahead-of-print. https://doi.org/10.1108/IJPCC-11-2020-0205 " class="textarea" autocomplete="off"></textarea></td>

                                                </tr>
                                        </table>
                                </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Patents</legend>
                                <div class="table-responsive">

                                        <table class="table_custom" id="patent_field">
                                                <tr>
                                                        <td style="width: 11%;">
                                                                <label for="patent" class="label">Patents</label>
                                                        <td style="width: 80%;">
                                                                <input type="text" name="patent[]" class="input" placeholder="Dr.Venkatesaperumal B, Dr. Karthikeyan A, Dr. Parthiban P , “ A Solar Water Pumping System”, filed, patent application no: 6034/CHE/2015,07/11/2015" autocomplete="off" style="width:100vh;">
                                                        </td>
                                                        <td>
                                                                <input type="button" name="add_patent" id="add_patent" class="input" value="Add More">
                                                        </td>
                                                </tr>

                                        </table>
                                </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Funded Projects</legend>
                                <div class="table-responsive">
                                        <div id="project_container_funded">
                                                <table class="table_custom" id="project_field">

                                                        <tr>
                                                                <td style="width: 11%;">
                                                                        <label for="project" class="label">Project </label>
                                                                <td style="width:60vh;">

                                                                        <input type="text" name="project[]" placeholder="Project Name" class="input" autocomplete="off" style="width:100vh;" />
                                                                </td>
                                                                <td>
                                                                        <select class="select_100" name="academic_years_project[]">
                                                                                <option value="none" selected disabled hidden>Select Academic Years </option>
                                                                                <option value="2016-2017">2016-2017
                                                                                </option>
                                                                                <option value="2017-2018">2017-2018</option>
                                                                                <option value="2018-2019">2018-2019</option>
                                                                                <option value="2020-2021">2020-2021</option>
                                                                                <option value="2021-2022">2021-2022</option>
                                                                                <option value="2022-2023">2022-2023</option>
                                                                                <option value="2023-2024">2023-2024</option>


                                                                        </select>
                                                                </td>
                                                                <br>
                                                                <td>
                                                                <td><input type="button" name="add_project" id="add_project" class="input" value="Add More"></td>
                                                        </tr>

                                                        <tr>
                                                                <td><label class="label">Description</label>

                                                                </td>
                                                                <td colspan="4"> <textarea name="description_project[]" placeholder="Description and Funded by whom:" class="textarea" autocomplete="off"></textarea></td>

                                                        </tr>

                                                </table>
                                        </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Editorial Board Member</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="EBM_field">
                                                <tr>
                                                        <td style="width: 11%;">
                                                                <label for="ebm" class="label">Member of</label>
                                                        <td style="width: 80%;">
                                                                <input type="text" name="ebm[]" placeholder="Example :
Editorial Board member of Journal of Electronics and Communication Systems" class="input" autocomplete="off" style="width:100vh;">
                                                        </td>
                                                        <td>
                                                                <input type="button" name="add_EBM" id="add_EBM" class="input" value="Add More">
                                                        </td>
                                                </tr>



                                        </table>
                                </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Reviewer for journals/magazines/conferences</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="reviewer_field">

                                                <tr>
                                                        <td style="width: 11%;">
                                                                <label for="ebm" class="label">Reviewer of</label>
                                                        <td style="width: 80%;"><input type="text" name="reviewer[]" style="width:100vh;" placeholder="Example: ICECCS 2014, 3rd International conference sponsored by IEEE, Bangalore section" class="input" autocomplete="off" /></td>

                                                        <td><input type="button" name="add_reviewer" id="add_reviewer" class="input" value="Add More"></td>
                                                </tr>

                                        </table>
                                </div>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Workshop/Seminar</legend>

                                <div class="table-responsive">
                                        <table class="table_custom" id="event_d_field">
                                                <tr>
                                                        <td style="width: 12%;">
                                                                <label for="WS delivered" class="label">Workshop/Seminar<br>Delivered</label>
                                                        <td style="width: 70%;">
                                                                <input type="text" name="event_d[]" placeholder="2 Days workshop on Wireless Sensor Networks sponsored by IEEE Sreyas Student Branch Communication Society" class="input" autocomplete="off" style="width:100vh;" />
                                                        </td>
                                                        <td>
                                                                <select class="select_100" name="event_year_d[]">
                                                                        <option value="none" selected disabled hidden>Select Year</option>
                                                                        <option value="2016-2017">2016-2017
                                                                        </option>
                                                                        <option value="2017-2018">2017-2018</option>
                                                                        <option value="2018-2019">2018-2019</option>
                                                                        <option value="2020-2021">2020-2021</option>
                                                                        <option value="2021-2022">2021-2022</option>
                                                                        <option value="2022-2023">2022-2023</option>
                                                                        <option value="2023-2024">2023-2024</option>


                                                                </select>
                                                        </td>
                                                        <td>
                                                        <td><input type="button" name="add_event_d" id="add_event_d" class="input" value="Add More"></td>
                                                </tr>
                                        </table>

                                        <hr>
                                        <table class="table_custom" id="event_o_field">
                                                <tr>
                                                        <td style="width: 12%;">
                                                                <label for="project" class="label">Workshop/Seminar<br>organized</label>
                                                        <td style="width: 70%;"><input type="text" name="event_o[]" placeholder="National workshop on 'Network Simulation and Design'" class="input" autocomplete="off" style="width:100vh;" /></td>
                                                        <td>
                                                                <select class="select_100" name="event_year_o[]">
                                                                        <option value="none" selected disabled hidden>Select Year</option>
                                                                        <option value="2016-2017">2016-2017
                                                                        </option>
                                                                        <option value="2017-2018">2017-2018</option>
                                                                        <option value="2018-2019">2018-2019</option>
                                                                        <option value="2020-2021">2020-2021</option>
                                                                        <option value="2021-2022">2021-2022</option>
                                                                        <option value="2022-2023">2022-2023</option>
                                                                        <option value="2023-2024">2023-2024</option>


                                                                </select>
                                                        </td>
                                                        <td>
                                                        <td><input type="button" name="add_event_o" id="add_event_o" class="input" value="Add More"></td>
                                                </tr>
                                        </table>

                                        <hr>

                                        <table class="table_custom" id="event_p_field">

                                                <tr>
                                                        <td style="width: 12%;">
                                                                <label for="project" class="label">Workshop/Seminar <br>Participated</label>
                                                        <td style="width: 70%;"><input type="text" name="event_p[]" placeholder=" Example: Workshop on Learning Experience Design 2 - 2014, organized by RK University" class="input" autocomplete="off" style="width:100vh;" /></td>
                                                        <td>
                                                                <select class="select_100" name="event_year_p[]">
                                                                        <option value="none" selected disabled hidden>Select year</option>
                                                                        <option value="2016-2017">2016-2017
                                                                        </option>
                                                                        <option value="2017-2018">2017-2018</option>
                                                                        <option value="2018-2019">2018-2019</option>
                                                                        <option value="2020-2021">2020-2021</option>
                                                                        <option value="2021-2022">2021-2022</option>
                                                                        <option value="2022-2023">2022-2023</option>
                                                                        <option value="2023-2024">2023-2024</option>


                                                                </select>
                                                        </td>
                                                        <td>
                                                        <td><input type="button" name="add_event_p" id="add_event_p" class="input" value="Add More"></td>
                                                </tr>

                                        </table>
                                </div>
                                <hr>
                        </fieldset>
                        <br>
                        <fieldset>
                                <legend>Awards/Achievements</legend>
                                <div class="table-responsive">
                                        <table class="table_custom" id="achievements_field">
                                                <tr>
                                                        <td style="width: 11%;">
                                                                <label for="achievemenets" class="label">Awards &<br>Achievements</label>
                                                        <td style="width: 80%;"> <input type="text" name="achievements[]" class="input" autocomplete="off" style="width:100vh;"></textarea></td>
                                                        <td>
                                                                <input type="button" name="add_achievement" id="add_achievement" class="input" value="Add More">
                                                        </td>
                                                </tr>

                                        </table>
                                </div>
                        </fieldset>

                        <br>
                        <button class="c-button c-button--gooey align-item-right" type="submit" name="submit" id="submit" value="submit"> Submit
                                <div class="c-button__blobs">
                                        <div></div>
                                        <div></div>
                                        <div></div>

                        </button>


                        <svg style="display: block; height: 0; width: 0;" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                        <filter id="goo">
                                                <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                                                <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                                                <feBlend in2="goo" in="SourceGraphic"></feBlend>
                                        </filter>
                                </defs>
                        </svg>
        </div>
        </form>



        </div>
        </div>

</body>

</html>