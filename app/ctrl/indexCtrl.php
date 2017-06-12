<?php
namespace app\ctrl;

class indexCtrl
{
    public function index()
    {
        p('it is index');
        $model=new \core\lib\model();
        $sql='select * from m_menu';
        $ret=$model->query($sql);
        p($ret->fetchAll());
    }
}
