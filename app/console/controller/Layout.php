<?php
namespace app\console\controller;
use think\controller;
class Layout extends Controller
{
    public function index_layout()
    {
//        $index = new Index();
//        return $index->fetch();
        return $this->fetch('index_layout');

    }
}
