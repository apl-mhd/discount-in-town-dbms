<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');
include('header.php');
//print_r($_SESSION);

?>


<body>
</div>


<div class="wrapper">


    <?php include('usersidebar.php') ?>




    <div class="container-fluid admincontent bgg">
        <div class="row">
            <?php

            // print_r($_SESSION);


            $userId = $_SESSION['userid'];



            $sqlPost = "SELECT * FROM post where userid = '$userId' AND  poststatus = 1";

            $result = $con->query($sqlPost);
            $postArr = array(-1,-2,-3);


            while ($row1 = $result->fetch_assoc()){

                array_push($postArr, $row1['postid']);


            }

            //print_r($postArr);

            $postIn = join(",", $postArr);
          //  print_r($postIn);








            //$sql = "SELECT * FROM comment where userid = '$userId' AND  comentstatus = 0 ";
            $sql = "SELECT * FROM comment where  postid  in ($postIn)  and commentstatus = 0 ";
            //echo $sql;

            $result = $con->query($sql);



            while ($row = $result->fetch_assoc()){

                $comment = $row['comment'];
                $postid = $row['postid'];

                //echo $comment;
               // echo $postid;


                //echo $postid;



               echo '<div class="alert alert-danger"  role="alert">';
                echo '<a class="alert alert-primary"  href='."postdetails.php?postid=".$postid.'>'.  $comment .' </a>'.'<br>';
                echo '</div>';
/*
                $id = $row['id'];
                $postid = $row['postid'];



                echo  '

                     <div class="col-md-4 lead"> 


                <div class="thumbnail thumb">'

                    . '
                     
                        <a href="updatepost.php?postid=' .$id .' ">Update </a> </button>  
                        <button type="button" class="btn btn-danger "> 
                        <a href="delete.php?postid=' .$id .' ">Delete</a> </button>  


                    </div>
                </div>
            </div>
                    
                    ';*/

            }

            if ($result->num_rows==0) {



            }

            ?>
        </div>
    </div>


</div>




<script>
</script>

</body>

</html>