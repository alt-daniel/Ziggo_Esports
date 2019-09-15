<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 04-06-18
 * Time: 23:45
 */

if (isset($_POST['submit'])){
    include "dbh.inc.php";
    $uid = $_SESSION['u_id'];



    //Error handlers
    //Check if inputs are empty

    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
        $del_id = $checkbox[$i];


//        $sql = "DELETE FROM `Favorite list` WHERE `Favorite list`.`userid`= '$uid' AND `Favorite list`.`streamer`=' ".$del_id."'";

        //Query uitvoeren
        mysqli_query($conn, "DELETE FROM `Favorite list` WHERE `Favorite list`.`userid`= '$uid' AND `Favorite list`.`streamer`=' ".$del_id."'");

    }
    header("Location: ../favorite.php?favorite=succes");
}
else {
    header("Location: ../favorite.php?favorite=error");
    exit();


}



?>