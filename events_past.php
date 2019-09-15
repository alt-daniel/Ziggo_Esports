<?php
include_once 'header.php';
?>

<style>
<?php
        include 'css/events.css';
     ?>

</style>

<div class="page-header" style="color:orange">
    <h1 class="page_title">Evenementen</h1>
    <!-- Geef hier de pagina titel weer -->
</div>
<p class="lead">Hier kan je afgelopen evenementen bekijken.</p>
<p class="lead">Op dit moment ondersteunen we 3 games. Overwatch, League of Legends, en Dota 2.</p>
<!-- Geef hier de subtekst -->

<!-- hier kan al je content erin -->
<div class="container-fluid">

    <div id='buttons' class="btn-group d-flex" role="group" style="margin-bottom: 10px">
        <a href="events_upcoming.php" class="btn btn-info w-100" role="button"
           style="background-color: rgb(96, 96,96) !important;">Aankomende matches</a>
        <a href="events_running.php" class="btn btn-secondary w-100" role="button"
           style="background-color: rgb(81, 81, 81) !important;">Nu bezig</a>
    </div>
    <hr/>

    <h4 class="filter_desc">Klik om op games te filteren.</h4>
    <div id='buttons_filter' class="btn-group d-flex" role="group" style="margin-bottom: 10px">
        <button type="button" class="btn btn-info w-100" onclick="showAll()" style="background-color: #1498ad">Alles</button>
        <button id="league_filter_big" type="button" class="btn btn-info w-100" onclick="showLol()">League of
            Legends
        </button>
        <button id="league_filter_small" type="button" class="btn btn-info w-100" onclick="showLol()">LoL
        </button>
        <button type="button" class="btn btn-info w-100" onclick="showOw()" style="background-color:#1498ad">Overwatch</button>
        <button type="button" class="btn btn-info w-100" onclick="showDota2()">Dota 2</button>
    </div>

    <div id="matches" class=" row justify-content-center text-center text-lg-center"></div>

    <div class="alert alert-warning alert-dismissible fade show" id="alert-template"
         style="display: none; margin-top: 20px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sorry!</strong> Er zijn hier momenteel geen matches beschikbaar.
    </div>
</div>

</div>
<!-- Eind van je content -->
</main>
<script>
    createRequest('matches/past');
</script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/eventfilter.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>


</body>

</html>
