<html>
    <head></head>
<form action="20.methods.php" method="post">
Name: <input type="text" name="name">
<br><br>
<input type="submit">
</form>
<br><br>
Answer:<br> 
<?php  
echo $_POST["name"];



/* get method shows in the url, post does not show, thats it*/

?>
</html>
