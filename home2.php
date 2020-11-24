<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: log.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: home.php");
  }
?>

<html>
    <head>
        <title>Udana Entertainment</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
     </head>
    <body>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="images/logo.PNG" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-     controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.php">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                     <?php  if (isset($_SESSION['email'])) : ?>  
                    <li class="nav-item">
                        <a class="nav-link" href="home2.php?logout='1'">logout</a>
                    </li>
                    <li class="nav-item" id="welcome">
                        <p class="nav-link">Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
                    </li>
                    <?php endif ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <script> 
            var i=0; 
            var images=[]; 
            var time=3000; 
            images[0]='images/vehical.jpg'; 
            images[1]='images/mobile.jpg'; 
            images[2]='images/land.jpg'; 
            
            function changeImg()
            { 
                document.slide.src=images[i]; 
                if(i<images.length-1) 
                { 
                    i++; 
                } else 
                { 
                    i=0; 
                } 
                setTimeout("changeImg()",time); 
            } 
            window.onload=changeImg; 
        </script> 
        <img name="slide" width="100%" height="500" id="slideshow"> 
        <hr id="slide">
        <h5 class="package">Packages</h5>
        <hr class="package" id="slide1">
        
                <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Bootstrap Card -packages -->
                <div class="card" style="width:20rem;">
                    <img src="images/image.jpg" alt="Package One" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">Primary Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park<br><br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b> 10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 6 Hours<br><br>
                            <b>Amount:-</b> Lkr 9,999.00
                        </p>
                        <a href="packages.php?item=Primary" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width:20rem;">
                    <img src="images/image2.jpg" alt="Package Two" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">Ordinary Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Air dragoen<br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b>10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 8 Hours<br><br>
                            <b>Amount:-</b> Lkr 14,999.00
                        </p>
                        <a href="packages.php?item=Ordinary" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width:20rem;">
                    <img src="images/image2.jpg" alt="Package Two" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">Premium Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Air dragoen<br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b>10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 1 Day<br><br>
                            <b>Amount:-</b> Lkr 24,999.00
                        </p>
                        <a href="packages.php?item=Premium" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width:20rem;">
                    <img src="images/image2.jpg" alt="Package Four" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">Gold Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Air dragoen<br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b>10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 2 Days<br><br>
                            <b>Amount:-</b> Lkr 29,999.00
                        </p>
                        <a href="packages.php?item=Gold" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width:20rem;">
                    <img src="images/image2.jpg" alt="Package Five" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">Platinum Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Air dragoen<br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b>10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 3 Days<br><br>
                            <b>Amount:-</b> Lkr 34,999.00
                        </p>
                        <a href="packages.php?item=Platinum" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card" style="width:20rem;">
                    <img src="images/image2.jpg" alt="Package Six" class="card-img-top" id="package">
                    <div class="card-body">
                        <h5 class="card-title">VIP Package</h5>
                        <p class="card-text">
                            <b>Feachers:-</b> 1 Bounce+ 1 Water Park &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ Air dragoen<br>
                            <b>Bounce:-</b> 19X17 Squre feet<br><br>
                            <b>Water Park:-</b> 21X19 Squre feet<br><br>
                            <b>Delivery:-</b>10 Km area free delivery <br>(50 Lkr per Extra Km)<br><br>
                            <b>Duration:-</b> 7 Days<br><br>
                            <b>Amount:-</b> Lkr 49,999.00
                        </p>
                        <a href="packages.php?item=VIP" class="btn btn-primary">Pick me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){

        $('.col-4-lg').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>
        <br>
        <label class="develop">Devoloped by &copy; Sachith Ariyathilaka</label>
        <?php      
    $db = mysqli_connect('localhost', 'root', '', 'fast_sell');


if (isset($_POST['now'])) {
    
 
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $operator1 = $_POST['item1'];
  $distance = $_POST['distance'];

$query = "INSERT INTO packages (name,address,number,package,distance) 
  			  VALUES('$name','$address','$number', $operator '$distance')";
  	mysqli_query($db, $query);
    
    $message = "succusfull!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
 
}
                    
?>
    </body>
</html>