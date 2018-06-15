<?php
namespace Admin\Controller;

use Think\Controller;

class CustomController extends BaseController
{
    /**
     * 获取
     */
    public function index()
    {
    	
        $data = D('Custom')->Get();

        $this->assign('custom_list', $data);

        $this->display();

    }

    /**
     * 新增/修改
     */
    public function create()
    {

        $do = I('do');

        if (empty($do)) {

            $title = "创建自定义标签";

            $param = I();

            if ($param){

                $title = "修改自定义标签";

                $map['id'] = $param['id'];

                $custom_detail = M('custom')->where($map)->order('id desc')->find();

                $this->assign('custom_detail', $custom_detail);
           
            }

            $this->assign('title', $title);

            $this->display();

        } elseif ($do == 'create') {

            $param = I();

            $result = D('Custom')->Create($param);

            $this->ajaxReturn($result);

        }  elseif ($do == 'edit') {

            $param = I();

            $result = D('Custom')->Edit($param);

            $this->ajaxReturn($result);

        }

    }

    /**
     * 删除
     */
    public function del()
    {

        $param = I();

        $result = D('Custom')->Del($param);

        $this->ajaxReturn($result);

    }

}