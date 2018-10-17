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

$postid = $_GET['postid'];

//print_r($postid);

$sql =  "DELETE FROM post where postid = '$postid'";

if($con->query($sql) === true){


     //$_SESSION['userdelete'] = "Delete Success Fully";

    //$id = $_SESSION['userid'];

   // header("Location: userallpost.php", true, 301);

   // $_SESSION['usertype'] = $row['usertype'];


    $sqlComment = "DELETE FROM comment where postid = '$postid'";
    $sqlComment = $con->query($sqlComment);





    /*echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Delete successfully');";
    echo "</script>";*/




}

else
    echo  $con->error;




/*
if($_SESSION['usertype']==1) {

    header("Location: adminpanel.php", true, 301);
}
else{

    header("Location: userallpost.php", true, 301);

}*/



?>
