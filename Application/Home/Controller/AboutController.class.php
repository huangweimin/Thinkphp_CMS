<?php
namespace Home\Controller;

use Think\Controller;

class AboutController extends Controller
{
    public function index()
    {

        $data = D('About')->getAbout();

        $this->assign('about', $data);

        $this->display();

    }

    public function edit()
    {
        $do = I('do');

        if(empty($do)){

            $this->display();

        }else{

            $data = "ajax";

            $this->ajaxReturn($data);

        }
    }
}