<?php
namespace app\ctrl;

use app\model\testModel;

class indexCtrl extends \core\core
{
    public function index()
    {

        $data='hello world!';
        $title='视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
    public function test()
    {
    	
    	$data='test!';
    	$title='abc';
    	$this->assign('title', $title);
    	$this->assign('data', $data);
    	$this->display('test.html');
    }
}
