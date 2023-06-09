<?php
    include "nav.php";
    try {
        $db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
        if (isset($_POST['submit'])){
            $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
            $query = $db-> prepare("INSERT INTO feedback(text) VALUES (:text)");
            $query ->bindParam("text", $text);
            if (!empty($_POST['text'])) {
                if ($query->execute()){
                    echo "Thank you, your feedback has been sent. I will look at it shortly and apply it.";

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
                <h2 class="text-center">Feedback about the game</h2>
                <br>
                <form method="post">
                    <label for="text">Your feedback</label>
                    <textarea  class="form-control" name="text" id="text"></textarea>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
                </form>

            </div>
            <div class="col-4">
                <br><br><br><br>
                Here you can give me feedback about how I run the sessions, if you are having problems with anything including other players.
                The best part is, that it is completely anonymous. All I can see is what you wrote. If you don't care about anonymity you
                can of course just send a message via discord.
                <br>
            </div>
        </div>
        <br>
    </div>

</div>
<?php include "footer.php"; ?>
</body>
