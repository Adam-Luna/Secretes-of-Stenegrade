<?php
include "nav.php";
if (isset($_POST['new'])) {
    header('location: newItem.php');
}
?>
<body>
    <div class="bg-primary bg-opacity-10">
        <div class="container-lg bg-primary bg-opacity-10 " style="min-height: 62%">
            <br>
            <form method="post">
                <select class="form-select" name="player" aria-label="Default select example">
                    <option selected>Who are you?</option>
                    <option value="oscar">Kyselor</option>
                    <option value="astra">Astra</option>
                    <option value="larkin">Larkin</option>
                    <option value="fizzle">Fizzle</option>
                    <option value="Alric">Alric</option>
                </select>
                <input class="btn btn-primary" type="submit" name="submit" value="See my items">
                <input class="btn btn-primary" type="submit" name="new" value="Add an item">
            </form>
            <br><br>
            <div class="row">

                <?php
                if (isset($_POST['submit'])) {

    //                var_dump($_POST);
                    $who = $_POST['player'];
                    $db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
                    $query = $db->prepare("SELECT * FROM oscar WHERE player = '$who'");
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $data) {
                        echo "<div class='col'>";
                        echo "<a href='itemDetail.php?id=" . $data['id'] . "'>";
                        echo "<div class='card bg-primary bg-opacity-25' style='max-width: 150px; min-width: 150px; margin-bottom: 50px'>";
                        echo "<img class='img-fluid img-thumbnail bg-primary bg-opacity-10' style ='max-height:150px;' src='../" .$data['img'] ."'>";
                        echo "<div class='card-body'>";
                        echo $data['name'];
                        echo "    </div>";
                        echo "</div></a>";
                        echo "</div>";
                    }
                }


                ?>
            </div>
            <br>
        </div>

    </div>
    <?php include "footer.php"; ?>
</body>