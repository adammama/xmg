<?php
namespace app\ctrl;

use app\model\testModel;

class indexCtrl extends \core\core
{
    public function index()
    {
    	$model=new testModel();
    	$ret=$model->delOne(3);
    	dump($ret);
        $data='hello world!';
        $title='视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
