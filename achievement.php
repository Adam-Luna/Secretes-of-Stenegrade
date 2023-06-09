<?php
session_start();
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM achievement WHERE completed > 0");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%">
        <br>
        <h1 class="text-center">Completed achievements</h1>
        <br>
        <div class="row">

            <?php
                foreach ($result as $data) {
                    echo "<div class='col'>";
                    echo "<a class='nav-link' href='detailAchievement.php?id=" . $data['id'] . "'>";
                    echo "<div class='card bg-primary bg-opacity-25 ' style='max-width: 200px; min-width: 200px; margin-bottom: 50px'>";
                    echo "<div class='card-body text-dark text-center' style='font-size: 14px; text-decoration: none'>";
                    echo "<hr>";
                    echo $data['name'] . "<br>";
                    echo "<hr>";
//                    echo $data['xp'] . " XP";
                    $xp[$data['id']] = $data['xp'];
                    echo "    </div>";
                    echo "</div></a>";
                    echo "</div>";
                }
                $total = array_sum($xp);
//                echo $total;
                $_SESSION['xp'] = $total;
            ?>
        </div>

        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>

