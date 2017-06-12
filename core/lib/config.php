<?php
namespace core\lib;

class config
{
    static public $config=array();
    public static function get($name, $file)
    {
        if (isset(self::$config[$file])) {
            return self::$config[$file][$name];
        } else {
            $path=XMG.'/core/config/'.$file.'.php';
            if (is_file($path)) {
                $config=include $path;
                if (isset($config[$name])) {
                    self::$config[$file]=$config;
                    return $config[$name];
                } else {
                    throw new \Exception('没有这个配置项'.$name);
                }
            } else {
                throw new \Exception('没有这个配置文件'.$file);
            }
        }
    }
    public static function all($file)
    {
        if (isset(self::$config[$file])) {
            return self::$config[$file];
        } else {
            $path=XMG.'/core/config/'.$file.'.php';
            if (is_file($path)) {
                $config=include $path;
                self::$config[$file]=$config;
                return $config;
            } else {
                throw new \Exception('没有这个配置文件'.$file);
            }
        }
    }
}
