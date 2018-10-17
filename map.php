<html>
    <head>
        <title>Google Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>          
          #map { 
            height: 300px;    
            width: 600px;            
          }          
        </style>        
    </head>    
    <body>
        
        
        <div style="padding:10px">
            <div id="map"></div>
        </div>



        <?php
            echo 'dsaf;akldjfkadsjfkadja';
         ?>


    
        <script type="text/javascript">

        var map;
        
        function initMap() {                            
            var latitude = 23.746466; 
            var longitude = 90.376015; 
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });
            
         

            
     
        }
        </script> 


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2WSeqOcNthSSbkEU1Y4mb3BHyfHpn8g&callback=initMap"
        async defer>

        </script>

    




    </body>