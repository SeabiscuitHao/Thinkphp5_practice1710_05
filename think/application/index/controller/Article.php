<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Article extends Base
{
    public function index()
    {
        $arid = input('arid');
        $articles = Db::name('article') -> find($arid);
        Db::name('article') -> where('id','=',$arid) -> setInc('click',1);
        $cates = Db::name('cate') -> find($articles['cateid']);
        // $this -> assign('articles',$articles);
        $this -> assign(array(
          'articles' => $articles,
          'cates' => $cates,
        ));
        return $this -> fetch('article');
    }
}
