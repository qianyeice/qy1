<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/9
 * Time: 10:45
 */

namespace app\admin\controller;

use app\home\Admin;

class Index extends Admin
{
    public function index()
    {
        $msg = [
            'title' => '猫与三尾狐',
            'beian' => '蜀ICP备18038067号-1',
            'mail' => 'qianyeice@163.com'
        ];
        $this->assign('msg', $msg);
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }


}