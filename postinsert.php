<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */
include('connect.php');
include('uploadscript.php');
include ('debug.php');
session_start();

print_r($_POST);


$category = $_POST['category'];
$discountrate = $_POST['discount'];
$expire = $_POST['expire'];
$postdesc = $_POST['postinfo'];
$location = $_POST['location'];
$category = $_POST['category'];
$lat =  $_POST['latitude'];
$long = $_POST['longitude'];


$userid =  $_SESSION['userid'];
$date = date('Y-m-d');



/*query for locationid in location table*/
$sqlLocation = "SELECT * FROM  location where  locationname = '$location' ";

$queryLocation = $con->query($sqlLocation);

$rowLocation = $queryLocation->fetch_assoc();

/*Query for category id in category table*/


$sqlCategory = "SELECT * FROM  category where  subcategory = '$category' ";

$queryCategory = $con->query($sqlCategory);
$rowCategory = $queryCategory->fetch_assoc();

if($con->query($sqlCategory) === false)
    echo  $con->error;


/*if($queryCategory->num_rows > 0)
    echo  $rowCategory['id']."<br>";


 else
    show($category);*/




$sql = "INSERT INTO post(userid, locationid , categoryid, postdesc, expire, discountrate,postdate,imglink,latitude,longitude)

                             values ('". $userid. "' , '".$rowLocation['id'] ."' , '".$rowCategory['id']."' ,'".$postdesc."', 
                             '".$expire."', '".$discountrate."', '".$date ."', '" . $fileNameNew . "', '".$lat."','".$long."' )";



if ($con->query($sql) === false)
    show($category['category']);


    $_SESSION['postsuccess']="post";

//header("Location: post.php", true, 301);


?>

<?php
$con->close();


?>
