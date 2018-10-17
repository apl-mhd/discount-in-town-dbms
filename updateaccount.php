<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');
include('header.php');

?>


    <body>
    </div>


    <div class="wrapper">

        <?php include('usersidebar.php') ?>


        <!--<div class="leftadmin">
            <div class="adminmenu">
                <ul class="menuouter">
                    <li><a href="aboutme.php">About Me</a> </li>
                    <li><a href="updateaccount.php">Update Account</a> </li>
                    <li><a href="userallpost.php">My All Post</a> </li>
                    <li><a href="#">Reaply</a></li>
                    <li><a href="#">My Post Statistic</a></li>
                </ul>
            </div>

        </div>-->




        <div class="container-fluid admincontent bgg">
            <div style="padding-top: 100px" class="row ">
                <?php


                if(!isset($_SESSION['profileupdate'])) {

                    $_SESSION['profileupdate']= '';
                }

                $userid = $_SESSION['userid'];

                $sql = "SELECT * FROM userinfo where id = '$userid' ";
                $result = $con->query($sql);

                $row = $result->fetch_assoc();

              //  print_r($_SESSION);

                echo  ' 
        <div class="col-md-6 col-md-offset-3">
            <form action="updateinsert.php" method="post">
            
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                       <div class="alert alert-success fade in" style="text-align: center;">  
                            <strong>'.$_SESSION['profileupdate'] .'</strong> 
                           </div>
                
                    </div>
                </div>

                <div class="form-group row">
                
                   
                    <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fname" class="form-control" id="firstname" value="' .$row['firstname'] . '" placeholder="' .$row['firstname'] . '">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lname" class="form-control" value="' .$row['lastname'] . '" id="lastname" placeholder="' .$row['lastname'].'">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="email"  class="form-control" value="' .$row['email'] .'" id="email" placeholder="' .$row['email'] . '">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone"  class="form-control" value="' .$row['phone'] . '" id="phone" placeholder="' .$row['phone'] . '">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="pass" class="col-sm-3 col-form-label">Old Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="pass" class="form-control"  id="pass" placeholder="' .$row['pass'] . '">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="cpass" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-9 ">
                        <input type="password" name="newpass"  class="form-control" value="' .$row['pass'] . '" id="cpass" placeholder="' .$row['pass'] . '">
                    </div>
                </div>
                



                <div class="form-group row">
                    <div class="col-md-9 col-md-offset-3 ">
                        
                        <div class="alert alert-success fade in" style="text-align: center;">  
                        <strong><p>N.B. If you do not want to change password, please left it blank</strong> 
                        </div>
                
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary form-control">Update AC</button>
                    </div>
                </div>
            </form>


        </div>
                
            ';





                $_SESSION['profileupdate'] = '';

                ?>
            </div>
        </div>


    </div>




    <script>

        /*

            $(document).ready(function () {

                $("h2").click(function () {

                    $(".leftsidebar").animate({
                        width : 'toggle'
                    });
                    $("h2").hide();

                });

                $(".close").click(function () {
                    $(".leftsidebar").animate({
                        width : 'toggle',

                    });
                    $("h2").show();

                })

            });
        */

    </script>

    </body>

    </html>

<?php

$con->close();
?>