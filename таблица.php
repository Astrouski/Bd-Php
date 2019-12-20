
<table align='center' border='2'>
<h1 class="heading-title">test1</h1>
<H2 class="green">test2</H2>
<h5 class="red">test</h5>
<h5 class="">test test</h5>
 <caption> простая таблица </caption> 
<?php for($i = 0; $i < 5; $i++) : ?>
  <tr><td style="background-color: #<?php printf( mt_rand(0, 999999)); ?>">01</td></tr>  
<th><td style="background-color: #<?php printf("%06d", mt_rand(0, 999999)); ?>">12</td></th>
<th><td style="background-color: #<?php printf("%06d", mt_rand(0, 999999)); ?>">22</td></th>
<th><td style="background-color: #<?php printf("%06d", mt_rand(0, 999999)); ?>">55</td></th>
<th><td style="background-color: #<?php printf("%06d", mt_rand(0, 999999)); ?>">66</td></th>
  <th><td style="background-color: #<?php printf("%06d", mt_rand(0, 999999)); ?>">77</td></th>
<?php endfor; ?>
</table>