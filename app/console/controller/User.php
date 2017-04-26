<?php
namespace app\console\controller;
use app\admin\controller\Login;
use think\Controller;
use think\View;
use think\Loader;
class User
{
    /**
     * 后台登录首页
     */
    public function login()
    {
        $view = new View();
        $view->name = 'thinkphp5';
        return $view->fetch();
//        $data = 'thinkphp5';
//        $view->assign("data",$data);
//        return view();
    }
}
