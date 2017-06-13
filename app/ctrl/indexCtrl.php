<?php
namespace app\ctrl;

use core\lib\model;

class indexCtrl extends \core\core
{
    public function index()
    {
    	$model=new model();
    	$ret=$model->select("test","*");
    	dump($ret);
        $data='hello world!';
        $title='视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
