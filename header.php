<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


    <title>Discount In Town</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<nav class="navbar  navbar-dark bg-dark" style="background:#1abc9c">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Discount In Town</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>
            <form action="search.php" method="get" style="position: relative;left: 100px;" class="navbar-form navbar-left">
                <div class="form-group">
                    <input style="" id="tags" type="text" class="form-control" name="search" placeholder="Pizza">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">


                <?php
                if (isset($_SESSION['email'])){
                    echo "<li>". "<a href='post.php'>" . 'Post Add' ."</a>"  ."</li>";
                    echo "<li>". "<a href='#'>" .$_SESSION['email'] ."</a>"  ."</li>";

                echo '
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seting <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="aboutme.php">Account Seting</a></li>
                        <li><a href="post.php">Add Post</a></li>';

                if($_SESSION['usertype'] == 1){

                    echo  '<li><a href="adminpanel.php">Admin Panel</a></li>';

                }

/*
                            if ($_SESSION['usertype'] == 1)
                             echo   '<li><a href="adminpanel.php">Admin Panel</a></li> ';

                            }*/

                    echo '   
                       


                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
                
                ';


                }
                else
                    echo "<li><a href='login.php'>Login</a></li>";
                ?>






            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php

$searchArr = array('burger' => 'food', 'pizza' => 'food',
    'kacchi' => 'food','fried chiken' => 'food', 'chiken' => 'food',
    'headphone' => 'mobileacc','ram' => 'computeracc', 'mouse'=> 'computeracc',
    'laptop' =>'computer', 'desktop'=>'computer');



?>

<script>

    $( function() {
        var availableTags = [
            "Mobile",
            "Bike",
            "Computer",
            "Cloth",
            "Food",
            "Fridge",
            "AC",
            "TV",
            "Shoes",
            "Car",
            "Desktop",
            "Burger",
            "pizza",
            "Kacchi",
            "Fried chicken",
            "Chicken",
            "Head Phone",
            "RAM",
            "Mouse",
            "Laptop",
            "Desktop"

        ];
        $( "#tags" ).autocomplete({
            source: availableTags
        });
    } );



</script>