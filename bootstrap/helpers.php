<?php

function formattedTimestamp($timestamp): string
{
    return date('d-m-y H:i', strtotime($timestamp));
}

function timeOfDayGreeting(): string
{
    date_default_timezone_set("Europe/Copenhagen");

    $greeting = '';
    $currentTime = intval(date('His'));

    if ($currentTime >= 050000 and $currentTime < 100000) :
        $greeting = 'Good morning';
    elseif ($currentTime >= 100000 and $currentTime < 120000) :
        $greeting = 'Good day';
    elseif ($currentTime >= 120000 and $currentTime < 170000) :
        $greeting = 'Good afternoon';
    elseif ($currentTime >= 170000 and $currentTime <= 235959) :
        $greeting = 'Good evening';
    else :
        $greeting = 'Good night';
    endif;

    return $greeting;
}

function getPercentageOf($part, $total, $decimals = 0)
{
    $percentage = $part / $total * 100;
    return round($percentage, $decimals) . '%';
}
