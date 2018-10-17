<?php
/**
 * Created by PhpStorm.
 * User: apelmahmud
 * Date: 02/04/2017
 * Time: 3:24 PM
 */?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>Discount In Town</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<nav class="navbar  navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Discount In Town</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


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
            <img class="simg" src="https://goo.gl/VXygYY" alt="Los Angeles" style="height: 400px; width:100%">


            <div class="carousel-caption d-none  d-md-block">
                <h4>50% discount of all product</h4>
            </div>

        </div>

        <div class="carousel-item item">
            <img class="simg" src="https://goo.gl/VXygYY" alt="Chicago" style="height: 400px; width:100%">

            <div class="carousel-caption d-none  d-md-block">
                <h4>50% discount of all product</h4>
            </div>
        </div>

        <div class="carousel-item item">
            <img class="simg" src="https://goo.gl/VXygYY" alt="New york" style="height: 400px; width:100%">

            <div class="carousel-caption d-none  d-md-block">
                <h4>50% discount of all product</h4>
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

    <div class="col-md-3 bgb leftsidebar">


        <form>

            <div class="chekboxheding">
                <p id="elec" > <i class="fas fa-plus-circle">

                    </i> Electornics <i class="fas fa-tv"></i> </p>
            </div>

            <div id="electronics" class="checkboxgroup" >	 <!--Start electronics section-->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Mobile <i class="fas fa-mobile-alt"></i>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Mobile Accessories
                        <i class="fas fa-headphones-alt"></i>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Computer
                        <i class="fas fa-laptop-code"></i>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Computer Accessories
                        <i class="fas fa-tv"></i>
                    </label>
                </div>

            </div>				<!--End electronics section-->



            <!--Start vehical section-->


            <div class="chekboxheding">
                <p id="vehical" > <i class="fas fa-plus-circle">

                    </i> Vehical <i class="fas fa-car"></i>
            </div>

            <div id="vehicalcheck" class="checkboxgroup" >	 <!--Start electronics section-->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Car
                        <i class="fas fa-car"></i>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name=""> Motor Cycle
                        <i class="fas fa-motorcycle"></i>
                    </label>
                </div>

            </div>				<!--End electronics section-->





            <!--End Vehical section-->


            <div class="checkbox">
                <label>
                    <input type="checkbox">Shoes
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox">Cloth
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox">Food
                </label>
            </div>

            <button type="submit" class="btn btn-success">Search</button>

        </form>
    </div>			<!-- EndLeft side bar-->


    <!--start content-->


    <div class="col-md-9 maincontent">
        <div class="row"> <!--start row-->
            <div class="col-md-6 lead">


                <div class="thumbnail">
                    <img class="" src="img/apex.jpg">

                    <div class="caption">
                        <h3><del> 10% flat discount</del></h3>

                        <button type="button" class="btn btn-success form-control">Click</button>

                    </div>
                </div>
            </div>


            <div class="col-md-6 lead">


                <div class="thumbnail">
                    <img class="" src="img/apex.jpg">

                    <div class="caption">
                        <h3><del> 10% flat discount</del></h3>

                        <button type="button" class="btn btn-success form-control">Click</button>

                    </div>
                </div>
            </div>
        </div>	  <!--END ROW-->

        <div class="row"> <!--start row-->
            <div class="col-md-6 lead">


                <div class="thumbnail">
                    <img class="" src="img/apex.jpg">

                    <div class="caption">
                        <h3><del> 10% flat discount</del></h3>

                        <button type="button" class="btn btn-success form-control">Click</button>

                    </div>
                </div>
            </div>


            <div class="col-md-6 lead">


                <div class="thumbnail">
                    <img class="" src="img/apex.jpg">

                    <div class="caption">
                        <h3><del> 10% flat discount</del></h3>

                        <button type="button" class="btn btn-success form-control">Click</button>

                    </div>
                </div>
            </div>
        </div>    <!--END ROW-->





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
