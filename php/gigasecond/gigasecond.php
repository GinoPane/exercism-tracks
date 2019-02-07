<?php

function from(DateTime $date): DateTime
{
    $seconds = $date->getTimestamp() + 1000000000;

    return new DateTime("@{$seconds}");
}