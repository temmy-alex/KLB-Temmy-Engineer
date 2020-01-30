<?php

foreach(range(1, 100) as $number)
{
    if($number % 3 != 0 && $number % 5 != 0)
    {
        echo $number . '<br/>';
        continue;
    }

    if($number % 3 == 0) {
        echo 'Kalbe';
    }

    if($number % 5 == 0) {
        echo 'Hebat';
    }

    if($number % 5 == 0 && $number % 3 == 0) {
        echo 'Kalbe Hebat';
    }

    echo '<br/>';
}