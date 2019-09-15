<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 25-4-2018
 * Time: 12:31
 */
session_start();


    for ($i=1; $i<24; $i++){
        if (isset($_POST['submit'+$i])){
            include "dbh.inc.php";
            $uid = $_SESSION['u_id'];
            $playerName = mysqli_real_escape_string($conn, $_POST['player'+i]);
            //Error handlers
            //Check if inputs are empty

            $sql = "INSERT INTO `Favorite list` VALUES ('$uid', '$playerName', 'Fifa18');";
            //Query uitvoeren
            mysqli_query($conn, $sql);
            header("Location: ../games-details_fifa18.php?favorite=succes");
        }
        else {
            header("Location: ../games-details_fifa18.php?favorite=error");
            exit();
        }

    }



?>