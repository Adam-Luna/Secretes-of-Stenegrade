<?php
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM spell WHERE id=" .$_GET['id']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%; " >
        <div class="row">
            <div class="col-8 text-primary text-center">
                <br><br><br>
                <?php

                try {

                    foreach ($result as &$data) {

                        echo "<br><b>" . $data['name'] . "</b>";

                        echo "<br><br>" . $data['info'];
                    }
                } catch (PDOException $e) {
                    die("ERROR!: " . $e->getMessage());
                }
                ?>
            </div>
            <div class="col-4">
                <br>
                <?php
                foreach ($result as &$data) {

                    echo "<br><br>Spell level: " . $data['level'];
                    echo "<br> Casting Time: " . $data['time'];
                    echo "<br> Range: " . $data['range'];
                    echo "<br> Duration: " . $data['duration'];
                    echo "<hr><br> TLDR: " . $data['snippet'];
                }
                ?>

                <br>
            </div>

        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>