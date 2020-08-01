<?php

namespace app\controller;

use app\BaseController;
use think\facade\View;
use think\Log;

class Index extends ResponseController
{

    public function login()
    {
        $data = input("post.");
        $res = (new \app\service\Admin())->login($data);
        if ($res) {
            return $this->renderSuccess("登陆成功");
        }
        return $this->renderError("用户名或密码错误");
    }

    public function signup()
    {
        $data = input("post.");
        $res = (new \app\service\Admin())->signup($data);
//        echo $res;
        if ($res == 1) {
            return $this->renderSuccess("注册成功");
        } elseif ($res == -1) {
            return $this->renderError("两次密码不一致");
        } elseif ($res == -2) {
            return $this->renderError("已经注册");
        }
    }
}
