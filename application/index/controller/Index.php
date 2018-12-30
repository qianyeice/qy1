<?php

namespace app\index\controller;
use think\App;
use think\Config;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();

    }

}
