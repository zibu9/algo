<?php

$tableau = [
    (object) [
        'id' => '27',
        'client' => '5',
        'datactivity' => '2023-05-05 10:41:03',
    ],
    (object) [
        'id' => '26',
        'client' => '5',
        'objet' => 'SMS CLIENT',
        'datactivity' => '2023-05-05 10:39:28',
    ],
];

// Fonction de comparaison pour trier les objets par date d'activité
function comparerParDateActivite($a, $b) {
    return strtotime($a->datactivity) - strtotime($b->datactivity);
}

// Trier le tableau en utilisant la fonction de comparaison
usort($tableau, 'comparerParDateActivite');

// Afficher le tableau trié
foreach ($tableau as $objet) {
    echo $objet->id . ': ' . $objet->datactivity . "\n";
}
