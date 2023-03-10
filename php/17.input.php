<html>
    <head></head>
<form action="17.input.php" method="get">
Name: <input type="text" name="name">
<br>
Age: <input type="number" name="age">
<input type="submit">
</form>
<br><br>
<?php 
echo $_GET["name"];
echo "<br>";
echo $_GET["age"];
?>
</html>
