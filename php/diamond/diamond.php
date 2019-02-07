<?php

function diamond(string $start): array
{
    $char = isset($start[0]) ? strtoupper($start[0]) : "A";

    $diamond = [];

    $chars = array_merge(range('A', $char), array_slice(range($char, 'A'), 1));

    $aCode = ord('A');
    $size = count($chars);
    $middle = intdiv($size, 2);

    foreach ($chars as $char) {
        $row = str_repeat(' ', $size);

        $row[$middle - (ord($char) - $aCode)] = $char;
        $row[$middle + (ord($char) - $aCode)] = $char;

        $diamond[] = $row;
    }

    return $diamond;
}