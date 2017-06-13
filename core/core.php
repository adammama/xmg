<?php
namespace core;

class core
{
    public static $classMap=array();
    public $assign;
    public static function run()
    {
        \core\lib\log::init();
        $route= new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlfile)) {
            include $ctrlfile;
            $ctrl=new $cltrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'    action:'.$action);
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
        $filepath=APP.'/views/'.$file;
        if (is_file($filepath)) {
            //extract($this->assign);
            //include $file;
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                    'cache' => XMG.'/runtime/twig',
                    'debug'=>DEBUG
            ));
            //$template = $twig->load('index.html');
            $template=$twig->loadTemplate($file);
            //$template->render($this->assign);
            $template->display($this->assign?$this->assign:array());
        }
    }
}
