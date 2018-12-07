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
<fieldset>
<legend>Order information:</legend>
<table>
<tr><th>Order</th><th>Price</th></tr>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$type ="";
	$price=0;
	if($_POST['model']=="SUV"){
		$type=$_POST['model'];
		$price=100;
	}
	else if($_POST['model']=="Compact"){
		$type=$_POST['model'];
		$price=120;
	}
	else if($_POST['model']=="Midsize"){
		$type=$_POST['model'];
		$price=150;
	}
	else if($_POST['model']=="Luxury"){
		$type=$_POST['model'];
		$price=200;
	}
	else if($_POST['size']=="SUV"){
		$type=$_POST['size'];
		$price=10;
	}
	else if($_POST['size']=="Midsize"){
		$type=$_POST['size'];
		$price=15;
	}
	else if($_POST['size']=="Luxury"){
		$type=$_POST['size'];
		$price=20;
	}
	else if($_POST['size']=="VIP"){
		$type=$_POST['size'];
		$price=30;
	}
	echo "<tr><td>".$type."</td><td>   $".$price."</td></tr>";
	$_SESSION['total'] = $price;
}
?>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td>---------------------------------------------------------</td><td>----</td>
<tr><td></td><td>Total:  $<?php echo $price;?></td>

<tr><td></td><td><a href="./checkOut.php"><button type="submit" class="mbtn">Pay Here</button></a>
</td></tr>
</table>

</fieldset>
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