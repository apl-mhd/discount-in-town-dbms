<?php
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


$con =  new  mysqli($serverName,$userName,$password, $dbname);

if($con->connect_error)
    die("connect fail".$con->connect_error);

/*    echo "connect success";*/

$category = $_GET['category'];
$discountrate = $_GET['percent'];
$expire = $_GET['expire'];
$postdesc = $_GET['postinfo'];
$brand = $_GET['brand'];
$location = $_GET['location'];
$img = $_GET['file'];


print_r($_GET);

$date = date('Y-m-d');


/*$phone = $_GET['phone'];*/


$sql = "INSERT INTO post(userid, categoryid, postdesc, expire, discountrate,postdate,imglink)

                             values ( 1, 1,' ".$postdesc."', ' ".$expire."', ' ".$discountrate." ', '".$date ."', '". $img . "' )";





/*
 * INSERT INTO `post`(`postid`, `userid`, `postdate`, `locationid`, `categoryid`, `postdesc`, `imglink`, `expire`, `discountrate`)
 * VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
 *
 *
 *
 * */


/*
$sql = "INSERT INTO userinfo(firstname, lastname, email, pass, phone)

                             values ('.aa.','aa','apl@gmail.com', 'aa','111')";*/



if ($con->query($sql) === true)

    echo  "insert success";
else
    echo "fail" . $sql . $con->error;



/*header("Location: index.php", true, 301);*/



/*$sql = "INSERT INTO userinfo ()"*/







?>