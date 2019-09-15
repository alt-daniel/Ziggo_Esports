<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 18-4-2018
 * Time: 00:58
 */

if (isset($_POST['submit3'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../login.php");
}