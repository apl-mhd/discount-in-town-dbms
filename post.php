<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */




include('header.php');


?>

<body>

<div class="container-fluid loginpage">


    <div class="row postrow">



        <div class="col-md-4 col-md-offset-2">
            <form action="postinsert.php" method="post"   enctype="multipart/form-data">

                <div class="row form-group">  <!--Start category row-->

                    <div class="col-sm-4">
                        <p>Select Product</p>
                    </div>

                    <div class="col-sm-8">

                        <select name="category"  class="form-control">   <!--select category -->

                            <optgroup label="Electronics">
                                <option value="mobile">Mobile</option>
                                <option value="mobileacc">Mobile Accessories</option>
                                <option value="computer">Computer</option>
                                <option value="computeracc">Computer Accessories</option>
                                <option value="tv">TV</option>
                                <option value="fridge">Fridge</option>
                                <option value="ac">Air Conditioner</option>
                                <option value="gadget">Gadget</option>
                                <option value="otherelec">Other Electronics</option>
                            </optgroup>

                            <optgroup label="Food Item">
                                <option  value="food">Food Item</option>
                            </optgroup>

                            <optgroup label="Cloth">
                                <option  value="cloth">Cloth</option>
                                <option  value="shoes">Shoes</option>
                            </optgroup>


                            <optgroup label="Vehicle">
                                <option  value="car">Car</option>
                                <option  value="motorcycle">Motorcycle</option>
                            </optgroup>


                        </select>


                    </div>
                </div>  <!--End category row-->



                <!--Latitude longitude-->


                <div class="form-group row">
                    <label for="perc" class="col-sm-4 col-form-label">Latitude</label>
                    <div class="col-sm-8">
                        <input type="text" id="lat" name="latitude"   class="form-control"  placeholder="Latitude">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="perc" class="col-sm-4 col-form-label">Longitude</label>
                    <div class="col-sm-8">
                        <input type="text" id="lon" placeholder="Longitude"  name="longitude"  class="form-control" >
                    </div>
                </div>

                <div class="row form-group">  <!--Start Location row-->
                    <div class="col-sm-4">
                        <p>Select Region</p>
                    </div>
                    <div class="col-sm-8">
                        <select name="location"  class="form-control">   <!--start location -->
                            <option  value="dhanmondi">Dhanmondi</option>
                            <option value="banani">Banani</option>
                            <option value="gulshan">Gulshan</option>
                            <option value="uttara">Uttara</option>
                            <option value="mirpur">Mirpur</option>
                            <option value="badda">Badda</option>
                            <option value="natunbazar">Natun Bazar</option>
                        </select>
                    </div>
                </div>  <!--End Location row-->







                <div class="form-group row">
                    <label for="perc" class="col-sm-4 col-form-label">Discount Rate</label>
                    <div class="col-sm-8">
                        <input type="number" name="discount"  class="form-control" id="perc" placeholder="Discount Rate">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="exp" class="col-sm-4 col-form-label">Expire Days</label>
                    <div class="col-sm-8">

                        <input type="number" name="expire"  class="form-control" id="exp" placeholder="Expire After 00 Days">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="info" class="col-sm-4 col-form-label">Product Description</label>
                    <div class="col-sm-8">
                        <textarea name="postinfo" class="form-control" id="info"></textarea>
                    </div>
                </div>





                <div class="form-group row">
                    <label for="file" class="col-sm-4 col-form-label">Chose File</label>
                    <div class="col-sm-8">
                        <input type="file" name="file"  class="" id="file">
                    </div>
                </div>





                <div class="form-group row">
                    <div class="col-md-9 col-md-offset-3 ">
                        <p>It's take 4-5 business hours</p>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary form-control">Post</button>
                    </div>
                </div>


            </form>


        </div> <!--end from column-->

        <div class="col-md-4">



            <div style="padding:10px">
                <div style="height: 300px;width: 600px;" id="map"></div>
            </div>





        </div>

    </div>





</div>


<script type="text/javascript">

    var map;

    function initMap() {
        var latitude = 23.746466; // YOUR LATITUDE VALUE
        var longitude = 90.376015; // YOUR LONGITUDE VALUE

        var myLatLng = {lat: latitude, lng: longitude};

        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 14,
            disableDoubleClickZoom: true, // disable the default map zoom on double click
        });

        // Update lat/long value of div when anywhere in the map is clicked
        google.maps.event.addListener(map,'click',function(event) {
            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('lon').value =  event.latLng.lng();
        });

        /* Update lat/long value of div when you move the mouse over the map
        google.maps.event.addListener(map,'mousemove',function(event) {
            document.getElementById('latmoved').innerHTML = event.latLng.lat();
            document.getElementById('longmoved').innerHTML = event.latLng.lng();
        });*/





    }
</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2WSeqOcNthSSbkEU1Y4mb3BHyfHpn8g&callback=initMap"
        async defer></script>



<script type="text/javascript">
    document.getElementById("Lati").value="aakdgn"
</script>





</body>
</html>
