
<?php

  // $url zoekt de url en checked of die valide is
  $url = 'http://webhose.io/filterWebContent?token=3dc77492-bf5b-4bd3-b17a-67868b84abac&format=json&ts=1521375193133&sort=crawled&q=site%3Aesportsinsider.com';

  // $json indexeert die url naar een json array
  $json = file_get_contents($url);

  // $array zet de json array om naar php array
  $array = json_decode($json, true);

  include_once 'header.php';
?>



<style>
    <?php
           include 'css/slick.css';
           include 'css/slick-theme.css';
           include 'Milaenzo/home.css';
           include 'https://www.w3schools.com/w3css/4/w3.css';
     ?>
    /* Remove the navbar's default margin-bottom and rounded borders */

    .container--item{
        padding:0 0.5em;
    }
    .container--item__image{
        height:25em;
        width:100%;
        position:relative;
    }
    .container--item__image img{
        height:100%;
        width:100%;
        object-fit: cover;
    }
    .container{
        padding: 2em;
    }
</style>

<div class="container">


<?php foreach ($array['posts'] as $key => $item) {?>


    <div class="container--item">
        <div class="container--item__image">
            <img src="<?php echo $item['thread']['main_image'] ?>"/>
        </div>

        <div  class="container--item__title">
            <?php echo $item ['title']?>
        </div>
    </div>


<?php } ?>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('.container').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            adaptiveHeight: true
        });
    });
</script>


<!-- Core scripts
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script src="js/slick.min.js"></script>

</body>
</html>
