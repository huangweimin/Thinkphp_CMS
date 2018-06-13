<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{

    public function _initialize()
    {

        $isLogin = session('isLogin');

        $username = session('username');

        $this->assign('username',$username);

        if($isLogin == 0) {

            $this->redirect('Admin/Login/index');

        } 

    }

}