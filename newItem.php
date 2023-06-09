<?php
include "nav.php";
try {
    $db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
    if (isset($_POST['submit'])){
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
        $player = $_POST['player'];
        $rarity = $_POST['rarity'];

        $query = $db-> prepare("INSERT INTO oscar(name, player, rarity, type, description) VALUES (:name, :player, :rarity, :type, :description)");
        $query ->bindParam("player", $player);
        $query ->bindParam("name", $name);
        $query ->bindParam("rarity", $rarity);
        $query ->bindParam("description", $description);
        $query ->bindParam("type", $type);

        if (!empty($_POST['description'])) {
            if ($query->execute()){
                echo "";

            } else {
                echo "Something went wrong, try refreshing the page";
            }
            echo "<br>";
        }
    }

} catch (PDOException $e) {
    die("error!:" . $e->getMessage());
}

?>

<body>
<div class="bg-primary bg-opacity-10">
    <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%">
        <div class="row">
            <div class="col-8 text-primary">
                <br>
                <h2 class="text-center">Add an Item</h2>
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
                    <label for="name">Name of the item</label>
                    <br>
                    <input type="text" name="name" id="name">
                    <br>
                    <label for="rarity">Rarity</label>
                    <br>
                    <select class="form-select" name="rarity" aria-label="Default select example">
                        <option value="common" >Common</option>
                        <option value="uncommon">Uncommon</option>
                        <option value="rare">Rare</option>
                        <option value="very rare">Very rare</option>
                        <option value="legendary">Legendary</option>
                    </select>
                    <label for="name">Type</label>
                    <br>
                    <input type="text" name="type" id="name">
                    <br>
                    <label for="text">Description</label>
                    <textarea  class="form-control" name="description" id="text"></textarea>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
                </form>

            </div>
            <div class="col-4">
                <br><br><br><br>


                <br>
            </div>
        </div>

    </div>

</div>
<?php include "footer.php"; ?>
</body>