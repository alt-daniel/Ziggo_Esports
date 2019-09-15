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
    <h1 class="page_title">Hearthstone</h1>
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
            <img class="card-img-top" src="img/games/hearthstone_header.jpg" alt="Card image">
            <button id="info_button" type="button" data-toggle="collapse" href="#collapse" role="button"
                    aria-expanded="false" aria-controls="collapseExample" class="btn btn-default navbar-btn pull-left">
                <span class="fas fa-info-circle"></span>
            </button>
            <div class="collapse" id="collapse">
                <div class="card card-body">
                    Hearthstone: Heroes
                    of Warcraft is a free-to-play, online card game on the Microsoft Windows, Mac OS X, iOS, and Android
                    platforms that anyone can play. Players choose to play as one of nine Warcraft Classes (each represented
                    by an epic Hero),
                    and then take turns playing Cards from their customizable Decks to cast potent Spells, use heroic
                    weapons or abilities, or summon powerful Minions to crush their opponent.
                </div>
            </div>
        </div>
        <div id="streams" role="tabpanel" style="padding-top: 20px">

        </div>
        <hr/>

        <h2 class="container_title">Streams</h2>
        <div id="livestreams" class=" row justify-content-center text-center text-lg-center"></div>
    </div>
</div>
</div>
<!-- Eind van je content -->

</main>
</div>
</div>


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
<script src="js/hearthstone.js"></script>
</body>

</html>
