<?php

namespace App\Helpers;

class ViewHelper
{
    public static function view($name, $data = [])
    {
        extract($data);
        return require __DIR__ . "/../views/{$name}.php";
    }
}
