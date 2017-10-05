<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends Controller
{
    public function _initialize()
    {
        $cateres = Db::name('cate') -> order('id asc') -> select();
        $this -> assign('cateres',$cateres);
    }
}
