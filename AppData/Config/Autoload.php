<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 21/01/2019
 * Time: 10:14 PM
 */

namespace AppData\Config;
class Autoload
{
    public static function run()
    {
        spl_autoload_register(function ($class)
        {
            $ruta=str_replace("\\",'/',$class).'.php';
            //echo $ruta;
            require_once ($ruta);
        });
    }
}