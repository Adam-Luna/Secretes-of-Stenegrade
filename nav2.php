<html>
<head>
    <title>Site yet to be named</title>
    <!-- bootstrap: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!-- css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>




<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-primary bg-primary bg-opacity-10 border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Secrets of Stenegrade</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  <?php if ($active === true){
                        echo "active";
                    } ?>" aria-current="page" href="index.php">Home</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        World
                    </a>
                    <ul class="dropdown-menu bg-primary bg-opacity-10">
                        <li><a class="dropdown-item" href="history.php">History</a></li>
                        <li><a class="dropdown-item" href="#">key locations</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="map.php">Map</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($active2 === true){
                        echo "active";
                    } ?> " href="npc.php">NPCs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($active2 === true){
                        echo "active";
                    } ?> " href="kills.php">Kill sheet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($active2 === true){
                        echo "active";
                    } ?> " href="items.php">My magic items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($active2 === true){
                        echo "active";
                    } ?> " href="character.php">Character sheet (WIP)</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Suggestions
                    </a>
                    <ul class="dropdown-menu bg-primary bg-opacity-10">
                        <li><a class="dropdown-item" href="suggestion.php">Website</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="feedback.php">Game</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>








</body>
</html>
