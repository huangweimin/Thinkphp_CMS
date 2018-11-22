<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends BaseController
{
    /**
     * 获取列表
     */
    public function index()
    {
    	
    	$list = D('User')->Get();

        $this->assign('user_list', $list);

        $this->display();

    }

    /**
     * 删除
     */
    public function del()
    {

        $param = I();

        $result = D('User')->Del($param);

        $this->ajaxReturn($result);

    }

    /**
     * 新增/修改
     */
    public function create()
    {

        $do = I('do');

        if (empty($do)) {

            $title = "创建用户";

            $param = I();

            if ($param){

                $title = "修改用户";

                $map['id'] = $param['id'];

                $detail = M('user')->where($map)->order('id desc')->find();

                $this->assign('detail', $detail);
           
            }

            $this->assign('title', $title);

            $this->display();

        } elseif ($do == 'create') {

            $param = I();

            $result = D('User')->Create($param);

            $this->ajaxReturn($result);

        }  elseif ($do == 'edit') {

            $param = I();

            $result = D('User')->Edit($param);

            $this->ajaxReturn($result);

        }

    }

}