<html>
<head></head>
<form action="24.switch.php" method="post">
Grade: <input type="text"  name="grade"><br><br>
<input type="submit">
</form>
<br><br>


<?php  

$grade = $_POST["grade"];


switch($grade){

    case "A":
        echo "You did amazing!";
        break;
        
    case "B":
        echo "You did pretty good!";
        break;

    case "F":
        echo "You Failed!";
        break;

    case "D":
        echo "You did pretty bad!";
        break;

    default:
        echo "Invalid Grade";
        break;
    
    }

?>
</html>
