<?php
function fibonacci($n)
{
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    echo $fib[0];
    echo ", ";
    echo $fib[1];

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo ", ";
        echo $fib[$i];
    }
}
fibonacci(15);