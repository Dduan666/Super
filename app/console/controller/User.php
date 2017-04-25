<?php
namespace app\Console\controller;
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
        return view();
    }
}
