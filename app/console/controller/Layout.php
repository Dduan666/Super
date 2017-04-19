<?php
namespace app\Console\controller;
use think\Controller;
class Layout extends Controller
{
    public function index_layout()
    {
//        $index = new Index();
//        return $index->fetch();
        return $this->fetch('index_layout');

    }
}
