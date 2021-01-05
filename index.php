<?php
require_once('include/db.inc.php');
require_once('include/session.inc.php');
$_SESSION['usr-id'] = $_POST["usr-id"];
$_SESSION['passwd'] = $_POST["passwd"];


if ($_POST['usr-id'] !='' && $_POST['passwd'] !=''){
    echo "yeetus, all fields populated";
}
?>





<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="index,follow">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stormworks Bank Network (RP USE ONLY) [PRE-ALPHA]</title>

    <link href="css/1140.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container12">
    <header>
        <div class="row">
            <div class="column4" id="headtext">
                <hl id=logo>Stormworks Bank</hl>   
            </div>
        </div>
      



    </header>
    <form action="" method="POST" id="login">
        <div class="alert"></div>
        <div class="row">
            <div class="column6" id="userbox">
                <input type="text" class="large-fld" name="usr-id" value="" placeholder="User ID">
            </div>

        </div>
        <div class="row">
            <div class="column6" id="userbox">
                <input type="password" class="large-fld" name="passwd" value="" placeholder="Passcode">  
            </div>
        </div>
        <div class="row">
            <div class="column6" id="loginbutton">
                <input type="submit" class="large-btn large-magnify" name="login" value="Login">
            </div>
        </div>
        <div class="row">
            <div class="column6" id="registerbutton">
                <input type="submit" class="large-btn large-magnify" name="register" value="Register">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="column12" id="stripeydude">
            <img src="images/greenstripe.png">
        </div>
    </div>
    <div class="row">
        <div class="column10" id="foottext">
            <hl id="motto">Serving Stormworks roleplayers since 2020.</hl>
        </div>
        <div class="column2">
            <img src="images/lambda.png">
        </div>
    </div>
</div>
</body>
</html>
