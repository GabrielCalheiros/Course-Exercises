<html>
    <head></head>
<form action="18.simpleCalc.php" method="get">
Number One: <input type="number" name="number1">
<br><br>
Number 2: <input type="number" name="number2">
<br><br>
<input type="submit">
</form>
<br><br>
Answer: <?php  echo $_GET["number1"]+$_GET["number2"]; ?>
</html>
