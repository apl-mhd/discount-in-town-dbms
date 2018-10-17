<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */




if(isset($_SESSION['usertype'])) {

    if($_SESSION['usertype']==0){


    echo '
<div class="leftadmin">
        <div class="adminmenu">
            <ul class="menuouter">
                <li><a href="aboutme.php">About Me</a> </li>
                <li><a href="updateaccount.php">Update Account</a> </li>
                <li><a href="userallpost.php">My All Approved Post</a> </li>
                <li><a href="userpendingpost.php">Pending Post</a></li>
                <li><a href="message.php">Messages</a></li>
                <li><a href="#">My Post Statistic</a></li>
            </ul>
        </div>
 </div>';


}


else{

    echo '
<div class="leftadmin">
        <div class="adminmenu">
            <ul class="menuouter">
                <li><a href="aboutme.php">About Me</a> </li>
                <li><a href="updateaccount.php">Update Account</a> </li>
            </ul>
        </div>
 </div>' ;

}

}

?>