<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

    include('connect.php');

    print_r($_GET);

    $postid = $_GET['postid'];


    $sql = "SELECT * FROM post where postid = $postid";


    $result =  $con->query($sql);


    if ($result->num_rows > 0){


        $row = $result->fetch_assoc();

        print_r($row);
    }








?>