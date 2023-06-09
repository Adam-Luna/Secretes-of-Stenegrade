<?php
        include "nav2.php";
    $db = new PDO("mysql:host = localhost; dbname=stenegrade2", "root", "");
    $query = $db->prepare("SELECT * FROM player");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    //    $maxHp = 11;

    if (isset($_POST['-2'])){
        $dice = rand(1,20);
        $roll = $dice - 2;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

    if (isset($_POST['-1'])){
        $dice = rand(1,20);
        $roll = $dice - 1;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

    if (isset($_POST['0'])){
        $dice = rand(1,20);
        $roll = $dice;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

        if (isset($_POST['1'])){
            $dice = rand(1,20);
            $roll = $dice + 1;
            echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
        }

    if (isset($_POST['2'])){
        $dice = rand(1,20);
        $roll = $dice + 2;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

    if (isset($_POST['3'])){
        $dice = rand(1,20);
        $roll = $dice + 3;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

    if (isset($_POST['4'])){
        $dice = rand(1,20);
        $roll = $dice + 4;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }

    if (isset($_POST['5'])){
        $dice = rand(1,20);
        $roll = $dice + 5;
        echo "<script type='text/javascript'>
           window.onload = function () { alert('" . $roll . " (" . $dice . ")'); } 
        </script>";
    }
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--    <div class="container-fluid bg-secondary">-->
<!--        Hey-->
<!--    </div>-->
<!--                            ABILITY SCORES-->
    <form method="post">
        <div class="bg-primary bg-opacity-10">
            <div class="container-lg bg-primary bg-opacity-10" style="min-height: 80%">
                <div class="row">
                    <?php include "sheet/ability.php" ?>
                    <div class="col border-primary text-center border mx-2 bg-white rounded" style="font-size: 13px">
                        PROFICIENCY <br><br>
                        <p style="font-size: 17px">+2</p>  BONUS
                    </div>
                    <div class="col border-primary text-center border mx-2 bg-white rounded">
                        Walking <br> 30ft. <br> SPEED
                    </div>
                    <div class="col text-center">
                        <div class="border-primary text-center border bg-white rounded" style="min-height: 50%">
                            <div class="border border-primary rounded-circle"style="min-height: 75%; max-width: 100%" >
                                <p class="score text-secondary"></p>
                            </div>
                        </div>
                        INSPI
                    </div>
                    <div class="col-3 border-primary text-center border mx-2 bg-white rounded">
                        <div class="row">
                            <div class="col-3">
                                <input class="border border-primary text-success bg-white m-1" type="submit" name="heal" value="HEAL" style="min-width:100%; font-size: 11px">
                                <input class="m-1" type="number" name="number" style="max-width: 100%">
                                <input class="border border-primary text-danger bg-white m-1" type="submit" name="damage" value="DAMAGE" style="min-width:100%; font-size: 11px">
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col">CURRENT</div>
                                    <div class="col">MAX</div>
                                    <div class="col">TEMP</div>
                                </div>
                                <div class="row">
                                    <div class="col-9 text-center">
    <!--                                    --><?php
    //                                    foreach ($result as $data){
    //                                        $maxHp = $data['maxHp'];
    //                                        $hp = $data['hp'];
    //                                        echo "<p class='text-center' style='font-size: xx-large'>" . $hp . " / " . $maxHp . "</p>";
    //                                        if (isset($_POST['heal'])){
    //                                            UPDATE player
    //                                            SET hp = $_POST['number'],
    //                                            WHERE id = 1;
    //                                        }
    //
    //                                        break;
    //                                    }
    //
    //                                    ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="row">
        <!--                                                    LEFT-->
                            <!--                            SAVING THROWS-->
                            <div class="col border border-primary text-center bg-white rounded" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill h-25" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">STR</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="1" value="+1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">INT</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="3" value="+3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">DEX</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="3" value="+3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">WIS</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="-1" value="-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">CON</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="-1" value="-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        <div class="row">
                                            <div class="col">CHA</div>

                                            <div class="col border-start rounded-circle border-primary text-end" style="max-width: 50px">
                                                <input class="border-0 bg-white" type="submit" name="5" value="+5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <p class="text-center">SAVING THROWS</p>
                            </div>
                        </div>
    <!--                                                            SENSES-->
                        <div class="row">
                            <div class="col border border-primary  bg-white rounded" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        STR
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        DEX
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col border border-primary mx-2 rounded-pill" style="margin-top: 20px">
                                        CON
                                    </div>

                                </div>
                                <br>
                                <p class="text-center">SENSES</p>
                            </div>
                        </div>
    <!--                                                     PROFICIENCIES-->
                        <div class="row">
                            <div class="col border border-primary  bg-white rounded" style="margin-top: 20px">
                                <h6 class="text-secondary">ARMOR</h6>

                                <hr>
                                <h6 class="text-secondary">WEAPONS</h6>

                                <hr>
                                <h6 class="text-secondary">TOOLS</h6>

                                <hr>
                                <h6 class="text-secondary">LANGUAGES</h6>
                                <br>
                                <p class="text-center">PROFICIENCIES & LANGUAGES</p>

                            </div>
                        </div>

                    </div>
    <!--                                                        MIDDLE-->
                    <div class="col-3">
                        <!--                                    SKILLS-->
                        <div class="col border border-primary  bg-white rounded" style="margin-top: 20px">
                            <table class="table">
                                <tr>
                                    <td>PROF</td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                                <tr>
                                    <td><i class="bi bi-circle"></i></td>
                                    <td>MOD</td>
                                    <td>SKILL</td>
                                    <td>BONUS</td>
                                </tr>
                            </table>
                        </div>
                    </div>
    <!--                                                         RIGHT-->
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p style="margin-top: 20px">INITIATIVE</p>
                             <div class=" border-primary text-center border mx-2 bg-white  rounded " style="margin-top: -10px">
                                <p class="score text-secondary"></p>
                             </div>
                            </div>

                            <div class="col border-primary text-center border mx-2 bg-white h-25 rounded-top rounded-circle" style="margin-top: 20px">
                                <p class="text-secondary">ARMOR</p>
                                <h5>12</h5>
                                <p class="text-secondary">CLASS</p>
                            </div>

                            <div class="col-8 border-primary text-center border mx-2 bg-white h-25 rounded" style="margin-top: 20px; min-height: 100px">
                                <div class="row">
                                    <div class="col border-end">
                                        DEFENSES

                                    </div>
                                    <div class="col">
                                        DEFENSES
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col border-primary text-center border mx-2 bg-white  rounded" style="margin-top: 20px; min-height: 620px">
                                <div class="row">
                                    <form method="post">
                                        <div class="col"><br>
                                            <input type="submit" name="action" value="Actions">
                                        </div>
                                        <div class="col"> <br>
                                            <input type="submit" name="spells" value="Spells">
                                        </div>
                                        <div class="col"> <br>
                                            <input type="submit" name="inventory" value="Inventory">
                                        </div>
                                        <div class="col"> <br>
                                            <input type="submit" name="features" value="Features and traits">
                                        </div>
                                    </form>
                                    <?php
                                        if (isset($_POST['spells'])){
                                            include "include/spells.php";
                                        } elseif (isset($_POST['features'])){
                                            include "include/feature.php";
                                        } else {
                                            include "include/actions.php";
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </form>

</body>
