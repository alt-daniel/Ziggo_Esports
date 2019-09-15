<?php
include_once 'header.php';
?>

<style>
    <?php
        include 'css/events.css';
     ?>
</style>

<div class="page-header" style="color:orange">
    <h1 id="titel" class="page_title">Match</h1>
    <!-- Geef hier de pagina titel weer -->
</div>
<p class="lead">Bekijk hier gedetailleerde match informatie.</p>
<!-- Geef hier de subtekst -->

<!-- hier kan al je content erin -->
<hr/>
<div id="match_id" class="container-fluid justify-content-center text-center text-lg-center">
    <button id="back_button" type="button" onclick="goBack()" class="btn btn-default navbar-btn pull-left"
            style="margin-left: 3px; color: whitesmoke; background-color: gray">
        <span class="fas fa-caret-left"></span>
    </button>
</div>

<!-- Eind van je content -->
</main>

<script>
    function goBack() {
        window.history.back();
    }
</script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/match_detail.js"></script>
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
