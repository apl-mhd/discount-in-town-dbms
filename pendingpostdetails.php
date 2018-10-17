<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');
include('header.php');
//print_r($_SESSION);


if(isset($_SESSION['userid'])){



}


//$sqlUpdate= "UPDATE `comment` SET `commentstatus`= WHERE 1"
?>

<body>

<div class="container">
    <div class="row">

        <?php
        if (isset($_GET['postid'])){
           // echo 'get is set';

            $postid = $_GET['postid'];
            $_SESSION['postid'] = $postid;

        }

        else {
            echo 'set failed';
             $postid = $_SESSION['postid'];

            //
            //print_r($_SESSION);
        }



        $sql = "SELECT * FROM post
                JOIN location ON location.id = post.locationid
                JOIN category ON post.categoryid = category.id
                WHERE post.postid = '$postid'";

        $result = $con->query($sql);

        $row = $result->fetch_assoc();

        $img = $row['imglink'];
        $postdesc = $row['postdesc'];
        $img = str_replace(' ', '', $img);
        $lat = $row['latitude'];
        $long = $row['longitude'];

        $postUserId = $row['userid'];

        $_SESSION['postUserId'] =$postUserId;
        //echo  '<br>'.'foound'.$row['userid'];


       // echo  $row['postid'];

            echo  '

                     <div class="col-md-4 col-md-offset-2 lead"> 


                <div class="thumbnail">'

                . '
                   <img style="height:300px;" class="img" src="img/'. $img . '">'.'

                    <div class="caption" style="font-size: 14px">'.'
                        <h4><del> '  . $row['discountrate']  . '% </del>'. ' Discount ' .'</h4>
                        <h4>'.'Location: ' . $row['locationname']  . '</h4>
                        <h4>'.'' . $row['expire'] . ' Days left' .'</h4>
                        <p>'.'' . $row['postdesc']  .'</p> 
                        
                         <button type="button" class="btn btn-success "> 
                        <a href="delete.php?postid=' .$postid .' ">Delete</a> </button>  
                        <button type="button" class="btn btn-danger "> 
                        <a href="approvepost.php?postid=' .$postid .' ">Approve</a> </button>
                    
                     
                        
     

                    </div>
                </div>
            </div>
                    
                  ';



        ?>

        <div class="col-md-6">

            <div style="padding:10px">
                <div style="height: 300px; width: 100%;" id="map">

                </div>
            </div>

        </div>



    </div>



   </div>






</div>



<script type="text/javascript">

    var map;

    function initMap() {
        var latitude = <?php echo $lat;?>;
        var longitude = <?php echo $long; ?>;

        var myLatLng = {lat: latitude, lng: longitude};

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 14,
            disableDoubleClickZoom: true, // disable the default map zoom on double click
        });

/*
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });*/


        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var beachMarker = new google.maps.Marker({
            position:  myLatLng,
            map: map,
            icon: image
        });

    }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2WSeqOcNthSSbkEU1Y4mb3BHyfHpn8g&callback=initMap"
        async defer>

</script>




</body>

</html>

<?php $con->close(); ?>