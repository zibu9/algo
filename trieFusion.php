<?php
function mergeSort($arr) {
    $n = count($arr);
    
    if ($n <= 1) {
        return $arr;
    }
    
    // Divise le tableau en deux moitiés
    $mid = floor($n / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    
    // Trie récursivement les deux moitiés
    $left = mergeSort($left);
    $right = mergeSort($right);
    
    // Fusionne les deux moitiés triées
    return merge($left, $right);
}

function merge($left, $right) {
    $result = array();
    $i = 0;
    $j = 0;
    
    // Fusionne les éléments des deux moitiés triées en ordre croissant
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }
    
    // Ajoute les éléments restants de la première moitié
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    
    // Ajoute les éléments restants de la deuxième moitié
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }
    
    return $result;
}

// Exemple d'utilisation
$numbers = array(5, 3, 8, 2, 1, 4);
$sortedNumbers = mergeSort($numbers);

// Affichage du tableau trié
foreach ($sortedNumbers as $number) {
    echo $number . " ";
}
