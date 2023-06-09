<?php
    $day = date("N");

    $countDown = match ($day) {
        '1' => 5,
        '2' => 4,
        '3' => 3,
        '4' => 2,
        '5' => 1,
        '6' => 0,
        '7' => 6,
    };

$hour = date('H:i');
//$hour = '13:43';



$start_date = new DateTime('17:00');
$since_start = $start_date->diff(new DateTime($hour));




?>
<html>
<head>
    <!-- css-->
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>
<div class="container-fluid bg-primary bg-opacity-10 border-top  ">
    <div class="row">
        <div class="col text-center text-secondary">
            <br><b>
            If you have any questions or remark requarding the site,
            <br>
            feel free to say so.
                <br></b>
            <p class="invisible">.</p>
        </div>
        <div class="col text-center text-secondary">
            <br><b>
            See you every Saturday at 5pm GMT+1
            <br>
            <?php
            if ($day == 5){
                $s = "";
            } else {
                $s = "s";
            }
            echo "So in $countDown day$s, ";
            echo $since_start->h.' hours and ';
            echo $since_start->i.' minutes';
            ?>
            <br>
            another place holder
            </b>
        </div>
    </div>
</div>
</body>
</html>