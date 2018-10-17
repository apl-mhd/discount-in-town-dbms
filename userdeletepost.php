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

print_r($postid);

$sql =  "DELETE FROM post where postid = '$postid'";

if($con->query($sql) === true){


     $_SESSION['deleteflag'] = "Delete Success Fully";

    $id = $_SESSION['userid'];

   // $_SESSION['usertype'] = $row['usertype'];

    if($_SESSION['usertype'] = 1) {

        $countsql = "SELECT count(*) FROM post WHERE userid ='$id' and  poststatus='0' ";
    }
    else{
        $countsql = "SELECT count(*) FROM post WHERE userid ='$id' ";
    }


    $countResult = $con->query($countsql);
    $countRow = $countResult->fetch_assoc();

    // print_r($countRow);

    // echo $countRow['count(*)'];
    $_SESSION['usertotalpost'] = $countRow['count(*)'];


}

else
    echo  $con->error;


if($_SESSION['usertype']==1) {

    header("Location: adminpanel.php", true, 301);
}
else{

    header("Location: userallpost.php", true, 301);

}



?>
