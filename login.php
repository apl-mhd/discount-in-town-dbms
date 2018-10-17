

<?php include('header.php');?>
<body>



<div class="container-fluid loginpage " style="background: #34495e; position: relative; top:-10px">


    <div class="row regpading">

        <div class="col-md-4  col-md-offset-4">

            <form action="loginphp.php" method="get" >
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pass" class="form-control" id="pwd">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger form-control">Login</button>
                </div>


                <span> Don't have an account ? </span> <span class="register"><a href="registration.php">Sign up now.</a></span>

            </form>

        </div>

    </div>
</div>


</body>
</html>
