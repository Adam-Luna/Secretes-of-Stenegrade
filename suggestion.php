<?php
include "nav.php";
try {
    $db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
    if (isset($_POST['submit'])){
        $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $query = $db-> prepare("INSERT INTO suggestion(name,text) VALUES (:name, :text)");
        $query ->bindParam("text", $text);
        $query ->bindParam("name", $name);
        if (!empty($_POST['text'])) {
            if ($query->execute()){
            echo "Thank you, your suggestion has been sent. I will look at it shortly and apply it.";

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
                <br><br><br><br>
                <h2 class="text-center">Suggestions for this website</h2>
                <br>
                <form method="post">
                    <label for="name">Name</label>
                    <br>
                    <input type="text" name="name" id="name">
                    <br><br>
                    <label for="text">Your suggestion:</label>
                    <textarea  class="form-control" name="text" id="text"></textarea>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
                </form>
                <br><br>
            </div>
            <div class="col-4">
                <br><br><br><br>
                Here you can give me suggestions for this website. Suggestions can be but are not limited to: <br>
                Adding new content. <br>
                Removing useless content. <br>
                Changing something.<br>
                Stop wasting my time with this website.<br>

                <br>
            </div>
        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>