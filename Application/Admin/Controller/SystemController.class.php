<?php
namespace Admin\Controller;

use Think\Controller;

class SystemController extends BaseController
{
    /**
     * 读取系统配置
     */
    public function index()
    {
    	$param = I();

        $result = D('System')->Get($param);

        $this->assign('site_detail',$result);

        $this->display();

    }

    /**
     * 设置系统配置
     */
    public function save()
    {

        $param = I();

        $result = D('System')->Edit($param);

        $this->ajaxReturn($result);

    }


}