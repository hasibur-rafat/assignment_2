<?php

$a = 0;
$b = 1;
$c = 0;

while ($c < 10) {
    $i = $a + $b;
    if ($i > 100) {
        break;
    }
    echo $i . " ";
    $a = $b;
    $b = $i;
    $c++;
}

