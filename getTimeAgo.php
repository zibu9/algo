<?php

    function getTimeAgo($date) {
        $timestamp = strtotime($date);
        $currentTime = time();
        $difference = $currentTime - $timestamp;

        $timeTypes = array(
            array(60, 'seconde', 'secondes'),
            array(60, 'minute', 'minutes'),
            array(24, 'heure', 'heures'),
            array(30, 'jour', 'jours'),
            array(12, 'mois', 'mois'),
            array(PHP_INT_MAX, 'an', 'ans')
        );

        foreach ($timeTypes as $unit) {
            if ($difference < $unit[0]) {
                $difference = round($difference);
                $type = ($difference > 1) ? $unit[2] : $unit[1];
                return "Il y a " . $difference . " " . $type;
            }
            $difference /= $unit[0];
        }
    }


    echo getTimeAgo("2023-04-30 10:41:03");

