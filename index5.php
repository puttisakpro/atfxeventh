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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="index4.php" class="w3-bar-item w3-button"><b>ATFX</b>eventhai</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#projects" class="w3-bar-item w3-button">Projects</a>
                <a href="#about" class="w3-bar-item w3-button">About</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>

    <div class="ccc">

        <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>

            <div class="">
                <img class="pic5 ma10" src="piceven/products/<?= $obj_row['pic'] ?>" />
                <h3> <?= $obj_row['section'] ?>"</h3>
                <p> <?= $obj_row['details'] ?>"</p>
                <a href="#"></a>
                <div class="w3-container w3-padding-32 " id="contact">
                    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16 ">ลงทะเบียน</h3>

                    <form  method="post" action="./aadd.php" target="_blank">
                        <input class="w3-input w3-section w3-border" type="text" placeholder="ชื่อ" required name="fname">
                        <input class="w3-input w3-section w3-border" type="text" placeholder="นามสกุล" required name="lname">
                        <input class="w3-input w3-section w3-border" type="text" placeholder="เบอร์โทร" required name="phonenumber">
                        <input class="w3-input w3-section w3-border" type="text" placeholder="IDline" required name="IDline">
                        <input class="w3-input w3-section w3-border" type="text" placeholder="อาชีพ" required name="occupation">
                        <input class="" type="radio" placeholder="Comment" required name="exp">มือใหม่ยังไม่มีประสบการณ์
                        <br>
                        <input class="" type="radio" placeholder="Comment" required name="exp">มีประสบการณ์ 1-3 เดือน
                        <br>
                        <input class="" type="radio" placeholder="Comment" required name="exp">มีประสบการณ์ 6-12เดือน
                        <br>
                        <input class="" type="radio" placeholder="Comment" required name="exp">มีประสบการณ์มากกว่า 1 ปี
                        <br>
                        <button class="w3-button w3-black w3-section www10" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                        </button>
                    </form>
                </div>

            </div>

        <?php } ?>
    </div>


    
</body>

</html>