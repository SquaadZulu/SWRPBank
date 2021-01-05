<!DOCTYPE html>
<html>
<head>
</head>
    <title>Debug Portal</title>
<body>
<div>
<h1> Enter Passcode </h1>
</div>
<input type="text" id="PC" name="passcode">
<input type="submit"  value="Auth">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
// define variables and set to empty values
$passcode = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $passcode = test_input($_POST["passcode"]);
}
if ($passcode = "88224646") {
    echo yeet;
}
?>
</body>
</html>