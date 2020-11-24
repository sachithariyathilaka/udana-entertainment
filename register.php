<?php include('server.php') ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/register.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
         <script src="bootstrap/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            body{
                background-image: url(images/back.jpg);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" method="post" action="server.php">
                        <h1>Register Here!!</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="num">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Re-type Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-type Password" name="re-password">
                        </div>
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> I Agree for the licence &amp; Agreements
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name="submit">Sign Up</button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
            <label class="develop">Devoloped by &copy; Sachith Ariyathilaka</label>
    </body>
</html>