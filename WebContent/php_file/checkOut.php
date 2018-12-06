<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory</title>
<link href="../css_file/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function check(){
  	var value = document.getElementById("cardNumber").value;    
  	var type  = getCreditCardType(value);
  	switch (type){
    	case "mastercard":
    		document.getElementById('card_type').innerHTML = "<img src=\"../images/mastercard.png\" class=\"card_icon\">"
        	break;

    	case "visa":
    		document.getElementById('card_type').innerHTML = "<img src=\"../images/visa.png\" class=\"card_icon\">"
        	break;
    	case "amex":
    		document.getElementById('card_type').innerHTML = "<img src=\"../images/amex.png\" class=\"card_icon\">"
        	break;	
    	default:
  	}
}

function getCreditCardType(accountNumber){
  	var result = "unknown";
  	if (/^5[1-5]/.test(accountNumber)){
    	result = "mastercard";
  	}
	else if (/^4/.test(accountNumber)){
    	result = "visa";
  	}
  	else if (/^3[47]/.test(accountNumber)){
    	result = "amex";
  	}
  	return result;
}


</script>
</head>
<body>

<div class="creditCard_infor">
	<h2>Payment Infor</h2>
	<table>
		<tr><th>Card Number</th><th>CVV</th></tr>
        <tr><td><input type="text" id="cardNumber" maxlength="16" onkeyup="check()"></td>
        <td><input type="text"  id="cvv" maxlength="3" size="3"></td></tr>                            
        <tr><td>Name On Card</td><td>Expiration Date</td></tr>
        <tr><td><input type="text" id="name"></td>
		<td><select>
			<option value="01">January</option>
            <option value="02">February </option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
           </select>
           <select>
           <option value="16"> 2018</option>
           <option value="17"> 2019</option>
           <option value="18"> 2020</option>
           <option value="19"> 2021</option>
           <option value="20"> 2022</option>
           <option value="21"> 2023</option>
           </select></td></tr>
        <tr><td></td><td id="card_type"></td></tr>
        <tr><td>Coupon Code:</td><td></td></tr>
        <tr><td><input type="text" id="name"></td></tr>
    </table>
    <br>
    <br>
    <h2>Billing Infor</h2>
    <div class="bill_container">
    <label>First Name: </label><input>
    <label>Last Name: </label><input>
    <br>
    <br>
    <label>Stree:</label><br>
    <input><br>
    <label>City</label><br>
    <input><br>
    <label>State: </label><br>
    <input size="2"><br>
    <label>Zip Code: </label><br>
    <input size="5"><br><br>
    </div>
    <a href="../html_file/final.html"><button type="submit">Submit</button></a>
    
</div>
<?php
$total = $_SESSION['total']
?>
</body>
</html>
