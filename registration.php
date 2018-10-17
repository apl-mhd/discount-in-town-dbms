



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



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>


<body>

<div class="container-fluid registrationpage" style="background-color: ">



    <div class="row registrationrow">


        <div class="col-md-4 offset-md-4">
            <form action="reginsert.php" method="post">

                <div class="form-group row">
                    <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fname" class="form-control" id="firstname" placeholder="First Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lname" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="email"  class="form-control" id="email" placeholder="Email">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone"  class="form-control" id="phone" placeholder="+8801">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="pass" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="cpass" class="col-sm-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="cpass"  class="form-control" id="cpass" placeholder="Confirm Password">
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
