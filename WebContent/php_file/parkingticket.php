<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory</title>
<link href="../css_file/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="inventory_main">
<h1>Choose Parking</h1>
<form method="POST" action="./viewCart.php">
<table>
<tr><th>Size</th><th>7AM - 12PM</th><th>1PM - 7PM</th></tr>
<tr><td><input type="radio" name="size" required value="SUV">SUV</td><td>$10</td><td>$8</td></tr>
<tr><td><input type="radio" name="size" required value="Midsize">Midsize</td><td>$15</td><td>$12</td></tr>
<tr><td><input type="radio" name="size" required value="Luxury">Luxury</td><td>$20</td><td>$18</td></tr>
<tr><td><input type="radio" name="size" required value="VIP">VIP</td><td>$30</td><td>$28</td></tr>

</table>
<button type="submit">Select</button>
</form>
</div>


</body>
</html>
