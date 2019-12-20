<?php


$arr = [2,3.4,'gt',false, null];

var_dump($arr);

echo $arr[2];

$fields = ['name', 'age', 'phon'];

$values = ['alex',18,'123321123'];
for($i=0; $i<=2; $i++){
    echo $fields [$i].''.$values[$i].'<hr>';
}