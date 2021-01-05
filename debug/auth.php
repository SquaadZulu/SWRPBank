<!DOCTYPE html>
<html>
<head>
</head>
    <title>Debug Portal</title>
<body>
<div>
<h1> Enter Passcode </h1>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="password" id="PC" name="passcode">
<input type="submit"  value="Auth">
</form>
<?php
// define variables and set to empty values
$passcode = "";
$ca1 = "88224646";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $pass = $_POST["passcode"];
}

if ($pass == $ca1) {
    echo "Passcode accepted!";
    header("Location: menu.php");
} elseif ($pass == ""){
    echo "Passcode required.";
} else {
    echo "Passcode invalid.";
}
?>
</body>
</html>