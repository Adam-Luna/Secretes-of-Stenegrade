<?php
session_start();
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM monster WHERE number > 0 ORDER BY number desc ");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%">
        <br><br>
        <div class="row">

            <?php
            foreach ($result as $data) {
                $color = "danger";
                if ($data['number'] == 0){
                    $color = "success";
                };
                echo "<div class='col'>";
                echo "<a href='detailKill.php?id=" . $data['id'] . "'>";
                echo "<div class='card bg-" . $color . "' style='max-width: 150px; min-width: 150px; margin-bottom: 50px; text-decoration: none'>";
                echo "<img class='img-fluid img-thumbnail bg-" . $color . " ' style ='max-height:150px;' src='../" .$data['img'] ."'>";
                echo "<div class='card-body' style='font-size: 15px; text-decoration: none'></a>";
                echo "<b>" . $data['name'] . "</b><br>";
                echo "<i class='bi bi-emoji-dizzy'></i> : " . $data['number'];
                $xp[$data['id']] = $data['xp'] * $data['number'];
//                echo "<br>XP: " . $xp[$data['id']];
                echo "    </div>";
                echo "</div> ";
                echo "</div>";
            }

            ?>
        </div>
        <div class="row">
            <div class="col">
                <?php
                foreach ($result as $data) {
                    $achievement = $_SESSION['xp'];
                    $kills = array_sum($xp);
//                    echo "XP from Achievments: " . $achievement;
//                    echo "<br> XP from kills: " . $kills;
                    $total = $kills;
//                    echo "<br> Total XP: " . $total;
                    $player = ($total / 4) + $achievement;
//                    echo "<br> XP per player: " . $player;
                    $level = match (true) {
                        $player < 300 => 1,
                        $player > 300 && $player <900 => 2,
                        $player > 900 && $player < 2700 => 3,
                        $player > 2700 && $player < 6500 => 4,
                        $player > 6500 && $player < 14000 => 5,
                        $player > 14000 && $player < 23000 => 6,
                        $player > 23000 && $player < 34000 => 7,
                        $player > 34000 && $player < 48000 => 8,
                        $player > 48000 && $player < 64000 => 9,
                        $player > 64000 && $player < 85000 => 10,
                    };
                    echo "<br> Players should be level: " . $level;
                    $next = match (true) {
                        $player < 300 => 300,
                        $player > 300 && $player <900 => 900,
                        $player > 900 && $player < 2700 => 2700,
                        $player > 2700 && $player < 6500 => 6500,
                        $player > 6500 && $player < 14000 => 14000,
                        $player > 14000 && $player < 23000 => 23000,
                        $player > 23000 && $player < 34000 => 34000,
                        $player > 34000 && $player < 48000 => 48000,
                        $player > 48000 && $player < 64000 => 64000,
                        $player > 64000 && $player < 85000 => 85000,
                    };
//                    echo "<br> Next level at: " . $next . "XP";
                    break;
                }
                ?>
            </div>

        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>