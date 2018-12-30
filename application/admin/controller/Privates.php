<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26
 * Time: 22:19
 */

namespace app\admin\controller;


use think\Db;

class Privates extends Index
{
    public function pass()
    {
        return $this->fetch();
    }

    public function passList()
    {
      exit;
        $factor=$_GET;
        $data=Db::name('password')->page($factor['page'],$factor['limit'])->select();
        $res = [
            'code' => 0,
            'msg' => '加载完成',
            'count' => 1000,
            'data' => $data
        ];
        return json($res);
    }
}