<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */
session_start();
include ('connect.php');

print_r($_POST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['newpass'];
$phone = $_POST['phone'];

$userid = $_SESSION['userid'];


$sql = "UPDATE userinfo SET firstname = '$fname', lastname = '$lname', email = '$email', pass='$pass',   phone = '$phone'  
          where  id = '$userid' ";





/*
$sql = "INSERT INTO userinfo(firstname, lastname, email, pass, phone,regdate)

                             values (' ".$fname."', ' ".$lname."',' ".$email."', ' ".$pass."', ' ".$phone." ' , ' ".$date." ')";

*/

if ($con->query($sql) === true)

    echo  "insert success";
else
    echo "fail" . $sql . $con->error;

$con->close();


echo "<script language='javascript' type='text/javascript'>";
echo "alert('Your message has been send successfully');";
echo "</script>";

$_SESSION['profileupdate'] ="Profile Updated Successfully";

header("Location: updateaccount.php", true, 301);





?>


