<?php
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM monster WHERE id=" .$_GET['id']);
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

                    foreach ($result as &$data) {

                        echo "<br><b>" . $data['name'] . "</b>";
//                        echo "<br><br> Can be found in " . $data['location'];
                        echo "<br><br>" . $data['number'];



                    }
                } catch (PDOException $e) {
                    die("ERROR!: " . $e->getMessage());
                }
                ?>
            </div>
            <div class="col-4">
                <br>
                <?php
                echo "<img class='img-fluid rounded' src='../" . $data['img'] ."'>";
                ?>

                <br>
            </div>

        </div>
        <div class="row">

            <div class="col text-center">
                <br>
                <button class="btn-primary" onclick="window.location.href='kills.php'">back</button>
            </div>

        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>
