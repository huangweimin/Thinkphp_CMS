<?php
namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller
{

    public function _initialize()
    {

        $map['is_deleted'] = 0;

		$new_list = M('news')->where($map)->order('id desc')->limit(5)->select();
	
		$this->assign('footer_new_list',$new_list);

		$case_list = M('cases')->where($map)->order('id desc')->limit(5)->select();
	
		$this->assign('footer_case_list',$case_list);

		$footer_about = M('about')->select();

        $this->assign('footer_about', $footer_about[0]['content']);

        $system = M('system')->select();

        $this->assign('system', $system[0]);

    }

}