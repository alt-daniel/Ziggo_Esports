<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 21-03-18
 * Time: 13:30

 */

if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';
    $first = mysqli_real_escape_string($conn, $_POST['registerfName']);
    $last =mysqli_real_escape_string($conn, $_POST['registerlName']);
    $email =mysqli_real_escape_string($conn, $_POST['registerEmail']);
    $pwd =mysqli_real_escape_string($conn, $_POST['registerPassword']);
    //Error handlers
    //Check for empty fields
    if (empty($first)||empty($last)|| empty($email)|| empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else{
        // Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else{
            //Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=email");
                exit();
            } else{
                $sql = "SELECT * FROM User WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck>0){
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else{
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sqlIns = "INSERT INTO User (voornaam, achternaam, email, wachtw) 
                            VALUES ('$first', '$last', '$email', '$hashedPwd');";
                    //Query uitvoeren
                    mysqli_query($conn, $sqlIns);
                    header("Location: ../login.php?signup=succes");
                    exit();
                }
            }
        }
    }
} else{
    header("Location: ../login.php");
    exit();
}

