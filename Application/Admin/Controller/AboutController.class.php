<?php
namespace Admin\Controller;

use Think\Controller;

class AboutController extends BaseController
{
    /**
     * 读取简介
     */
    public function index()
    {
    	$param = I();

        $result = D('About')->Get($param);

        $this->assign('about',$result);

        $this->display();

    }

    /**
     * 编辑简介
     */
    public function save()
    {

        $param = I();

        $result = D('About')->Edit($param);

        $this->ajaxReturn($result);

    }


}