<?php

$user = [
    'name'=>'alex',
    'surname' => 'ivanov',
 'age'=> '12',
    'phone'=>'34424234',
    'street'=> 'lenina',
];
foreach ( $user as $key => $values){
    echo $key.''.$value.'<hr>';   
}
echo '<h1>Shot user info<h1>';
foreach ( $user as $key => $values){
    if ($key === 'name' || $key === 'phone'){
        echo $key.''.$value.'<hr>'; 
    }
}echo '<h1>table user info<h1>';
echo '<table  border = "4">';
foreach ($user as $key => $value){
    echo  '<tr>';
     echo  '<td>';
     echo $i++;
      echo  '</td>';
        echo  '<td>';
      echo  $key;
       echo  '</td>';
        echo  '<td>';
        echo $value;
         echo  '<td>';
          echo  '</tr>';
          echo  '</tr>';
}
          echo '</table>';
          
         

