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

$limit = 6;
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$offset = ($page - 1) * $limit;



$str_sql = "select * from nameeven ORDER BY day DESC LIMIT " . $limit . " offset " . $offset;


$obj_rs = mysqli_query($obj_con, $str_sql);
if (isset($_GET['id'])) {
    $str_sql .= "where ID =" . $_GET['id'];
}

$str_sql2 = "select * from pic";
$obj_rs2 = mysqli_query($obj_con, $str_sql2);

$str_sql3 = "SELECT COUNT(*) cc  FROM `nameeven`;";
$obj_rs3 = mysqli_query($obj_con, $str_sql3);


?>


<!DOCTYPE html>
<html>

<head>
    <title>ATFXeventhai</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><b>ATFX</b>eventhai</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#projects" class="w3-bar-item w3-button">Seminar</a>
                <a href="#about" class="w3-bar-item w3-button">Even</a>
                <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="pic/1.jpg" alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>ATFX</b></span> <span class="w3-hide-small w3-text-light-grey">eventhai</span></h1>
        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Seminar</h3>
        </div>


        <div class="w3-row-padding">

            <?php while ($obj_row = mysqli_fetch_array($obj_rs2)) { ?>

                <div class="pic2">
                    <img class="pic5 clear" src="picseminar/<?= $obj_row['pic'] ?>" />


                </div>

            <?php } ?>
        </div>


        <!-- About Section -->
        <div class="w3-container w3-padding-32" id="about">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Even</h3>

        </div>

        <div class="w3-row-padding ">


            <div class="w3-row-padding ">


                <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>

                    <div class="pic4">
                        <img class="pic5 clear" src="piceven/products/<?= $obj_row['pic'] ?>" />
                        <h3> <?= $obj_row['section'] ?>"</h3>
                        <p> <?= $obj_row['details'] ?>"</p>
                        <a href="./index2.php?id=<?= $obj_row['ID'] ?>">Details</a>

                    </div>



                <?php } ?>
            </div>
            <div class=" border2 b22">

                <?php while ($obj_row = mysqli_fetch_array($obj_rs3)) {
                    
                    $i = 0;
                    for ($x = 1; $x <= $obj_row['cc'] / 6; $x++) {
                        echo '<a href="http://localhost/atfx2/index4.php?page=' . $x . '" class="b22 mm22">' . $x . '</a>';
                        $i = $x;
                    }
                  
                    if ($obj_row['cc']  % 6 > 0) {
                        $i++;
                        echo '<a href="http://localhost/atfx2/index4.php?page=' . $i . '" class="b22 mm22">' . $i . '</a>';
                    }
                } ?>

                
                <a href="http://localhost/atfx2/index4.php?page=1" class="b22">1</a>
                <a href="http://localhost/atfx2/index4.php?page=2" class="b22">2</a>
                <a href="http://localhost/atfx2/index4.php?page=3" class="b22">3</a>
                <a href="#" class="b22">4</a>
                <a href="#" class="b22">5</a>
                <a href="#" class="b22">6</a> 

            </div>
        </div>


        <!-- End page content -->
    </div>

    <div class=" w3-container w3-padding-32" id="contact">

        <div class="fle">
            <h1>
            </h1>
            <p></p>
        </div>
        <div class="w3-center w3-black w3-padding-16">
            <h1 class="www"> ช่องทางติดต่อ
            </h1>
            <br>
            <img src="icon/724664.png" style="height: 30px;">
            <a href="" class="b22"> โทร 02-2154-2249</a>
            <br>

            <br>

            <img src="icon/facebook.png" style="height: 30px;"> <a href="#" style="text-decoration: none;"> facebook</a>
            <br>
            <br>
            <img src="icon/youtube.png" style="height: 30px;"> <a href="#" style="text-decoration: none;"> Youtube</a>
            <br>
            <br>
            <img src="icon/line.png" style="height: 30px;"><a href="" style="text-decoration: none;">
                Line</a>
        </div>
    </div>

</body>

</html>