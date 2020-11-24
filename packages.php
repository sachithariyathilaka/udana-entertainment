<html>
    <head>
	   <title>Order Now</title>
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
       <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/packages.css">
    </head>
    <body style="background-image:url(images/post.jpg)">
        <div class="container contact-form">
            <h4>Package Information</h4><br><br>
            <form action="home2.php" method="post">
                <?php
                $item=$_GET['item'];
                //get num rows
                $db = mysqli_connect('localhost', 'root', '', 'fast_sell');
                $query = "SELECT count(*) AS total FROM packages"; 
                $result = mysqli_query($db,$query); 
                $values = mysqli_fetch_assoc($result); 
                $num_rows = $values['total'] + 8; 
                
                ?>
            Order No<input type="text" id="order" name="order" value="<?php echo $num_rows; ?>"><br><br>    
            Selected Package <input type="text" name="item1" id="select" value="<?php echo $item; ?>">";<br><br>   
            Distance(Km)<input type="text" name="distance" id="distance" placeholder="Enter Your Distance"><br><br>
            Name<input type="text" name="name" id="name" placeholder="Enter Your Name"><br><br>
            Address<input type="text" name="address" id="address" placeholder="Enter Your Address"><br><br>
            Phone Number<input type="text" name="number" id="number" placeholder="Enter Your Phone Number"><br><br><br> 
                <input type="submit" class="btn btn-primary" name="now" value="Submit" id="payment">
            </form>
            
        </div>
        <label class="develop">Devoloped by &copy; Sachith Ariyathilaka</label>
</body>
</html>