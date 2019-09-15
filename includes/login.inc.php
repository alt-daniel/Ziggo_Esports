<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 21-03-18
 * Time: 13:26
 */

session_start();

if (isset($_POST['inloggen'])){
    include "dbh.inc.php";
    $uid = mysqli_real_escape_string($conn, $_POST['inputEmail']);
    $pwd = mysqli_real_escape_string($conn, $_POST['inputPassword']);
    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../login.php?login=empty");
        exit();
    } else{
        $sql = "SELECT *, TIMESTAMPDIFF(YEAR, birthday, CURDATE()) as age FROM User WHERE email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck =  mysqli_num_rows($result);
        if ($resultCheck<1){
            header("Location: ../login.php?login=error2");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['wachtw']);
                if ($hashedPwdCheck == false){
                    header("Location: ../login.php?login=error3");
                    exit();
                } elseif($hashedPwdCheck == true){



                    //Log in the user here
                  $_SESSION['u_id'] = $row['userid'];
                    $_SESSION['u_first'] = $row['voornaam'];
                    $_SESSION['u_last'] = $row['achternaam'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_memberSince'] = $row['member_since'];
                   $_SESSION['u_watchedStreams'] = $row['watched_streams'];
                    $_SESSION['u_birthday'] = $row['age'];

                    $uid2 =  $_SESSION['u_id'];

                    //Loginsessie als er succesvol wordt ingelogd
                    $sql2 ="Insert into loginsessie (userid) VALUES ('$uid2')";
                    $result2 = mysqli_query($conn, $sql2);
                    $resultCheck =  mysqli_num_rows($result);
                    
                    header("Location: ../index.php?login=succes");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../login.php?login=error4");
    exit();
}

?>