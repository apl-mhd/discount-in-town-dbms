

<?php
include('connect.php');


$sql =   "SELECT imglink FROM post";

$result = $con->query($sql);

if($result ->num_rows > 0){

    while ($row = $result->fetch_assoc()){

        echo "<img src='data:image/jpeg;base64,".base64_encode($row['imglink'])."' width='100%' height='300'/>";

    }
}

?>

<?php
$conn->close();


?>
