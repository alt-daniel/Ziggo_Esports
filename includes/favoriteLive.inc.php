<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 25-4-2018
 * Time: 12:31
 */
session_start();



if (isset($_POST['submit'])){
        include "dbh.inc.php";
        $uid = $_SESSION['u_id'];
        $playerName = mysqli_real_escape_string($conn, $_POST['player2']);
        $game = mysqli_real_escape_string($conn, $_POST['player3']);

        //Error handlers
        //Check if inputs are empty

        $sql = "INSERT INTO `Favorite list` VALUES ('$uid', '$playerName', '$game');";
        //Query uitvoeren
        mysqli_query($conn, $sql);
        header("Location: ../player.php?favorite=succes");
    }
    else {
        header("Location: ../player.php?favorite=error");
        exit();


}



?>