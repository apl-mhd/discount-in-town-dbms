<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');


$sql = "SELECT * FROM post 
JOIN location ON location.id = post.locationid
JOIN category ON post.categoryid = category.id where poststatus= 1 ORDER BY rand()  LIMIT 10";



$result = $con->query($sql);

$row  =  $result->fetch_assoc();

print_r($row);



if ($con->query($sql) === true)

    echo 'success';

else
    $con->error;




?>