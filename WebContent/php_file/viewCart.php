<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>view cart</title>
<link href="../css_file/style.css" rel="stylesheet" type="text/css">
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

<tr><td></td><td><a href="./checkOut.php"><button type="submit">Pay Here</button></a>
</td></tr>
</table>

</fieldset>
</head>
</html>