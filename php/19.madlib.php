<html>
    <head></head>
<form action="19.madlib.php" method="get">
Color: <input type="text" name="color">
<br><br>
Plural Noun: <input type="text" name="plural">
<br><br>
Thing: <input type="text" name="thing">

<input type="submit">
</form>
<br><br>
Answer:<br> 
<?php  
$color = $_GET["color"];
$plural = $_GET["plural"];
$thing = $_GET["thing"];

echo "Roses are $color<br>";
echo "$plural are blue<br>";
echo "I love $thing<br>";
?>
</html>
