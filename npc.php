<?php
include "nav.php";
$db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
$query = $db->prepare("SELECT * FROM npc");
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
                    echo "<div class='col text-center'>";
                    echo "<a href='detailNpc.php?id=" . $data['id'] . "'>";
                    echo "<div class='card bg-primary bg-opacity-25 ' style='max-width: 150px; min-width: 150px; margin-bottom: 50px '>";
                    echo "<img class='img-fluid img-thumbnail bg-primary bg-opacity-10' style ='max-height:150px;' src='../" .$data['img'] ."'>";
                    echo "<div class='card-body'>";
                    echo $data['name'];
                    echo "    </div>";
                    echo "</div></a>";
                echo "</div>";
                }

            ?>
        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>

