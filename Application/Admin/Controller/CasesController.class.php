<?php
namespace Admin\Controller;

use Think\Controller;

class CasesController extends BaseController
{
    /**
     * 获取案例列表
     */
    public function index()
    {
    	
    	$list = D('Cases')->getCases();

        $this->assign('list', $list);

        $this->display();

    }

    /**
     * 新增/修改案例
     */
    public function create()
    {

        $do = I('do');

        if (empty($do)) {

            $title = "创建案例";

            $param = I();

            if ($param){

                $title = "修改案例";

                $map['id'] = $param['id'];

                $cases_detail = M('cases')->where($map)->order('id desc')->find();

                $this->assign('cases_detail', $cases_detail);
           
            }

            $this->assign('title', $title);

            $this->display();

        } elseif ($do == 'create') {

            $param = I();

            $result = D('Cases')->Create($param);

            $this->ajaxReturn($result);

        }  elseif ($do == 'edit') {

            $param = I();

            $result = D('Cases')->Edit($param);

            $this->ajaxReturn($result);

        }

    }

    /**
     * 删除案例
     */
    public function del()
    {

        $param = I();

        $result = D('Cases')->Del($param);

        $this->ajaxReturn($result);

    }

}