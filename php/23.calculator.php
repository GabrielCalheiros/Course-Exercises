<html>
<head></head>
<form action="23.calculator.php" method="post">
First Number: <input type="number" step="0.1" name="num1"><br><br>
Operator: <input type="textbox" name="op"><br><br>
Second Number: <input type="number" step="0.1" name="num2"><br><br>
<input type="submit">
</form>
<br><br>


<?php  

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
echo $grades[$_POST["student"]];
/* */

if($op == "+"){echo $num1+$num2;}
elseif($op == "-"){echo $num1-$num2;}
elseif($op == "/"){echo $num1/$num2;}
elseif($op == "*"){echo $num1*$num2;}
else{
    echo "Invalid operator";
}

?>
</html>
