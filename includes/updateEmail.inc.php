<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 20-05-18
 * Time: 14:09
 */

session_start();


if (isset($_POST['submitEmail'])) {

    include "dbh.inc.php";


    $email = mysqli_real_escape_string($conn, $_POST['inputEmail2']);
    $uid = $_SESSION['u_id'];


    if (empty($email)) {
        header("Location: ../account.php?changeEmail=fail");
        exit();
    } else {

//        $sql = "Update `User` SET `email` = '$email' WHERE `userid` = '$uid'";
        $sql = "Update `User` SET `email` = '$email' WHERE `userid` = '$uid'";
        mysqli_query($conn, $sql);
        $_SESSION['u_email'] = $email;



            header("Location: ../account.php?changeEmail=succes");
            exit();
        }

}


