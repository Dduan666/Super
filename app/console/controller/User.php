<?php
namespace app\Console\controller;
//use think\Controller;
use app\admin\controller\Login;
use think\Controller;
use think\View;

class User extends Controller
{
    public function login()
    {
//        $user = new admin;
//        $user -> name = 'admin';
//        $user -> password = '123';
//        $user -> save();
        $list = Db::table('user') -> where('id',1) -> select();
        var_dump($list);
        return $this->fetch('login');
    }
}
