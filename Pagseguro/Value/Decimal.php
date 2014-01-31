<?php

namespace Italodom\PagseguroBundle\Pagseguro\Value;

class Decimal
{
    public static function replaceComma($value)
    {
        if (strpos($value, ',') !== false) {
            return (double) str_replace(',', '.', $value);
        } else {
            return (double) $value;
        }
    }
}