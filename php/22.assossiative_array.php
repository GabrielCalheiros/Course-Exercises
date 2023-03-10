<html>
<head></head>
<form action="22.assossiative_array.php" method="post">
Name: <input type="text" name="student">
<input type="submit">
</form>
<br><br>


<?php  
$grades = [
    "Jim" => 10,
    "Pam" => 8,
    "Kleiton" => 7,
    "Martin" => 4,
];

echo $grades[$_POST["student"]];
/* */

?>
</html>
