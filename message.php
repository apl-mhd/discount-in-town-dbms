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


    <!--    <div class="leftadmin">
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
        <div class="row">
            <?php

          // print_r($_SESSION);

            $userId = $_SESSION['userid'];

            $sql = "SELECT * FROM post where userid = '$userId' AND  poststatus = 0 ";

            $result = $con->query($sql);






            while ($row = $result->fetch_assoc()){


                $id = $row['postid'];
                $img = $row['imglink'];

                $img = str_replace(' ', '', $img);
                echo  '

                     <div class="col-md-4 lead"> 


                <div class="thumbnail thumb">'

                    . '
                    <img style="height:300px;" class="img" src="img/'. $img . '">'.'

                    <div class="caption">'.'
                        <h3><del> '  . $row['discountrate']  . '% </del>'. ' Discount ' .'</h3>
                        <h3>'.'' . $row['expire'] . ' Days left' .'</h3> 
                     <button type="button" class="btn btn-success "> 
                        <a href="updatepost.php?postid=' .$id .' ">Update </a> </button>  
                        <button type="button" class="btn btn-danger "> 
                        <a href="delete.php?postid=' .$id .' ">Delete</a> </button>  


                    </div>
                </div>
            </div>
                    
                    ';

            }

            if ($result->num_rows==0) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('No Pending Post Found!');";
                echo "</script>";


            }

            ?>
        </div>
    </div>


</div>




<script>
</script>

</body>

</html>