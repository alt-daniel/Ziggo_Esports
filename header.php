<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ZV eSports</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script type="text/javascript" src="js/events.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
    <link href="css/carousel.css" rel="stylesheet">
    <script src="js/search.js"></script>
</head>
<body>

<!--Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="img/ziggo_logo.png" alt="ZV eSports" style="width: 50px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><span class="fas fa-home"></span> Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="games_main.php" id="navbardrop" data-toggle="dropdown">
                    <span class="fas fa-gamepad"></span> Games
                </a>
                <div class="dropdown-menu" id="dropdownNav">
                    <a class="dropdown-item" href="games_main.php">Main</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="games-details_league.php">League of Legends</a>
                    <a class="dropdown-item" href="games-details_csgo.php">Counterstrike GO</a>
                    <a class="dropdown-item" href="games-details_dota2.php">Dota 2</a>
                    <a class="dropdown-item" href="games-details_hearthstone.php">Hearthstone</a>
                    <a class="dropdown-item" href="games-details_overwatch.php">Overwatch</a>
                    <a class="dropdown-item" href="games-details_fifa18.php">FIFA 18</a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="events_upcoming.php" id="navbardrop" data-toggle="dropdown">
                    <span class="far fa-calendar-alt"></span> Evenementen
                </a>
                <div class="dropdown-menu" id="dropdownNav">
                    <a class="dropdown-item" href="events_upcoming.php">Aankomend</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="events_running.php">Nu bezig</a>
                    <a class="dropdown-item" href="events_past.php">Afgelopen</a>

                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="live.php"><span class="fas fa-bolt"></span> Trending</a>
            </li>


            <?php
            if (isset($_SESSION['u_id'])) {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="favorite.php"><span class="fas fa-heart"></span> Favorite List</a>
                </li>
                <li>
                    <a class="nav-link" href="account.php"><span class="far fa-user"></span> Account</a>
                </li>';
            }

            ?>

        </ul>

<!--        Search bar die zoekt naar Twitch-->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" type="search" placeholder="&#x1F50D; Zoeken" aria-label="Search" onkeyup="return searchOption(event);">

        </form>

        <?php
        if (isset($_SESSION['u_id'])) {
            echo '<form class="form-inline mt-2 mt-md-0" action="includes/logout.inc.php" method="post">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" disabled style="margin-right: 1em">' . $_SESSION['u_first'] . '
      
        </button>
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="submit3">Logout</button>
    </form>';
        } else {
            echo '<form class="form-inline mt-2 mt-md-0" action="login.php">
      
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"> Login</button>
    </form>';
        }
        ?>

    </div>
</nav>
<!-- eind nav -->
