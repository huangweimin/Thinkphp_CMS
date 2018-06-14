<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends BaseController
{
    /**
     * 获取留言列表
     */
    public function index()
    {
    	
    	$list = D('User')->Get();

        $this->assign('user_list', $list);

        $this->display();

    }

    /**
     * 删除留言
     */
    public function del()
    {

        $param = I();

        $result = D('User')->Del($param);

        $this->ajaxReturn($result);

    }

}