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



    <div class="container-fluid admincontent bgg">
        <div class="row">
            <?php

          // print_r($_SESSION);

            //$userId = $_SESSION['userid'];
            $userId = $_GET['userid'];


            $sql = "SELECT * FROM post where userid = '$userId'";

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
                     
                        <button type="button" class="btn btn-danger "> 
                        <a href="postdetails.php?postid=' .$id .' ">More Info</a> </button>  


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