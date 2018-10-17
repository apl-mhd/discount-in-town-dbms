<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */
session_start();
include ('connect.php');

$appPostid = $_GET['postid'];


    $sql = "UPDATE post SET poststatus = 1 WHERE postid =  '$appPostid'";


    if ($con->query($sql)) {

        $_SESSION['postapprove'] = "approve";
        header("Location: adminpanel.php", true, 301);


    }
else
    echo $con->error;


?>