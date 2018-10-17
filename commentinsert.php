<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');
include('header.php');

            $comment='';
            $name='';

            $postid = $_SESSION['postid'];

            //$sqlUserId = "SELECT * FROM post where postid = '$postid'";


    if (isset($_SESSION['userid'])) {


    }

            if (isset($_POST['name']))
                $name = $_POST['name'];

            if(isset($_POST['comment']))
                $comment = $_POST['comment'];




            if (isset($_SESSION['userid'])) {

                $userid = $_SESSION['userid'];

                if ($userid == $_SESSION['postUserId']){


                    $sql = "INSERT INTO comment( comment,postid, userid) VALUES
                ('$comment', '$postid', '$userid')";

                }
                else{
                    $sql = "INSERT INTO comment( comment,name,postid) VALUES
                ('$comment','$name', '$postid')";
                }



            } else {




                $sql = "INSERT INTO comment( comment,name,postid) VALUES
                ('$comment','$name', '$postid')";
            }

            $result = $con->query($sql);

           // echo $sql;
            //echo $con->error;

            if ($result == true){
                echo 'Comment success';

               // header("Location: postdetails.php", true, 301);
                            }

            else
                echo 'fail';


    ?>







<?php $con->close(); ?>