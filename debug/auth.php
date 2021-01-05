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
<input type="text" id="PC" name="passcode">
<input type="submit"  value="Auth">
</form>
<?php
// define variables and set to empty values
$passcode = "";
$ca1 = "88224646";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
if ($_POST["passcode"] == $ca1) {
    echo yeet;
}
?>
</body>
</html>