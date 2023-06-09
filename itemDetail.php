<?php
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM oscar WHERE id=" .$_GET['id']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%; " >
        <div class="row">
            <div class="col-8 text-primary text-center ">
                <br><br><br>
                <?php

                try {

                    foreach ($result as $data) {

                        echo "<br><b>" . $data['name'] . "</b>";
                        echo "<hr>";
                        echo "Rarity: " . $data['rarity'] . ",   Type: " . $data['type'];
                        if ($data['attune'] === 1){
                            echo ", (Requires attunement)";
                        }
                        echo "<hr>";
                        echo $data['description'];
                    }
                } catch (PDOException $e) {
                    die("ERROR!: " . $e->getMessage());
                }
                ?>
            </div>
            <div class="col-4">
                <br>
                <?php
                echo "<img class='img-fluid' src='../" . $data['img'] ."'>";
                ?>

                <br>
            </div>

        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>