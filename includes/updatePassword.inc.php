<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 20-05-18
 * Time: 14:09
 */

if (isset($_POST['submitPwd'])) {

    include "dbh.inc.php";

    $pwd = mysqli_real_escape_string($conn, $_POST['inputPwd']);
    $pwd2 = mysqli_real_escape_string($conn, $_POST['inputPwd2']);
    $uid = $_SESSION['u_id'];


    if (empty($pwd)) {
        header("Location: ../account.php?changePwd=fail");
        exit();
    } else {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
//
        $sql = "Update `User` SET `wachtw` = '$hashedPwd' WHERE `userid` = '$uid'";
        mysqli_query($conn, $sql);

        header("Location: ../account.php?changePwd=succes");
        exit();
    }

}