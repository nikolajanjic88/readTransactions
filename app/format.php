<?php

declare(strict_types=1);

function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}


function amountColor(string $str): string
{
  return strpos($str, '-') === false ?
         "<span style='color:green'>{$str}</span>" : 
         "<span style='color:red'>{$str}</span>";
}