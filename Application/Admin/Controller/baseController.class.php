<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{

    public function _initialize()
    {

        $isLogin = session('isLogin');

        if($isLogin == 0) {

            $this->redirect('Admin/Login/index');

        } 

    }

}