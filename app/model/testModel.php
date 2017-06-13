<?php
namespace app\model;

use core\lib\model;

class testModel extends model
{
    public $table='test';
    public function lists()
    {
        $ret=$this->select($this->table, '*');
        return $ret;
    }
    public function getOne($id)
    {
    	$ret=$this->get($this->table,'*',array('id'=>$id));
    	return $ret;
    }
    public function setOne($id,$data)
    {
    	$ret=$this->update($this->table, $data,array('id'=>$id));
    	return $ret->rowCount();
    	
    }
    public function delOne($id)
    {
    	$ret=$this->delete($this->table, array('id'=>$id));
    	return $ret->rowCount();
    }
}
