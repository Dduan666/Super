<?php
namespace app\console\validate;
use think\Validate;
class User extends Validate
{
    protected $rule = [
        'username' => 'require|max:25',
        'password' => ''
    ];

}







