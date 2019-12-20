<?php
$n = 'Alex';
$s = 'Ivanov';
$c = 'Minsk';
?>
<p class="ord">ORDER<p>
   name <input type="text" name="name" value=<?php echo $n ?> /><br>
    surname <input type="text" name="surname" value=<?php echo $s ?> /><br>
	city <input type="text" name="city" value=<?php echo $c ?> />
    <p>Пример:<?php echo ' '.$n.' '.$s ' '.$c.?></p>