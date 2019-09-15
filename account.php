<?php
include_once 'header.php';
include_once 'includes/upload.php';
include 'includes/dbh.inc.php';
?>

<style>
    <?php
        include 'css/account.css';
     ?>
</style>

<main role="main">
    <div class="jumbotron" style="padding-top: 100px">
        <div class="container">
            <h1>Persoonlijke pagina</h1>
            <p>Hier kan u uw profiel bekijken en wijzigen. </p>
        </div>
    </div>


    <div class="container">
        <div class="row">

        </div>

        <div class="row" style="padding-bottom: 2rem">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card" style="width: 100%;">
                    <?php
                    $uid = $_SESSION['u_id'];
                    $sql2 = "SELECT status from User Where userid='$uid'";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_array($result2);
                    $status = reset($row2);
                    if ($status == '0') {
                        echo "<img class=\"card-img-top\" id=\"pfp\" src=\"img/profile-img.jpg\" alt=\"Card image cap\">";
                    } else {
                        $sql = "SELECT file_name FROM User WHERE userid='$uid'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        $actualFileName = reset($row);
                        echo "<img class=\"card-img-top\" id=\"pfp\" src=\"pfp/$actualFileName\" alt=\"Card image cap\">";
                    }
                    ?>

                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo '@' . $_SESSION['u_first'] . $_SESSION['u_last'];
                            ?>
                        </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <form method="POST" enctype="multipart/form-data">

                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="file" name="file" id="file" class="inputfile" onchange='update()'>
                                        <label for="file">
                                            Upload<span class="fas fa-upload"
                                                        style="padding-left: 5px; padding-right: 5px;"></span></label>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" name="submit" id="submit" class="inputfile"></button>
                                        <label for="submit" id="submit_label"
                                               style="padding-right: 5px; display: none;">
                                            Bevestig<span class="fas fa-check"
                                                          style="padding-left: 5px; padding-right: 5px;"></span></label>
                                    </div>

                                    <?php
                                    $headerstat = "?deletepfp";
                                    $uid = $_SESSION['u_id'];
                                    $sql2 = "SELECT status from User Where userid='$uid'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row2 = mysqli_fetch_array($result2);
                                    $status = reset($row2);

                                    if ($status == '1') {
                                        echo " <a href=\"$headerstat\" id='remove_pfp'><i>Klik hier om profielfoto te verwijderen</i></a>";

                                        if (isset($_GET['deletepfp'])) {
                                            echo "<script type=\"text/javascript\">window.location.href = \"account.php\"; </script>";
                                            $uid = $_SESSION['u_id'];
                                            $sql = "SELECT file_name FROM User WHERE userid='$uid'";
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_array($result);
                                            $actualFileName = reset($row);
                                            $actualFilePath = "pfp/$actualFileName";
                                            unlink($actualFilePath);

                                            $sql2 = "UPDATE User SET file_name = '', status = '0' WHERE userid='$uid'";
                                            $result2 = mysqli_query($conn, $sql2);


                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <script>
                                function update() {
                                    document.getElementById('submit_label').style.display = '';
                                }
                            </script>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-4">
                <table class="table">

                    <thead>
                    <tr>
                        <th style="border: none; color: darkorange">Account details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>E-mailadres</th>
                        <?php
                        echo '<th>' . $_SESSION['u_email'] . '</th>';
                        ?>

                    </tr>
                    <tr>
                        <th>Gebruikersnaam</th>
                        <?php
                        echo '<th>@' . $_SESSION['u_first'] . $_SESSION['u_last'];
                        ?>
                    </tr>
                    <tr>
                        <th>Voornaam</th>
                        <?php
                        echo '<th>' . $_SESSION['u_first'] . '</th>';
                        ?>
                    </tr>
                    <tr>
                        <th>Achternaam</th>
                        <?php
                        echo '<th>' . $_SESSION['u_last'] . '</th>';
                        ?>
                    </tr>
                    <tr>
                        <th>Leeftijd</th>
                        <?php


                        echo '<th>' . $_SESSION['u_birthday'] . '</th>';
                        ?>
                    </tr>
                    <tr>
                        <th>Lid sinds</th>
                        <?php
                        echo '<th>' . $_SESSION['u_memberSince'] . '</th>';
                        ?>
                    </tr>
                    <tr>
                        <th>Aantal bekeken streams</th>
                        <?php
                        echo '<th>' . $_SESSION['u_watchedStreams'] . '</th>';
                        ?>
                    </tr>
                    </tbody>
                </table>

                <!--  Wijzigen email    -->
                <form class="form-inline" name="validateEmail" action="includes/updateEmail.inc.php" method="post"
                      onsubmit="return
                      ()">

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Nieuw adres</label>
                        <input type="text" class="form-control" name="inputEmail" placeholder="Nieuw emailadres">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="text" class="form-control" name="inputEmail2" placeholder="Verifeer emailadres">
                    </div>
                    <button type="submit" class="btn btn-warning mb-2" name="submitEmail" value="submit">Wijzig email
                    </button>
                </form>

                <!--                    Wijzigen wachtwoord-->
                <form class="form-inline" name="validatePwd" action="includes/updatePassword.inc.php" method="post">


                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" name="inputPwd" placeholder="Nieuw Wachtwoord">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" name="inputPwd2" placeholder="Verifeer Wachtwoord">
                    </div>
                    <button type="submit" class="btn btn-warning mb-2" name="submitPwd" value="submit">Wijzig wachtwoord</button>
                </form>

            </div>

        </div>
        <hr style="padding-bottom: 2rem">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <table class="table">
                    <h3>Laatste 5 login sessies</h3>
                    <thead class="">
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Datum en tijdstip</th>


                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $uid = $_SESSION['u_id'];
                    $sql = "SELECT * FROM loginsessie WHERE userid = '$uid' ORDER BY id DESC LIMIT 5";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo '<tr>' .
                            '<th scope="row">' . $i . '</th>' .
                            '<td>' . $row['datumtijd'] . '</td>' .
                            '</tr>';
                        $i++;
                    }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


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
