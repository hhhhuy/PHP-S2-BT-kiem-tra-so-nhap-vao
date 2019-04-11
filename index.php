<?php

function calc($x, $y)
{
    $add = $x + $y;
    $sub = $x - $y;
    $mul = $x * $y;
    $div = $x / $y;
    echo "add x + y = " . $add . "<br>";
    echo "sub x - y = " . $sub . "<br>";
    echo "mul x * y = " . $mul . "<br>";
    try {
        if ($x = $y === 0 || $y === 0)
            echo "/ by zero";
        else echo "div x / y = " . $div;
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

calc(0, 0);