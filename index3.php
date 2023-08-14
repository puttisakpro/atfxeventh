<?php

$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "atfx";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
    header("location:error.php");
    exit();
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_sql = "select * from nameeven  ";
if (isset($_GET['id'])) {
    $str_sql .= "where ID =" . $_GET['id'];
}
$obj_rs = mysqli_query($obj_con, $str_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="">

        <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>

            <div class="">
                <img class="" src="images/products/<?= $obj_row['pic'] ?>" />
                <h3> <?= $obj_row['place'] ?>"</h3>
                <a href="#">คลิก</a>

            </div>

        <?php } ?>
    </div>
</body>

</html>