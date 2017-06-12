<?php
namespace app\ctrl;

class indexCtrl extends \core\core
{
    public function index()
    {
        $temp= new \core\lib\model();
        $data='hello world!';
        $title='视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
}
