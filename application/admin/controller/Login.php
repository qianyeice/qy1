<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/9
 * Time: 10:47
 */

namespace app\admin\controller;


use think\Controller;

class Login extends Controller
{
    public function index(){
        return $this->fetch();
    }

}