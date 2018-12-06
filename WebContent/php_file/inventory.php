<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory</title>
<link href="../css_file/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="inventory_main">
<h1>Choose Car</h1>
<form method="POST" action="./viewCart.php">
<table>
<tr><th>Type</th><th>Price</th></tr>
<tr><td><input type="radio" name="model" required value="SUV">SUV</td><td>$100 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Compact">Compact</td><td>$120 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Midsize">Midsize</td><td>$150 per day</td></tr>
<tr><td><input type="radio" name="model" required value="Luxury">Luxury</td><td>$200 per day</td></tr>
</table>
<button type="submit">Select</button>
</form>
</div>


</body>
</html>
