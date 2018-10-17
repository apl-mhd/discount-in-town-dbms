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
<!--
    <div class="leftadmin">
        <div class="adminmenu">
            <ul class="menuouter">
                <li><a href="adminpanel.php">Pending Post </a></li>

            </ul>
        </div>

    </div>-->

    <?php include('adminpanelsidebar.php')?>

    <div class="container-fluid admincontent bgg">
        <div class="row">

            <?php

            if(isset($_SESSION['deleteflag'])){

                unset($_SESSION['deleteflag']);


                echo '<script language="javascript">';
                echo 'alert("Delete Successfully! ")';
                echo '</script>';
            }

            if(isset($_SESSION['postapprove'])){

                unset($_SESSION['postapprove']);


                echo '<script language="javascript">';
                echo 'alert("Approved Successfully! ")';
                echo '</script>';
            }

            $sql = "SELECT * FROM post where poststatus = 0";

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
                        <a href="delete.php?postid=' .$id .' ">Delete</a> </button>  
                        <button type="button" class="btn btn-danger "> 
                        <a href="approvepost.php?postid=' .$id .' ">Approve</a> </button>
                        
                        <button type="button" class="btn btn-danger "> 
                        <a href="pendingpostdetails.php?postid=' .$id .' ">Details</a> </button>  


                    </div>
                </div>
            </div>
                    
                    ';

            }

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