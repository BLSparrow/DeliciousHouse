<?php


namespace App\Models;


class ShowData
{
    public static function showText($data, $length = 50, $symbols = '...')
    {
        return mb_substr($data, 0, $length) . $symbols;
    }
}