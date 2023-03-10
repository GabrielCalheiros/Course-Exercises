<html>
<head></head>
<form action="21.checkbox.php" method="post">
aple<input type="checkbox" name="fruits[]" value="aple"><br>
orange<input type="checkbox" name="fruits[]" value="orange"><br>
grape<input type="checkbox" name="fruits[]" value="grape"><br>
banana<input type="checkbox" name="fruits[]" value="banana"><br>
strawberry<input type="checkbox" name="fruits[]" value="strawberry"><br>

<input type="submit">
</form>
<br><br>


<?php  
echo $_POST["name"];

$fruits = $_POST["fruits"];
foreach($fruits as $i){
    echo $i."<br>";
}


/* */

?>
</html>
