<?php

$n = '';
$e = '';
$p = '';
$a = '';

// file() reads a file into an array. Each array element contains a line from the file
$file = file("information.csv");

$csv[] = '';
foreach($file as $k){
    $csv[] = explode(',',$k);
}

$count = count($file);

if(!empty($csv)) {
    for ($i = 1; $i <= $count; $i++) {
        for ($j = 1; $j <= 1; $j++) {
            $n = $csv[$i][$j]; // name read from file
            $e = $csv[$i][$j + 1]; // email read from file
            $p = $csv[$i][$j + 2]; // phone number read from file
            $a = $csv[$i][$j + 3]; // address read from file
        }
    }
}

$name = $n;
$email = $e;
$phone = $p;
$address = $a;


if(isset($_POST["submit"])){

    $file_open = fopen("information.csv", "a+");

    // file() reads a file into an array. Each array element contains a line from the file
    $file = file("information.csv");

    $csv[] = '';
    foreach($file as $k){
        $csv[] = explode(',',$k);
    }

    $count = count($file);

    if(!empty($csv)) {
        for ($i = 1; $i <= $count; $i++) {
            for ($j = 1; $j <= 1; $j++) {
                $n = $csv[$i][$j]; // name read from file
                $e = $csv[$i][$j + 1]; // email read from file
                $p = $csv[$i][$j + 2]; // phone number read from file
                $a = $csv[$i][$j + 3]; // address read from file
            }
        }
    }

    if(empty($_POST["name"]) && !empty($csv)){
        $name = $n; // if user did not enter a name to update, name is unchanged so use previous name in file
    } else {
        $name = $_POST["name"];
    }

    if(empty($_POST["email"]) && !empty($csv)){
        $email = $e; // if user did not enter a name to update, name is unchanged so use previous name in file
    } else {
        $email = $_POST["email"];
    }

    if(empty($_POST["phone"]) && !empty($csv)){
        $phone = $p; // if user did not enter a name to update, name is unchanged so use previous name in file
    } else {
        $phone = $_POST["phone"];
    }

    if(empty($_POST["address"]) && !empty($csv)){
        $address = $a; // if user did not enter a name to update, name is unchanged so use previous name in file
    } else {
        $address = $_POST["address"];
    }

    $form_data = array (
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address
    );

    fputcsv($file_open, $form_data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css_file/login.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

<div class="header">
    <ul id="nav">
        <li><a href="../html_file/menu.html">Home</i></a></li>
        <li><a href="inventory.php">Car Rental</i></a></li>
        <li><a href="parkingticket.php">Buy Parking</i></a></li>
        <li><a href="profile.php">Profile</i></a></li>
        <li><a href="login.php">Log Out</i></a></li>
    </ul>
</div>

<header>On-the-Go Car Rental</header>


<div class="profile">
    <label class="fields">Name: <?php echo $name; ?></label>
    <br>
    <label class="fields">Email: <?php echo $email; ?></label>
    <br>
    <label class="fields">Phone: <?php echo $phone; ?></label>
    <br>
    <label class="fields">Address: <?php echo $address; ?></label>
</div>

<div class="form">
    <form class="signup" method="POST">
        <div>
            <p id="signupp">Update Your Profile</p>
            <hr>

            <label for="uname"><b>Full Name</b></label>
            <input type="text" placeholder="Full Name" name="name">

            <label for="psw"><b>Email</b></label>
            <input type="text" placeholder="Email" name="email">

            <label for="psw"><b>Phone Number</b></label>
            <input type="text" placeholder="Phone Number" name="phone">

            <label for="psw"><b>Address</b></label>
            <input type="text" placeholder="Address" name="address">


            <div class="clearfix">
                <button type="submit" name="submit" class="profilebtn">Submit</button>
            </div>
        </div>
        <br>
    </form>
</div>

<div class="footer">
    <span>Powered By: InfiniteLoop</span>
    <ul id="icon-list">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
</div>


</body>
</html>

