<?php
include_once 'header.php'
?>

<style>
    <?php
      include_once 'css/games_details.css';
      include 'css/events.css';
    ?>
</style>

<div class="page-header" style="color:orange">
    <h1 class="page_title">League of Legends</h1>
    <!-- Geef hier de pagina titel weer -->
</div>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Taal
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item"  onclick="taalEN()" href="#">Engels</a>
        <a class="dropdown-item" onclick="taalNL()" href="#">Nederlands</a>

    </div>



</div>
<!-- hier kan al je content erin -->
<div class="container-fluid">
    <div class="card text-xs-left">
        <div id="box-gray">
            <img class="card-img-top" src="img/games/league_header.jpg" alt="Card image">


            <button id="info_button" type="button" data-toggle="collapse" href="#collapse" role="button"
                    aria-expanded="false" aria-controls="collapseExample" class="btn btn-default navbar-btn pull-left">
                <span class="fas fa-info-circle"></span>
            </button>
            <div class="collapse" id="collapse">
                <div class="card card-body">
                    League of Legends is a fast-paced, competitive online game that blends the speed and
                    intensity of an RTS with RPG elements. Two teams of powerful champions, each with a unique design
                    and
                    playstyle, battle head-to-head across multiple battlefields
                    and game modes. With an ever-expanding roster of champions, frequent updates and a thriving
                    tournament
                    scene, League of Legends offers endless replayability for players of every skill level
                </div>
            </div>
        </div>

        <div id="streams" role="tabpanel" class="container-fluid" style="padding-top: 20px">

            <h2 id="event_title" class="container_title">Events</h2>
            <script>
                createRequest('lol/matches/upcoming', 3);
            </script>
            <div id="matches" class=" row justify-content-center text-center text-lg-center"></div>
        </div>
        <hr/>

        <h2 class="container_title">Streams</h2>
        <div id="livestreams" class=" row justify-content-center text-center text-lg-center"></div>
    </div>
</div>
</div>
</div>
<!-- Eind van je content -->

</main>
</div>
</div>

<script>
    setTimeout(title_hide, 500);
    function title_hide() {
        if (document.getElementById('matches').children.length == 0) {
            document.getElementById("event_title").style.display = "none";
        }
    }
</script>

<!-- Core scripts
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/league.js"></script>
</body>

</html>
