<?php

function bubbleSort($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        // Une itération complète du tri à bulle
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparaison des éléments adjacents
            if ($arr[$j] > $arr[$j + 1]) {
                // Échange des éléments si l'élément actuel est plus grand que le suivant
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

// Exemple d'utilisation
$numbers = array(5, 3, 8, 2, 1, 4);
$sortedNumbers = bubbleSort($numbers);

// Affichage du tableau trié
foreach ($sortedNumbers as $number) {
    echo $number . " ";
}

