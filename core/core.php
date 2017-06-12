<?php
namespace core;

class core
{
    public static $classMap=array();
    public $assign;
    public static function run()
    {
        $route= new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlfile)) {
            include $ctrlfile;
            $ctrl=new $cltrlClass();
            $ctrl->$action();
        } else {
            throw new \Exception('找不控制器'.$ctrlClass);
        }
    }
    public static function load($class)
    {
        if (isset($classMap)) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file=XMG .'/'. $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class]=$class;
            } else {
                return false;
            }
        }
    }
    public function assign($name, $value)
    {
        $this->assign[$name]=$value;
    }
    public function display($file)
    {
        $file=APP.'/views/'.$file;
        if (is_file($file)) {
            extract($this->assign);
            include $file;
        }
    }
}
