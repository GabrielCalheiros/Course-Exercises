<html>
<head></head>
<br><br>


<?php  
class Chef {


function makeChicken(){echo "The chef makes chiken <br>";}
function makeSalad(){echo "The chef makes salad <br>";}
function makebeef(){echo "The chef makes beef <br>";}

}

class ItalianChef extends Chef{

function makePasta(){echo "The chef makes pasta<br>";}

}

$chef = new Chef();
$Italianchef = new ItalianChef();
$chef->makeChicken();
$Italianchef->makeChicken();
$Italianchef->makePasta();

?>
</html>
