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


    <?php
        include('usersidebar.php');

    ?>
<!--
    <div class="leftadmin">
        <div class="adminmenu">
            <ul class="menuouter">
                <li><a href="aboutme.php">About Me</a> </li>
                <li><a href="updateaccount.php">Update Account</a> </li>
                <li><a href="userallpost.php">My All Post</a> </li>
                <li><a href="message.php">Reaply</a></li>
                <li><a href="#">My Post Statistic</a></li>
            </ul>
        </div>

    </div>-->

    <div class="container-fluid admincontent bgg">
        <div style="padding-top: 100px" class="row ">
            <?php

            $userid = $_SESSION['userid'];



            $sql = "SELECT * FROM userinfo where id = '$userid' ";
            $result = $con->query($sql);

            $row = $result->fetch_assoc();

            echo  ' <div class=" col-md-3">
                       <div class="thumbnail">
                            <img src="img/profile.png">
                        </div>
                        
                    </div>';

            echo '  <div class="col-md-6 aboutme">
    
                     
                        <div>
                            <span> User Id :</span> <span>'. $row['id'] .'</span>
                            <hr>
                        </div>
                        
                        <div>
                            <span> Name :</span> <span>'. $row['firstname'] .'</span>
                            <hr>
                        </div>
                        <div>
                            <span> Email :</span> <span>'. $row['email'] .'</span>
                            <hr>
                        </div>
                        
                        <div>
                            <span> Phone Number:</span> <span>'. $row['phone'] .'</span>
                            <hr>
                        </div>
                        
                        <div>
                            <span> Registration Date:</span> <span>'. $row['regdate'] .'</span>
                            <hr>
                        </div>
                             
                                
                    </div>
                
            '







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