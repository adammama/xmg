<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 **/
define('XMG', realpath('./'));
define('CORE', XMG.'/core');
define('APP', XMG.'/app');
define('MODULE', 'app');
define('DEBUG', true);

include "vendor/autoload.php";

if (DEBUG) {
	$whoops = new \Whoops\Run;
	$errorTitle='框架出错了!';
	$option=new \Whoops\Handler\PrettyPageHandler();
	$option->setPageTitle($errorTitle);
	$whoops->pushHandler($option);
	$whoops->register();
    ini_set('display_error', 'on');
} else {
    ini_set('display_error', 'off');
}
include CORE.'/common/function.php';
include CORE.'/core.php';
spl_autoload_register('\core\core::load');

\core\core::run();
