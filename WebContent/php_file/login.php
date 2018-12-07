<?php

$error = '';
$username = '';
$password = '';

function clean_text($string){
    $string = trim($string); // remove white space from left and right of string
    $string = stripslashes($string); // remove back slashes from string
    $string = htmlspecialchars($string); // convert special chars into HTML entities
    return $string;
}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $password = $_POST["password"];

    // file() reads a file into an array. Each array element contains a line from the file
    $file = file('credentials.csv');

    $csv[] = '';
    foreach($file as $k){
        // explode() breaks a string into an array by a delimiter
        $csv[] = explode(',', $k);
    }

    // count how many lines/element are in the file/array
    $count = count($file);

    $found = false;

    // traverse the elements in 'csv' array to get the username and password. csv is a matrix array
    for($i = 1; $i <= $count; $i++){
        for($j = 1; $j <= 1; $j++){
            $y = clean_text($csv[$i][$j]);
            $x = clean_text($csv[$i][$j+1]);
            if($y == $name && $x == $password){
                $found = true;
            }
            break;
        }
    }

    if($found){
        header('Location: ../html_file/menu.html');
    }

    if(!$found){
        $error .= '<p><label class="text-danger">Please enter a correct username or password</label></p>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css_file/login.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:900" rel="stylesheet">
</head>
<body>
    <header>On-the-Go Car Rental</header>
    <div class="gamelogo"></div>
    <div class="form">
        <form method="POST">
            <div>
                <!-- Display error after processing the form-->
                <?php echo $error; ?>

                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="name">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password">

                <button id="loginBtn" type="submit" name="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">Remember Me
                </label>
            </div>
            <br>
            <span class="createacc">New User? <a href="register.php">Create Account</a></span>
        </form>
    </div>
<br>
<br>
<br>
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