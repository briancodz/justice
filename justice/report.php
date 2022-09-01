<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Crime Online</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<header>
    <nav class="nav">
        <a href="index.html" class="nav__link">Home</a>
        <a href="report.php" class="nav__link">Report</a>
        <a href="wanted.html" class="nav__link">Wanted</a>
        <a href="contact.html" class="nav__link">Call Centre</a>
    </nav>
</header>

<div class="container">
    <form class="" action="" method="POST" >

        <div class="form">
        <label for="time">Time</label>
        <input type="time" name="time" class="time" required value="">
        </div>

        <div class="form">
        <label for="date">Date</label>
        <input type="date" name="date" class="date" required value="">
        </div>
      
        <div class="form">
        <label for="address">Crime Address</label>
        <input type="text" name="address" class="address" required value="">
        </div>

        <div class="form">
        <label for="details" class="details">Details</label>
        <textarea cols="40" rows="5" type="text" name="details"  class="details" required value="" placeholder=" Descibe the Events "></textarea>
        </div>
        <br>

        <button type="submit" name="submit" class="button">Report Anonymously</button>


    </form>

    </div>
    


<?php
require 'connection.php';

if(isset($_POST["submit"])){
    

    $time = $_POST["time"];
    $date = $_POST["date"];
    $address = $_POST["address"];
    $details = $_POST["details"];

    $query = "INSERT INTO tb_data VALUES( '$time', '$date', '$address', '$details')";
    mysqli_query($conn, $query);

    if($time && $date  && $address && $details)
    {
    //  To redirect form on a particular page
    header("Location: thankyou.html");
    }
    else{
    ?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
    }
   


}



?>


</body>
</html>
