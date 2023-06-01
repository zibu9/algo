<?php

function insertionSort($arr) {
    $n = count($arr);
    
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        
        // Déplace les éléments du sous-tableau trié vers la droite
        // jusqu'à trouver l'emplacement approprié pour insérer l'élément courant
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        
        $arr[$j + 1] = $key;
    }
    
    return $arr;
}

// Exemple d'utilisation
$numbers = array(5, 3, 8, 2, 1, 4);
$sortedNumbers = insertionSort($numbers);

// Affichage du tableau trié
foreach ($sortedNumbers as $number) {
    echo $number . " ";
}
