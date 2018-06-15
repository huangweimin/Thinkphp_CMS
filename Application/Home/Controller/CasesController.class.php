<?php
namespace Home\Controller;

use Think\Controller;

class CasesController extends BaseController
{
    public function index()
    {

        $map['is_deleted'] = 0;
        
        $map['is_show'] = 1;

        $list = M('cases')->where($map)->select();

        $this->assign('list', $list);

        $this->display();

    }

}