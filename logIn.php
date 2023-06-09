<?php

    if (isset($_POST['submit'])) {
        if ($_POST['name'] === "Edward" && $_POST['password'] === "Julee") {
            header("location: dm/index.php");
        }
    }
    include "nav.php";
?>
<body>
    <div class="bg-primary bg-opacity-10">
        <div class="container-lg bg-primary bg-opacity-10" style="min-height: 62%">
            <div class="row">
                <div class="col text-primary">
                    <br><br><br><br>
                    <h2 class="text-center">Log in to the dm account</h2>
                    <br>
                    <form method="post" class="text-center">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" name="name" id="name">
                        <br><br>
                        <label for="text">Password</label>
                        <br>
                        <input type="password" name="password" id="text"></input>
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
                    </form>
                    <br><br>
                </div>
<!--                <div class="col-4">-->
<!--                    <br><br><br><br>-->
<!--                    Here you can give me suggestions for this website. Suggestions can be but are not limited to: <br>-->
<!--                    Adding new content. <br>-->
<!--                    Removing useless content. <br>-->
<!--                    Changing something.<br>-->
<!--                    Stop wasting my time with this website.<br>-->
<!---->
<!--                    <br>-->
<!--                </div>-->
            </div>
            <br>
        </div>

    </div>
    <?php include "footer.php"; ?>
</body>