<?php

function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1):
        return;
    endif;
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

function displayFormat($format) {
    $formatDisplay = ["", "VHS", "DVD", "Streaming"];

    if ($format > 0 AND $format < 4):
        return $formatDisplay[$format];
    else:
        return "";
    endif;
}

?>