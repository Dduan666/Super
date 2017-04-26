<?php
namespace app\console\controller;
use app\admin\model\Admin;
use think\Loader;
use think\View;

class Test
{
    public function test()
    {
//        $data = Db::table('user')->select();
//        var_dump($data);
//        $user = Admin::get(1);
//        echo $user->name;
        $user = D('login');
        var_dump($user);
//        return 'hello world';
    }
}





