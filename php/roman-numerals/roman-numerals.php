<?php

/**
 * @param int $number
 * @return string
 */
function toRoman(int $number): string
{
    $decimalToRomanMap = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    $romanized = '';

    foreach ($decimalToRomanMap as $decimal => $roman) {
        while ($decimal <= $number) {
            $romanized .= $roman;
            $number -= $decimal;
        }
    }

    return $romanized;
}
