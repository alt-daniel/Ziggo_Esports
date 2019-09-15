<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 13-5-2018
 * Time: 23:32
 */

include 'header.php';

?>

<style>
    <?php
        include 'css/events.css';
     ?>
</style>

<div class="container" style="padding-top: 2em;">
    <h2 style="text-align: center; padding-bottom: 10px;">Meest bekeken</h2>
    <div class="container-fluid">
        <div id="p" class="container">

        </div>

        <div id="livestreams" class=" row justify-content-center text-center text-lg-center">


        </div>


    </div>

    <h2 style="text-align: center; padding-bottom: 10px;">Aankomende wedstrijden</h2>

    <div class="container-fluid">
        <div id="matches" class=" row justify-content-center text-center text-lg-center"></div>

        <div class="alert alert-warning alert-dismissible fade show" id="alert-template"
             style="display: none; margin-top: 20px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Sorry!</strong> Er zijn hier momenteel geen matches beschikbaar.
        </div>
    </div>

    <h2 style="text-align: center; padding-bottom: 10px;">Recente Esport Matches</h2>
    <div class="container-fluid">
        <div id="p" class="container">

        </div>

        <div id="esport" class=" row justify-content-center text-center text-lg-center">
            <iframe class="col-xl-4 col-lg-4 col-md-6 col-xs-12" width="560" height="315" src="https://www.youtube.com/embed/tImU-iBe6E8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <iframe class="col-xl-4 col-lg-4 col-md-6 col-xs-12" width="560" height="315" src="https://www.youtube.com/embed/tImU-iBe6E8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <iframe class="col-xl-4 col-lg-4 col-md-6 col-xs-12" width="560" height="315" src="https://www.youtube.com/embed/tImU-iBe6E8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>


    </div>
</div>
</div>

<script>
    createRequest('matches/upcoming', 3);
</script>

<script src="js/index-bekeken.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
</body>

</html>