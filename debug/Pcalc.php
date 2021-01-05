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
        <select name="action">
            <option value="add">Deposit</option>
            <option value="subtract">Withdraw</option>
        <input name="v2"/>

        <input type="submit" name="Submit" value="submit"/>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $v1=$_POST["v1"];
     $v2=$_POST["v2"];
     $op=$_POST["action"];

     if ($op=="add"){
         $result = $v1+$v2;
     } else {
         $result = $v1-$v2;
     }
    echo "$result";
     


}
?>
</body>
</html>