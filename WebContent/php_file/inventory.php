<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css_file/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
    <div class="header">
            <ul id="nav">
                <li><a href="../html_file/menu.html">Home</i></a></li>
                <li><a href="../php_file/inventory.php">Car Rental</i></a></li>
                <li><a href="../php_file/parkingticket.php">Buy Parking</i></a></li>
                <li><a href="../php_file/profile.php">Profile</i></a></li>
                <li><a href="../php_file/login.php">Log Out</i></a></li>
            </ul>
    </div>

<div class="inventory_main">
<h1>Choose Car</h1>
<form method="POST" action="./viewCart.php">
<table class="inventory_table">
<tr><td>Type</td><td>Price</td></tr>
<tr><td><input type="radio" name="model" required value="SUV">SUV</td><td>$100 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Compact">Compact</td><td>$120 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Midsize">Midsize</td><td>$150 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Luxury">Luxury</td><td>$200 per day</td></tr>
</table>
<button type="submit" class="mbtn">Select</button>
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