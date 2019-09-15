<?php


/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 16-May-18
 * Time: 12:41
 */

if (isset($_POST['submit'])) {
    include "dbh.inc.php";
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize <= 2000000) {
                $uid = $_SESSION['u_id'];
                $fileNameNew = $uid.".".$fileActualExt;
                $fileDestination = 'pfp/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $sql = "UPDATE User SET file_name = '$fileNameNew', status = '1' WHERE userid='$uid'";
                $result = mysqli_query($conn, $sql);

            } else {
                echo "The image you uploaded was too big.";
            }
        } else {
            echo "There was an error when uploading your image, please try again.";
        }
    } else {
        echo "You cannot upload files of this type.";
    }
}