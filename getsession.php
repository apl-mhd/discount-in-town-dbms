<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */


session_start();


    print_r($_SESSION);


    if(isset($_SESSION['orko']))
        echo 'set';
    else
        echo 'not exist erko';


?>