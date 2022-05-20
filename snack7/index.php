<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe = [
    [
        'name' => 'marco',
        'cognome' => 'deluca',
        'voti' => [5,6,5,9,7],
    ],
    [
        'name' => 'marco',
        'cognome' => 'deluca',
        'voti' => [5,3,6,8,9,7],
    ],
    [
        'name' => 'luca',
        'cognome' => 'deluca',
        'voti' => [5,4,8,8,9,7],
    ],
    [
        'name' => 'paolo',
        'cognome' => 'galileo',
        'voti' => [5,4,7,8,9,7],
    ],
];

function calcolomedia($num){
    $quantita = count($num);
    $voto = 0;
    foreach($num as $n){
        $voto += $n;
    }
    return $voto/$quantita;
};

for($i = 0; $i < count($classe); $i++){
    $media = calcolomedia($classe[$i]['voti']);
    echo '<pre>'.$classe[$i]['name'].$classe[$i]['cognome'].'|'.round($media,2).PHP_EOL.'</pre>';
};

?>