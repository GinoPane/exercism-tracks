<?php

/**
 * @param string $a
 * @param string $b
 * @return int
 */
function distance(string $a, string $b): int
{
    if (strlen($a) !== strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    return count(array_diff_assoc(str_split(strtoupper($a)), str_split(strtoupper($b))));
}
