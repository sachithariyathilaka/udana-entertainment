<?php
include("server.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
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
        <div class="container-fluid" id="log">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form class="form-container" method="post" action="login.php">
                        <?php include('error.php'); ?>
                        <h1>Login Here!!</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <div class="checkbox">
                            <label>
                            <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name="submit">Sign in</button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
            <label class="develop">Devoloped by &copy; Sachith Ariyathilaka</label>
    </body>
</html>