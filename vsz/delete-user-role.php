<?php

// error_reporting(E_ALL);

// ini_set('display_errors', '1');
session_start();


require_once "config.php";



if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    $id = $_GET["id"];



    // Delete query

    $sql = "DELETE FROM vsz_user_type WHERE id = $id";



    if(mysqli_query($conn, $sql)) {
        $_SESSION['msg_type'] = "success";
        $_SESSION['err_msg_title'] = "Success";
        $_SESSION['err_msg'] = "User role deleted successfully";
        header("location: manage-user-role.php");
        exit();
    } else {
        $_SESSION['msg_type'] = "error";
        $_SESSION['err_msg_title'] = "Failure";
        $_SESSION['err_msg'] = "Oops! Something went wrong. Please try again later.";
        header("location: manage-user-role.php");
        exit();

}

}



mysqli_close($conn);

?>

