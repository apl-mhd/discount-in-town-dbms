<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

    include('connect.php');
    include ('header.php');


    $sqldelete = "SELECT p.postid  FROM post as p
                  WHERE  datediff(date_add(p.postdate, INTERVAL p.expire day), Curdate())<=0";

    $result = $con->query($sqldelete);

    $delArr = array();

    while ($row = $result->fetch_assoc()){

        array_push($delArr, $row['postid']);

    }

    $delIn = join(",",$delArr);
    
   // print_r($delIn);


    $sqldelete = "DELETE FROM post WHERE  postid in ($delIn)";

    $result = $con->query($sqldelete);

   // echo $sqldelete;





?>




<body>

<div class="container-fluid" style="padding: 0; margin: 0">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" s>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item item active" ">
            <img class="simg" src="img/slide.jpg" alt="Los Angeles" style="height: 400px; width:100%">


            <div class="carousel-caption d-none  d-md-block">
                <h4>30% Discount In All Product</h4>

            </div>

        </div>

        <div class="carousel-item item">
            <img class="simg" src="img/silde2.jpg" alt="Chicago" style="height: 400px; width:100%">

            <div class="carousel-caption d-none  d-md-block">
                <h4>50% Discount In All Product</h4>
                <p></p>
            </div>
        </div>

        <div class="carousel-item item">
            <img class="simg" src="img/silde2.jpg" alt="New york" style="height: 400px; width:100%">

            <div class="carousel-caption d-none  d-md-block">
                <h4>70% Discount In All Product</h4>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--Start  Left side bar-->


<div class="row maincontentbody" >

    <div class="col-md-3 bgb leftsidebar " style="height: 1000px;">


        <form action="filter.php" method="get">

         <div  class="holecheckbox">

            <div class="chekboxheding">
                <p id="elec" > <i class="fas fa-plus-circle">

                    </i> Electornics <i class="fas fa-tv"></i> </p>
            </div>

            <div id="electronics" class="checkboxgroup" >	 <!--Start electronics section-->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="1"> Mobile <i class="fas fa-mobile-alt"></i>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="2"> Mobile Accessories
                        <i class="fas fa-headphones-alt"></i>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="3"> Computer
                        <i class="fas fa-laptop-code"></i>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="4"> Computer Accessories
                        <i class="fas fa-tv"></i>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="5"> TV
                        <i class="fas fa-tv"></i>
                    </label>
                </div>




                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="6"> Fridge
                        <i class="fas fa-tv"></i>
                    </label>
                </div>



                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="7"> AC
                        <i class="fas fa-tv"></i>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="9">Other Electronics
                        <i class="fas fa-tv"></i>
                    </label>
                </div>








            </div>				<!--End electronics section-->



            <!--Start vehical section-->


            <div class="chekboxheding">
                <p id="vehical" > <i class="fas fa-plus-circle">

                    </i> Vehicle <i class="fas fa-car"></i>
            </div>

            <div id="vehicalcheck"  class="checkboxgroup" >	 <!--Start electronics section-->
                <!--<div class="checkbox">
                    <label>
                        <input type="checkbox"  name="electronics[]" value="12"> Car
                        <i class="fas fa-car"></i>
                    </label>
                </div>-->

                <div class="checkbox">
                    <label>
                        <input type="checkbox"   name="electronics[]" value="13"> Motor Cycle
                        <i class="fas fa-motorcycle"></i>
                    </label>
                </div>

            </div>				<!--End electronics section-->



            <!--start another section section-->


            <div class="chekboxheding">
                <p id="cloth" > <i class="fas fa-plus-circle">

                    </i> Cloth <i class="fas fa-tshirt"></i>
            </div>

            <div class="checkboxgroup">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="10">Shoes
                        <i class="fas fa-shoe-prints"></i>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="electronics[]" value="11">Cloth
                        <i class="fas fa-user-tie"></i>
                    </label>
                </div>



            </div>


             <!---food-->



             <div class="chekboxheding">
                 <p id="cloth" > <i class="fas fa-plus-circle">

                     </i> Food <i class="fas fa-utensils"></i>


             </div>

             <div class="checkboxgroup">
                 <div class="checkbox">
                     <label>
                         <input type="checkbox" name="electronics[]" value="14" >Food
                         <i class="fas fa-cookie-bite"></i>
                     </label>
                 </div>
             </div>



            <!--Start Location Section-->



            <div class="chekboxheding">
                <p id="location" > <i class="fas fa-plus-circle">

                    </i> Location <i class="fas fa-map-marked-alt"></i>
            </div>

            <div class=" checkboxgroup">

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]"  value="3">Banani
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="6">Badda
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="2">Dhanmondi
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="4">Gulshan
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="5">Mirpur
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="7">Natunbazar
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="location[]" value="1">Uttara
                    </label>
                </div>                  <!--End Location Section-->


            </div>


            <button type="submit" class="btn btn-success">Search</button>

         </div>

        </form>
    </div>			<!-- EndLeft side bar-->


    <!--start content-->


    <div class="col-md-9 maincontent">
        <div class="row"> <!--start row-->



            <?php

          //  print_r($_SESSION);
            /*$sql = "SELECT * FROM post order  by  rand() limit 10";*/


            $sql = "SELECT * FROM post 
        JOIN location ON location.id = post.locationid
        JOIN category ON post.categoryid = category.id where poststatus= 1 ORDER BY rand()  LIMIT 10 ";

            $result = $con->query($sql);

                while ($row = $result->fetch_assoc()){

                    $id = $row['postid'];
                    $img = $row['imglink'];
                    $userid= $row['userid'];


                    $img = str_replace(' ', '', $img);
                    echo  '

                     <div class="col-md-6 lead"> 


                <div class="thumbnail thumb">'

                  . '
                    <img style="height:300px;" class="img" src="img/'. $img . '">'.'

                    <div class="caption" style="font-size: 14px">'.'
                        <h4><del> '  . $row['discountrate']  . '% </del>'. ' Discount ' .'</h4>
                        <h4>'.'Location: ' . $row['locationname']  . '</h4>
                        <h4>'.'' . $row['expire'] . ' Days left' .'</h4>
                        <p>'.'' . $row['postdesc']  .'</p>
                        <a style="color: red" href="publicuserallpost.php?userid=' .$userid .' ">Post By</a> </button> 
                        
                        
                     <button type="button" class="btn btn-success form-control"> 
                        <a href="postdetails.php?postid=' .$id .' ">More Info</a> </button>  

                    </div>
                </div>
            </div>
                    
                    ';

                }

?>
        </div>	  <!--END ROW-->

        <div class="row"> <!--start row-->



        </div>



</div>

</div>

<script>





    $(document).ready(function(){
        $("#elec").click(function(){
            $("#electronics").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $("#vehical").click(function(){
            $("#vehicalcheck").slideToggle("slow");
        });
    });



</script>


</body>
</html>
<?php ?>