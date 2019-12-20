<!doctype html>
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
  if ((($i >= 71) && ($i <= 80)) && ($i % 2 !== 0)) {
  echo $i;
            }
If ((($i*10-10)+$y)%13===0) {   //деление на 13 
echo '<td style="color: white;">'.( ($i*10-10)+($y) ). "</td>";
}
else if ($y % 5 === 0) {   //деление на 5 
echo '<td style="color: red;">'.( ($i*10-10)+($y) ). "</td>";
}
else if ($y % 7 == 0) {  // деление на 7
echo '<td style="color: green;">'.( ($i*10-10)+($y) ). "</td>";
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
