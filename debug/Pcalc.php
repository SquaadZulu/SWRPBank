<!DOCTYPE html>
<html>
<head>
</head>
    <title>Persistent Calculator</title>
<body>
<div>
<h1>Persistent Calculator</h1>
</div>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input name="v1">
        <input name="v2">
        <input type="submit" name="Submit">
    </form>
</body>
</html>