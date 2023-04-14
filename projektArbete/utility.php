<?php
function show(...$variable)
{

    if (count($variable) == 1) {
        echo "<pre>";
        echo var_dump($variable[0]);
        echo "</pre>";
    } else if (count($variable) == 2) {
        echo "<pre>";
        echo var_dump($variable[0]);
        echo "<pre>";
        echo var_dump($variable[1]);
        echo "</pre>";
    }
}
