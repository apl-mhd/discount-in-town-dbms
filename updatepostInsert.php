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


$category = $_POST['category'];
$discountrate = $_POST['discount'];
$expire = $_POST['expire'];
$postdesc = $_POST['postinfo'];
$location = $_POST['location'];
$category = $_POST['category'];

//$fileName = $_FILES["file"]["name"];
//echo $fileName;


//print_r($_POST);



        $postId = $_SESSION['postid'];

       // print_r($_SESSION);

//print_r($_POST);


        /*query for locationid in location table*/
        $sqlLocation = "SELECT * FROM  location where  locationname = '$location' ";

        $queryLocation = $con->query($sqlLocation);

        $rowLocation = $queryLocation->fetch_assoc();
        $locId = $rowLocation['id'];

//print_r($rowLocation);

        /*Query for category id in category table*/


        $sqlCategory = "SELECT * FROM  category where  subcategory = '$category' ";

        $queryCategory = $con->query($sqlCategory);
        $rowCategory = $queryCategory->fetch_assoc();
        $categoryId = $rowCategory['id'];

//print_r($rowCategory);

//show($postdesc);
//$postdesc='aaa';


        if ($con->query($sqlCategory) === false)
            echo $con->error;



        if(!isset($fileNameNew)){
            $fileNameNew = $_SESSION['imglink'];
        }







        $sqlUpdate = "UPDATE post SET postdesc= '$postdesc', imglink = '$fileNameNew', categoryid=  '$categoryId', 
                    locationid = '$locId',discountrate = '$discountrate',expire='$expire'
                  where postid = '$postId'";





        if ($con->query($sqlUpdate) === true)

            echo "insert success";
        else

            echo $sqlUpdate . $con->error;




?>

<?php



?>
