<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid loginpage">



    <div class="row postrow">

        <div class="col-md-4 offset-md-4">
            <form action="postinsert.php" method="get">



                <div class="row form-group">  <!--Start category row-->

                    <div class="col-sm-4">
                        <p>Select</p>
                    </div>

                    <div class="col-sm-8">

                <select name="category"  class="form-control">   <!--select category -->
                    
                    <optgroup label="Electronics">
                        <option  value="mobile">Mobile</option>
                        <option value="computer">Computer</option>
                        <option value="fridge">Fridge</option>
                        <option value="tv">TV</option>
                        <option value="otherelec">Other electronics</option>
                    </optgroup>

                    <optgroup label="Food Item">
                        <option  value="mobile">Food Item</option>
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
                                <option value="elephant">Elephant Road</option>
                        </select>
                    </div>
                </div>  <!--End Location row-->



                <div class="row form-group">  <!--Start Brand row-->
                    <div class="col-sm-4">
                        <p>Select Brand</p>
                    </div>
                    <div class="col-sm-8">
                        <select name="brand"  class="form-control">   <!--start Brand -->
                            <option  value="samsung">Samsung</option>
                            <option value="walton">Walton</option>
                            <option value="lg">LG</option>
                            <option value="sony">Sony</option>
                            <option value="bata">Bata</option>
                            <option value="apex">Apex Road</option>
                            <option value="yellow">Yellow</option>
                            <option value="arong">Arong</option>
                            <option value="ecstasy">Ecstasy</option>

                        </select>
                    </div>
                </div>  <!--End Location row-->








                <div class="form-group row">
                    <label for="perc" class="col-sm-4 col-form-label">Discount Rate</label>
                    <div class="col-sm-8">
                            <input type="number" name="percent"  class="form-control" id="perc" placeholder="Discount Rate">
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
                    <div class="col-md-9 offset-md-3 ">
                        <p>By signing up, I agree to Discount In Town's Terms, Privacy Policy.</p>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-9 offset-md-3">
                        <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                    </div>
                </div>


            </form>


        </div>

    </div>




</div>


</body>
</html>
