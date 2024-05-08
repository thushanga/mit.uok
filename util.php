<?php

/* Copyright (C) 2024 emil - All Rights Reserved
 * You may use, distribute and modify this code under the
 * terms of the GPL license,
 */

/**
 * 
 * @param type $start
 * @param type $end
 * @param type $format
 * @return type
 */
function datesFromRange($start, $end, $format = 'Y-m-d') {
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach ($period as $date) {
        $array[] = $date->format($format);
    }
    
    return $array;
}

/**
 * @author emil
 */
spl_autoload_register(function ($class_name) {
    //test
});
?>
