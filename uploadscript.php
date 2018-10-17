<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */
/*/Users/sheikhaliazzam/.bitnami/stackman/machines/xampp/volumes/root/htdocs/discount/postinsert.ph*/

$fileNameNew;

$file = $_FILES["file"];
//print_r($file)."<br>";

$fileName = $_FILES["file"]["name"];
$tempeName = $_FILES["file"]["tmp_name"];
$fileError = $_FILES["file"]["error"];
$fileType = $_FILES["file"]["type"];

$filExt = explode(".",$fileName);
//print_r($filExt);
$fileActualExt = strtolower(end($filExt));

$allowed =array('jpg','jpeg','png');

if(in_array($fileActualExt,$allowed)){

    if($fileError == 0){

        $fileNameNew = uniqid('',true). "." .$fileActualExt;
        $fileDest = 'img/'.$fileNameNew;

        move_uploaded_file($tempeName, $fileDest);



    }
    else
        echo "error";


}
else
{
    //echo "you can't upload";
}



?>