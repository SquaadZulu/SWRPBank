<!DOCTYPE html>
<html>
<head>
</head>
    <title>Persistent Calculator</title>
<body>
<div>
<h1>Persistent Calculator</h1>
</div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input name="v1"/>
        <select name="action"/>
            <option value="add">Deposit</option>
            <option value="subtract">Withdraw</option>
        <input name="v2"/>

        <input type="submit" name="Submit" value="submit"/>
    </form>
</body>
</html>