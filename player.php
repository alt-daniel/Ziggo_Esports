<?php
include_once 'header.php';
?>

<div class="page-header" style="color:orange">

    <h1 class="page_title" id="name">LiveStream</h1>

    <script src="js/player.js"></script>
</div>
<p class="lead" id="gameTitle">Overwatch</p>

<!-- Geef hier de subtekst -->
<div class="container">


    <!-- Portfolio Item Heading -->
    <h1 class="my-4"id="test">Page Heading
        <small>Secondary Text</small>
    </h1>
    <form action="includes/favoriteLive.inc.php" method=POST style="padding-top: 20px; padding-right: 10px;">
        <button class="likeContainer2" type="submit" name=submit style=" margin-bottom: 10px">
            <i class="fas fa-thumbs-up"></i></button>
        <input type="hidden" name="player2" id="player2"> </input>
        <input type="hidden" name="player3" id="player3"> </input>

    </form>

    <!-- Portfolio Item Row -->
    <div class="row">

    </div>
    <div class="row">

        <div class="col-md-8" id="videoplayer">
            <iframe id="videoplayersrc" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
        </div>


        <div class="col-md-4" id="chatplayer">
            <iframe id="chatplayersrc" src="" frameborder="0" scrolling="no" height="378" width="450"></iframe>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Other Streams:</h3>
    <div id="livestreams"class=" row justify-content-center text-center text-lg-center">


    </div>

    <!-- /.row -->


</div>

<!-- hier kan al je content erin -->
<div class="container-fluid">

</div>
</div>
<!-- Eind van je content -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function demo() {

        await sleep(2000);

        document.getElementById("player2").value=document.getElementById("name").innerHTML;
        document.getElementById("player3").value=document.getElementById("gameTitle").innerHTML;


    }
    demo();


</script>
</body>

</html>
