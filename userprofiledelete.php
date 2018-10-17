<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */


include ('connect.php');
include ('debug.php');
session_start();

$userid = $_GET['id'];

//print_r($postid);

$sql =  "DELETE FROM comment where userid = '$userid'";

 if ($con->query($sql)==true)
     echo 'delete comment success'.'<br>';


    $sqlpost = "DELETE FROM post where userid = '$userid'";


    if ($con->query($sqlpost))
        echo 'delete post success'.'<br>';


$sqluserinfo = "DELETE FROM userinfo where id = '$userid'";


    if($con->query($sqluserinfo)==true){

        echo "delete user success";
    }

    else{

        echo  $sqluserinfo;

    }












/*
if($_SESSION['usertype']==1) {

    header("Location: adminpanel.php", true, 301);
}
else{

    header("Location: userallpost.php", true, 301);

}*/



?>
