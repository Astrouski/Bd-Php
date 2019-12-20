<?php

$array =[
  'age'=> 12,
  'job'=> false ,
    'name' => 'alex',
 
];
echo $array['name'];
//add
$array ['Phone']= '+123541323';
echo '<hr>';
var_dump($array);
//edit
$array ['age'] =14;
echo '<hr>';
var_dump($array);
unset ($array['job']);
echo '<hr>';
var_dump($array);
// ddelete
unset ($array);
echo '<hr>';
var_dump($array);