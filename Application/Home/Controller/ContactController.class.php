<?php
namespace Home\Controller;

use Think\Controller;

class ContactController extends BaseController
{
    public function index()
    {

        $this->display();

    }

    /**
     * 新增留言
     */
    public function create()
    {

        $param = I();

        $result = D('Comments')->Create($param);

        $this->ajaxReturn($result);

    }

}