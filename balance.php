<?php
require_once('include/db.inc.php');
require_once('include/session.inc.php');




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
<header>
        
<div class="container12">
        <div class=row>
            <div class=column5 id="headtext">
                <?php 
                    $_SESSION['client_id']=1;
                    if (!isset($_SESSION['client_id'])) {
                ?>
                <hl id="pocket">You are not logged in.</hl>
                 <?php  header("Location:http://swb.rp/index.php"); ?>
               

                <?php } else { ?>
                    <hl id="pocket">Pocket Balance:</hl>
                    <div class=row>
                        <div class=column5 id="headtext">
                            <hl id="bank">Bank Balance:</hl>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
     
</header>
<body>
<div class="row">
    <div class="column2">
        <input type="Submit" class="medium-btn large-magnify" name="deposit" value="Deposit">
    </div>
</div>
<div class="row">
    <div class="column2">
        <input type="Submit" class="medium-btn large-magnify" name="withdraw" value="Withdraw">
    </div>
</div>
<div class="row">
    <div class="column2">
        <input type="Submit" class="medium-btn large-magnify" name="Transfer" value="Transfer">
    </div>
    <div class="Column10">
        <input type="Submit" class=" medium-btn log-btn large-magnify" name="logout" value="Logout" href="index.php">
    </div>
</div>
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
</body>
</html>