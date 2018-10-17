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



            $sql = "SELECT * FROM userinfo where usertype = 0";

            $result = $con->query($sql);


            echo '<table class="table table-bordered">
  
                        <tr>
                            <th>User Id</th>
                            <th>Email</th>
                            <th>Delete User</th>
                         </tr>';


            while ($row = $result->fetch_assoc()){

                $id = $row['id'];
                $email = $row['email'];




                echo '<tr>'.

                    '<td>'. $id .'</td>' .

                    '<td>'. '<a href="adminuserallpost.php?id='.$id .'">'.$email.'</a>'  .'</td>'.
                    '<td>'. '<a href="userprofiledelete.php?id='.$id .'">'.$email.'</a>'  .'</td>';

                echo '</tr>';



            }


            echo '</table>';

            ?>
        </div>
    </div>


</div>



</body>

</html>