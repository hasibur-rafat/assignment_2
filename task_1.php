<?php

function forloop($a, $b, $c){
    for($i = $a; $i <= $b; $i+=$c){
        if($i % 2 == 0){
            echo $i. ' ';
        }
    }
}

function whileloop($a, $b, $c){
    $i = $a;
    while($i<=$b){
        if($i % 2 == 0){
            echo $i. ' ';}
        $i = $i+$c;
    }
}

function dowhileloop($a, $b, $c){
    $i = $a;
    do{
        if($i % 2 == 0){
            echo $i. ' ';}
        $i = $i+$c;
    }while($i <=$b);
}

forloop(0, 20, 2);



