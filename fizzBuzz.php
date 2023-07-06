<?php

function fizzBuzz($begin, $end) {
    if ($begin > $end) {
        return false;
    }
    $i = $begin;
    $result = '';
    while ($i <= $end) {
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            $result = "{$result} FizzBuzz ";
        }
        elseif ($i % 3 == 0) {
            $result = "{$result} Fizz ";
            }
        elseif ($i % 5 == 0) {
            $result = "{$result} Buzz ";
            }  
        else {
            $result = "{$result} {$i} ";
            }
        $i = $i + 1;
    }
    return $result;
}