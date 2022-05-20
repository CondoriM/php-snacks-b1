<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$random = [];

for($i = 0; $i < 15; $i++){
    $caso = rand(0,1000);
    while(in_array($caso,$random)){
        array_push($random,$caso);
    }
}

var_dump($random);

?>