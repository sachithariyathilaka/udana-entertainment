<!DOCTYPE html>
<html>
    <head>
	   <title>Order Now</title>
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
       <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/post.css">
    </head>
    <body style="background-image:url(images/post.jpg)">
        <div class="container contact-form">
            <h4>Price List</h4><br>
            <p><b>Bounce:-</b> 4,499.00 Lkr per Hour (Including 10 Km Free Transport)</p>
            <p><b>Water Park:-</b> 4,499.00 Lkr per Hour (Including 10 Km Free Transport)</p>
            <p><b>Air Dragoen:-</b> 2,499.00 Lkr per Hour (Including 10 Km Free Transport)</p><br> 
            
            <form method="post">
                Select Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <select name="item" id="select">
                    <option value="1">Bounce</option>
                    <option value="2">Water Park</option>
                    <option value="3">Dragoen</option>
                    <option value="4">Bounce &amp; Water Park</option>
                    <option value="5">Dragoen &amp; Water Park</option>
                    <option value="6">Bounce &amp; Dragoen</option>
                    <option value="7">Bounce &amp; Water Park &amp; Dragoen</option>
                </select><br><br>
                Duration(Hour)<input type="text" name="hour" id="select1" placeholder="Enter Number Of Hours"><br><br>
                Distance(Km)<input type="text" name="distance" placeholder="Enter Distance of Km" id="select2"><br><br>
                <?php
                    if(isset($_POST['cal'])){
                    $hour = $_POST['hour'];
                    $distance = $_POST['distance'];
                    $operator = $_POST['item'];
                        
  
                ?>
                <p class="amount" name="output">Total Amount(Lkr):-  <?php
 if($distance>= 10){   
switch($operator){ case "1":
   echo (4499 * $hour) + (($distance - 10)*50); 
   break;
   case "2":
   echo (4499 * $hour) + (($distance - 10)*50);
   break;
   case "3":
   echo (2499 * $hour) + (($distance - 10)*50); 
   break;
   case "4":
   echo (8998 * $hour) + (($distance - 10)*50);
   break;
   case "5":
   echo (6998 * $hour) + (($distance - 10)*50);
   break;
   case "6":
   echo (6998 * $hour) + (($distance - 10)*50);
   break;
   case "7":
   echo (11497 * $hour) + (($distance - 10)*50);
   break;
   default:
   echo "Please Use Only Numbers";
   break;
                 }
                 }
        else{
            switch($operator){ case "1":
   echo (4499 * $hour); 
   break;
   case "2":
   echo (4499 * $hour);
   break;
   case "3":
   echo (2499 * $hour); 
   break;
   case "4":
   echo (8998 * $hour);
   break;
   case "5":
   echo (6998 * $hour);
   break;
   case "6":
   echo (6998 * $hour);
   break;
   case "7":
   echo (11497 * $hour);
   break;
   default:
   echo "Please Use Only Numbers";
   break;
            
        }
  }
                    }
                
            $db = mysqli_connect('localhost', 'root', '', 'fast_sell');
                
            if (isset($_POST['submit'])) {


              $name = mysqli_real_escape_string($db, $_POST['name']);
              $address = mysqli_real_escape_string($db, $_POST['address']);
              $number = mysqli_real_escape_string($db, $_POST['number']);
              $hour1 = $_POST['hour1'];
              $distance1 = $_POST['distance1'];
              $operator1 = $_POST['item1'];

                $query = "INSERT INTO form_details (Name,Address,Phone_number,distance,duration,item) 
                          VALUES('$name','$address','$number', '$distance1', '$hour1', '$operator1')";
                mysqli_query($db, $query);

                $message = "succusfull!!";
                echo "<script type='text/javascript'>alert('$message');</script>";

}
                
                 //get num rows
                $db = mysqli_connect('localhost', 'root', '', 'fast_sell');
                $query = "SELECT count(*) AS total FROM packages"; 
                $result = mysqli_query($db,$query); 
                $values = mysqli_fetch_assoc($result); 
                $num_rows = $values['total'] + 109;
                    ?></p>
                
            <input type="submit" class="btn btn-primary" name="cal" value="Calculate" id="cal"><br><br>
            <h4>Contact Information</h4><br>
            Order No<input type="text" id="order" name="order" value="<?php echo $num_rows;?>"><br><br>
            Select Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <select name="item1" id="select">
                    <option value="bounce">Bounce</option>
                    <option value="waterpark">Water Park</option>
                    <option value="dragoen">Dragoen</option>
                    <option value="bounce_waterpark">Bounce &amp; Water Park</option>
                    <option value="dragoen_waterpark">Dragoen &amp; Water Park</option>
                    <option value="bounce_dragoen">Bounce &amp; Dragoen</option>
                    <option value="bounce_waterpark_dragoen">Bounce &amp; Water Park &amp; Dragoen</option>
                </select><br><br>
                Duration(Hour)<input type="text" name="hour1" id="select1" placeholder="Enter Number Of Hours"><br><br>
                Distance(Km)<input type="text" name="distance1" placeholder="Enter Distance of Km" id="select2"><br><br>
                Name<input type="text" name="name" id="name" placeholder="Enter Your Name"><br><br>
                Address<input type="text" name="address" id="address" placeholder="Enter Your Address"><br><br>
                Phone Number<input type="text" name="number" id="number" placeholder="Enter Your Phone Number"><br><br> 
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="payment">
            </form>
        </div>
        <label class="develop">Devoloped by &copy; Sachith Ariyathilaka</label>
</body>
</html>