<?php
namespace app\Console\controller;
//use think\Controller;
use think\Controller;

class User extends Controller
{
    public function login()
    {
//        $this->success('chengg','www.baidu.com');
        return $this->fetch('login');
//        return $this->fetch('login');
    }
}
