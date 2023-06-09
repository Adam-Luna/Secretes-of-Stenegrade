<?php
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM achievement WHERE id=" .$_GET['id']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%; " >
        <div class="row">
            <div class="col text-primary text-center ">
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
                <br><br><br><br><br><br>
                <button class="btn-primary" onclick="window.location.href='achievement.php'">back</button>
            </div>


        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>

