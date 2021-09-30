<?php

require __DIR__ . '/../vendor/autoload.php';

function capitalize($text)
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
