<?php

function sieve(int $base): array
{
    if ($base < 2) {
        return [];
    }

    $numbers = [2] + (array)@range(1, $base, 2);
    $dividers = [];

    if (($cap = (int)floor(sqrt($base))) > 1) {
        $dividers = range(3, $cap, 2);
    }

    foreach ($dividers as $dividerKey => $dividerValue) {
        foreach ($numbers as $key => $number) {
            if (($number !== $dividerValue) && ($number % $dividerValue === 0)) {
                unset($numbers[$key]);
            }
        }
    }

    return array_values($numbers);
}