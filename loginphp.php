<?php

include('connect.php');

session_start();


//print_r($_SESSION);


$email  = $_GET['email'];
$pass = $_GET['pass'];



//print_r($_GET);





$sql =   "SELECT * FROM userinfo where  email  =   '". $email ."' and pass =  '". $pass ."'   ";
//echo $sql;
$result = $con->query($sql);




    if ($result->num_rows > 0){

        $row = $result->fetch_assoc();

        //print_r($row);
       $_SESSION['email'] = $row['email'];
        $_SESSION['pass'] = $row['pass'];
        $_SESSION['userid'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];

        $userid = $row['id'];


        if($row['usertype']==0) {

            $countsql = "SELECT count(*) FROM post WHERE userid = '$userid'";

            $countResult = $con->query($countsql);
            $countRow = $countResult->fetch_assoc();

            // print_r($countRow);

            // echo $countRow['count(*)'];
            $_SESSION['usertotalpost'] = $countRow['count(*)'];
        }

        else{

            $countsql = "SELECT count(*) FROM post WHERE poststatus = 0";

            $countResult = $con->query($countsql);
            $countRow = $countResult->fetch_assoc();

            // print_r($countRow);

            // echo $countRow['count(*)'];
            $_SESSION['usertotalpost'] = $countRow['count(*)'];

        }




        echo "<script>window.location.href='index.php'</script>";
    }/*
    else

        header("Location: login.php", true, 301);*/


?>

