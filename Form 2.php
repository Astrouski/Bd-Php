<?php
$n = 'Alex';
$s = 'Alexeev';
?>
<p class="ord">ORDER<p>
    <lable>
    name <input type="text" name="name" value=<?php echo $n ?> />
    </lable>
    <br>
    <lable>
    surname <input type="text" name="surname" value=<?php echo $s ?> />
    </lable>
    <p>Пример:<?php echo ' '.$n.' '.$s ?></p>