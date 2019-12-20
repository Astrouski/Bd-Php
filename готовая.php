  <!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">   
    </head>
    <body>
<?php
echo "<table border='12' sta>";

for ($i=1; $i<11; $i++)
{
echo "<tr>";
for ($y=1; $y<11; $y++)
{
$currentValue = ($i*10-10)+($y);
if ($currentValue%13===0) {    //деление на 13
echo '<td style="color: white;">'.( $currentValue ). "</td>";
}
else if ($currentValue%5===0){   // деление на 5
echo '<td style="color: red;">'.( $currentValue ). "</td>";
}
else if ($currentValue%7===0) {  // деление на 7
echo '<td style="color: green;">'.( $currentValue ). "</td>";
}
else if (($currentValue >= 81 && $currentValue <= 90) && $currentValue % 1 === 0) { // ссылки на числа
echo '<td> <a href="index.php">'.( $currentValue ). "</a></td>";
}
else if (($currentValue >= 40 && $currentValue <= 50) && $currentValue % 1 === 0) { // Шрифт px 48
echo '<td style="font-size:48px": white;">'.( $currentValue ). "</td>";
}
else if (($currentValue >= 71 && $currentValue <= 80) && $currentValue % 2 === 0) { // невидимая строка 
echo '<td style="color: white;">'.( $currentValue ). "</td>";
}
else {
echo '<td>'.( $currentValue ). "</td>";
}
}
echo "</tr>";
}
echo "</table>";
?>
   </body>
</html>
