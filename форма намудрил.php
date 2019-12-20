<?php

if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
// Переменные формы
$n = 'Alex';
$s = 'Ivanov';
?>
<p align="center" class="ord">ORDER <p>
  
    name <input type="text" name="name" value=<?php echo $n ?> />
 
    <br>
 
    surname <input type="text" name="surname" value=<?php echo $s ?> />
	<p>Введите пример :<?php echo ' '.$n.' '.$s ?></p>

	
<form  action="" method="post">
    
Name  <input type="text" name="personal[name]" /><br />
   Surname <input type="text" name="personal[fio]" /><br />
    <select sicy ="Sity[]">
        <option value="Minsk">Minsk</option>
        <option value="Brest">Brest</option>
  
    </select><br />
    <input type="submit" value="Вывести" />
	
	</Form>