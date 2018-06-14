<?php
namespace Admin\Controller;

use Think\Controller;

class CommentsController extends BaseController
{
    /**
     * 获取留言列表
     */
    public function index()
    {
    	
    	$list = D('Comments')->Get();

        $this->assign('comments_list', $list);

        $this->display();

    }

    /**
     * 删除留言
     */
    public function del()
    {

        $param = I();

        $result = D('Comments')->Del($param);

        $this->ajaxReturn($result);

    }

}