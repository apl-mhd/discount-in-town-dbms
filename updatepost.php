<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */

include('connect.php');
include('header.php');

?>


    <body>
    </div>


    <div class="wrapper">


        <?php include ('usersidebar.php')?>
<!--
        <div class="leftadmin">
            <div class="adminmenu">
                <ul class="menuouter">
                    <li><a href="aboutme.php">About Me</a> </li>
                    <li><a href="userallpost.php">My All Post</a> </li>
                    <li><a href="#">Reaply</a></li>
                    <li><a href="#">My Post Statistic</a></li>
                </ul>
            </div>

        </div>-->

        <div class="container-fluid admincontent bgg">
            <div style="padding-top: 100px" class="row postrow">
                <?php




                if(!isset($_SESSION['postupdate'])) {

                    $_SESSION['postupdate']= 'Update Fail';
                }


                $postId = $_GET['postid'];

                $_SESSION['postid'] = $postId;

             //   echo $postId;
/*
           $sqljoin =      "SELECT * FROM post 
JOIN location ON location.id = post.locationid
JOIN category ON post.categoryid = category.id
WHERE postid = 41 ";

           $joinResult = $con->query($sqljoin);

           print_r($joinResult);
*/





               // $userid = $_SESSION['postupdate'];




                $sql = "SELECT * FROM post where postid = '$postId' ";
                $result = $con->query($sql);

                $row = $result->fetch_assoc();

                $id = $row['postid'];
                $img = $row['imglink'];
                $description = $row['postdesc'];
                $locationId = $row['locationid'];
                $img = str_replace(' ', '', $img);

                $_SESSION['imglink'] = $img;

                $imgSession  =$_SESSION['imglink'];
                echo $imgSession;



              //  print_r($row);

                //$loc = "SELECT * FROM post where "

                /*query for locationid in location table*/
                $sqlLocation = "SELECT * FROM  location where  id = '$locationId' ";

                $queryLocation = $con->query($sqlLocation);

                $rowLocation = $queryLocation->fetch_assoc();




                /*query for Category in Category table*/
                /*Query for category id in category table*/
                $category = $row['categoryid'];


                $sqlCategory = "SELECT * FROM  category where  id = '$category' ";

                $queryCategory = $con->query($sqlCategory);
                $rowCategory = $queryCategory->fetch_assoc();


                echo  ' 
 
                   <div class="col-md-6 lead"> 


                <div class="thumbnail thumb">'

                    . '
                    <img style="height:300px;" class="img" src="img/'.$img .'">'.'

                    <div class="caption">'.'
                        <h3><del> '  . $row['discountrate']  . '% </del>'. ' Discount ' .'</h3>
                        <h3>'.'' . $row['expire'] . ' Days left' .'</h3>
                        
                        <h3>'.'Location: ' . $rowLocation['locationname']  . '</h3> 
                        <h4>'.'Category: ' . $rowCategory['subcategory']  . '</h4> 
                        <p> '.$description .' </p>
                        
                        <button type="button" class="btn btn-danger "> 
                        <a href="userdeletepost.php?postid=' .$id .' ">Delete</a> </button>  


                    </div>
                </div>
            </div>    
                
                
                <div class="col-md-5">
            <form action="updatepostInsert.php" method="post"   enctype="multipart/form-data">

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
                            </optgroup>
                        </select>


                    </div>
                </div>  <!--End category row-->




                <div class="row form-group">  <!--Start Location row-->
                    <div class="col-sm-4">
                        <p>Select Location</p>
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
                        <input type="number" name="discount"  value="' .$row['discountrate'] . '" class="form-control" id="perc" placeholder="Discount Rate">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="exp" class="col-sm-4 col-form-label">Expire Days</label>
                    <div class="col-sm-8">

                        <input type="number" name="expire" value="' .$row['expire'] . '"  class="form-control" id="exp" placeholder="Expire After 00 Days">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="info" class="col-sm-4 col-form-label">Product Description</label>
                    <div class="col-sm-8">
                        <textarea name="postinfo"   class="form-control" id="info">'. $row['postdesc'] . '</textarea>
                    </div>
                </div>





                <div class="form-group row">
                    <label for="file" class="col-sm-4 col-form-label">Chose File</label>
                    <div class="col-sm-8">
                        <input type="file" name="file"   class="" id="file">
                    </div>
                </div>





                <div class="form-group row">
                    <div class="col-md-9 col-md-offset-3 ">
                        <p>If you do not want to upload image please left it blank</p>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary form-control">Save Change</button>
                    </div>
                </div>


            </form>


        </div>

                
                
                    
                    ';

                ?>
            </div>
        </div>


    </div>




    <script>

        /*

            $(document).ready(function () {

                $("h2").click(function () {

                    $(".leftsidebar").animate({
                        width : 'toggle'
                    });
                    $("h2").hide();

                });

                $(".close").click(function () {
                    $(".leftsidebar").animate({
                        width : 'toggle',

                    });
                    $("h2").show();

                })

            });
        */

    </script>

    </body>

    </html>

<?php

$con->close();
?>