<?php
include_once 'header.php';
?>

<style> <?php
 include 'css/formpje.css';

?>
</style>

<div class="container" id="formz">
    <div class="row">
        <form class="form-signin" action="includes/login.inc.php" method="POST">
            <div class="text-center mb-4">
                <img class="mb-4" src="img/vodafone-ziggo.png" alt="" width="100">
                <h1 class="h3 mb-3 font-weight-normal">Ziggo Vodafone eSports</h1>
                <p>Login om gebruik te kunnen maken van persoonlijke content. Heeft u nog geen account? Dan kunt u zich
                    hier <a data-toggle="modal" href="#exampleModal"> registeren.</a></p>
            </div>

            <div class="form-label-group">
                <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required
                       autofocus>
                <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>

            <!--            <div class="checkbox mb-3">-->
            <!--                <label>-->
            <!--                    <input type="checkbox" value="remember-me"> Remember me-->
            <!--                </label>-->
            <!--            </div>-->
            <button class="btn btn-lg btn-warning btn-block" type="submit" name="inloggen"
                    style="background-color: darkorange">Log in
            </button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; ZV eSports 2018</p>
        </form>
    </div>

    <!-- Modal voor Registeren -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: lightgrey; color: black">
                    <h5 class="modal-title" id="exampleModalLabel">Ziggo Vodafone eSports</h5>
                    <button type="button" style="color: black" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: white">
                    <form class="signup-form" action="includes/signup.inc.php" method="post">
                        <div class="text-center mb-4">
                            <img class="mb-4" src="img/vodafone-ziggo.png" alt="" width="100">
                            <h1 class="h3 mb-3 font-weight-normal">Account aanmaken</h1>
                            <p></p>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="registerfName" class="form-control" placeholder="Voornaam" required
                                   autofocus>
                            <label for="registerfName">Voornaam</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="registerlName" class="form-control" placeholder="Achternaam"
                                   required autofocus>
                            <label for="registerlName">Achternaam</label>
                        </div>


                        <div class="form-label-group">
                            <input type="email" name="registerEmail" class="form-control" placeholder="Email address"
                                   required autofocus>
                            <label for="inputEmail">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="registerPassword" class="form-control" placeholder="Password"
                                   required>
                            <label for="inputPassword">Password</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="registerPassword2" class="form-control" placeholder="Password"
                                   required>
                            <label for="inputPassword">Verifieren wachtwoord</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Ik ga akkoord met de voorwaarden.
                            </label>
                        </div>
                        <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit"
                                style="background-color: darkorange">Registeren
                        </button>
                        <p class="mt-5 mb-3 text-muted text-center">&copy; ZV eSports 2018</p>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- eind Modal -->

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
</body>
</html>


