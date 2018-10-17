<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */


/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */


$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbname = 'Discount';

/*cd /Users/adanuri/.bitnami/stackman/machines/xampp/volumes/root/htdocs
*/


$con =  new  mysqli($serverName,$userName,$password, $dbname);

if($con->connect_error)
    die("connect fail".$con->connect_error);



$img = 't.jpg';

/*echo "<img src='$img'>";*/

$sql =   "SELECT imglink FROM post where  postid = 11";

$result = $con->query($sql);

if($result ->num_rows > 0){

    while ($row = $result->fetch_assoc()){

        echo $row['imglink'];
        $img2 = $row['imglink'];
        echo $img2;
        //echo $row['image'];

        echo  ' <img src = "data:image/jpg; base64, base64_encode($img2) "   />';
    }


}




?>