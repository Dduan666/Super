<?php
namespace app\Console\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
//        $index = new Index();
//        return $index->fetch();
        return $this->fetch('index');

    }
}
