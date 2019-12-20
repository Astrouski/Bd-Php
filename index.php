  <!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">   
    </head>
    <body>
        
<?php

echo "<table border='12'>";

for ($i=1; $i<11; $i++)
{
echo "<tr>";
for ($y=1; $y<11; $y++)
{
$$currentValue2 = ($i*10-10)+($y);
$currentValue = ($i*10-10)+($y);
if ((($i*10-10)+$y)%13===0) {
echo '<td style="color: white;">'.( ($i*10-10)+($y) ). "</td>";
}
else if ((($i*10-10)+$y)%5===0){
echo '<td style="color: red;">'.( ($i*10-10)+($y) ). "</td>";
}
else if ((($i*10-10)+$y)%7===0) {
echo '<td style="color: green;">'.( ($i*10-10)+($y) ). "</td>";
}
else if (($currentValue >= 41 && $currentValue <= 50) ) {
echo '<td style="font-size:48px;">'.( ($i*10-10)+($y) ). "</td>";
}
else if (($currentValue >= 71 && $currentValue <= 80) && $currentValue % 2 === 0) {
echo '<td style="color: white;">'.( ($i*10-10)+($y) ). "</td>";
}
else {
echo '<td>'.( ($i*10-10)+($y) ). "</td>";
}
}
echo "</tr>";
}

echo "</table>";
?>
    </body>
</html>
