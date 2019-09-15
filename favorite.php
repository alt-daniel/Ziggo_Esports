
<?php
include_once 'header.php';

?>


<style>
    <?php
        include 'css/favorite.css';
     ?>
</style>

<main role="main">
    <div class="jumbotron" style="padding-top: 100px">
        <div class="container">
            <h1> Favorieten Lijst</h1>
            <p>Hier kan u door u toegevoegde favorieten zien.</p>
        </div>
    </div>


    <?php
    include 'includes/dbh.inc.php';

    $uid =  $_SESSION['u_id'];
    $sql = "SELECT * FROM `Favorite list` WHERE game = 'League of Legends' AND userid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck =  mysqli_num_rows($result);

    $j =1;
    if ($resultCheck>0) {
        echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" value="submit" name="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>League of Legends</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                    <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                        <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                    </label>
                </div>
            </div>

            <?php

        }  }?>
    </form>

    </div>

    </div>

    <?php
    include 'includes/dbh.inc.php';

    $uid =  $_SESSION['u_id'];
    $sql = "SELECT * FROM `Favorite list` WHERE game = 'Counter-Strike: Global Offensive' AND userid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck =  mysqli_num_rows($result);

    $j =1;
    if ($resultCheck>0) {
        echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Counter-Strike: Global Offensive</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                    <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                        <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                    </label>
                </div>
            </div>

            <?php

        }  }?>
    </form>

    </div>

    </div>
    <?php
    include 'includes/dbh.inc.php';

    $uid =  $_SESSION['u_id'];
    $sql = "SELECT * FROM `Favorite list` WHERE game = 'Dota 2' AND userid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck =  mysqli_num_rows($result);

    $j =1;
    if ($resultCheck>0) {
        echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Dota 2</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                    <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                        <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                    </label>
                </div>
            </div>

            <?php

        }  }?>
    </form>

    </div>

    </div>
    </div>

    <?php
    include 'includes/dbh.inc.php';

    $uid =  $_SESSION['u_id'];
    $sql = "SELECT * FROM `Favorite list` WHERE game = 'Hearthstone' AND userid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck =  mysqli_num_rows($result);

    $j =1;
    if ($resultCheck>0) {
        echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Hearthstone</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                    <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                        <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                    </label>
                </div>
            </div>

            <?php

        }  }?>
    </form>

    </div>

    </div>
    <?php
    include 'includes/dbh.inc.php';

    $uid =  $_SESSION['u_id'];
    $sql = "SELECT * FROM `Favorite list` WHERE game = 'FIFA18' AND userid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck =  mysqli_num_rows($result);

    $j =1;
    if ($resultCheck>0) {
        echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Overwatch</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                    <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                        <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                    </label>
                </div>
            </div>

            <?php

        }  }?>
    </form>

    </div>

    </div>



            <?php
            include 'includes/dbh.inc.php';

            $uid =  $_SESSION['u_id'];
            $sql = "SELECT * FROM `Favorite list` WHERE game = 'Overwatch' AND userid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck =  mysqli_num_rows($result);

            $j =1;
            if ($resultCheck>0) {
                echo '
                 <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Overwatch</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row"> ';


                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                            <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                                <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                            </label>
                        </div>
                    </div>

                    <?php

                }  }?>
                </form>

                </div>

                </div>









    <div class="container" style="margin-top: 2em">
        <div class="row" style="padding-bottom: 1em">
            <div class="col-lg-12">
                <form action="includes/deleteFavorite.inc.php" method="POST">
                <button type="submit" class="btn btn-warning" style="width: auto; float: right"><i class="far fa-trash-alt"></i>

                </button>
                <h1>Overig</h1>

                <hr style="border: 1px solid darkorange">
            </div>
        </div>
        <div class="row">


            <?php
            include 'includes/dbh.inc.php';

            $uid =  $_SESSION['u_id'];
            $sql = "SELECT * FROM `Favorite list` WHERE game NOT IN ('Dota 2', 'League of Legends', 'Hearthstone', 'Overwatch', 'FIFA 18', 'Counter-Strike: Global Offensive') AND userid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck =  mysqli_num_rows($result);

            $j =1;
            if ($resultCheck>0) {


                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $row['streamer'];?>" id="checkitem">
                            <label class="form-check-label" for="<?php echo $row['streamer']; ?>">
                                <a href="https://www.twitch.tv/<?php echo $row['streamer'];?>"> <?php echo $row['streamer'];?></a>
                            </label>
                        </div>
                    </div>

                    <?php

                }  ?>


        </div>




        <?php }
        if ($resultCheck==0){
            echo "Geen favorieten";
        }
        ?>
        </form>

        </div>

    </div>


</main>


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



</body>
</html>