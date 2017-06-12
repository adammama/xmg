<?php
namespace core\lib;

class log
{
    static $class;
    public static function init()
    {
        $driver=config::get('DRIVER', 'log');
        $class='\core\lib\driver\log\\'.$driver;
        self::$class=new $class;
    }
    public static function log($name, $file = 'log')
    {
        self::$class->log($name, $file);
    }
}
