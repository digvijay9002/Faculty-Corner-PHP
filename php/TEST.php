<?php
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
<?php

$id = 1;
$pn = [];
$sql = "SELECT * from patent where SrNo = $id order by patent_id asc";
$result = mysqli_query($db_conn, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    array_push($pn, $data['patent_name']);
}
?>

<?php
if (isset($_POST['submit'])) {

    $sql1 = "Delete from patent where SrNo = $id";
    $db_conn->query($sql1);

    $patent_count = count($_POST["patent"]);
    $patent_name = $_POST["patent"];

    if ($patent_count > 0) {
        for ($i = 0; $i < $patent_count; $i++) {
            if (trim($_POST["patent"][$i] != '')) {
                $patent_entry = mysqli_query($db_conn, "INSERT INTO patent (SrNo,patent_name) VALUES('$id','$patent_name[$i]')");
            }
        }
    }
    echo "<script>window.location.replace('./TEST.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./js/jquery-3.6.4.js"></script>

    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="./css/new96.css">
    <script src="../js/registration1.js"> </script>
    <script>
        $(document).ready(function() {
            var patent_i = <?php echo count($pn); ?>;
            $('#add_patent').click(function() {
                patent_i++;
                $('#patent_field').append('<tr id="row' + patent_i + '"><td></td><td style="width: 60%;"><input type="text" name="patent[]" placeholder="" class="input" /></td><td><button type="button" name="remove" id="' + patent_i + '" class="input btn_remove">Delete</button></td></tr>');
            });

            $('#patent_field').on('click', '.btn_remove', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>

</head>

<body>
    <form action="./TEST.php" method="post">
        <fieldset>
            <legend>Patents</legend>
            <table class="table_custom" id="patent_field">
                <?php foreach ($pn as $key => $value) { ?>
                    <tr>
                        <td style="width: 11%;">
                            <label for="patent" class="label">Patents</label>
                        <td style="width: 80;">
                            <input type="text" style="width: 500;" value="<?php echo $value ?>" name="patent[]" class="input" placeholder="Dr.Venkatesaperumal B, Dr. Karthikeyan A, Dr. Parthiban P , “ A Solar Water Pumping System”, filed, patent application no: 6034/CHE/2015,07/11/2015" autocomplete="off">
                        </td>
                        <td><button type="button" name="remove" id="' + patent_i + '" class="input btn_remove">Delete</button>
                        </td>
                    </tr><?php } ?>
            </table>
            <input type="button" name="add_patent" id="add_patent" class="input" value="Add More">
        </fieldset>
        <input type="submit" value="Update" name="submit">
    </form>
</body>

</html>