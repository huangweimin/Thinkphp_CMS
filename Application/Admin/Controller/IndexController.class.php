<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends BaseController
{
    /**
     * 管理后台首页
     */
    public function index()
    {

    	$map['is_deleted'] = 0;

    	$news_count = M('news')->where($map)->count();

        $this->assign('news_count', $news_count);

    	$cases_count = M('cases')->where($map)->count();

    	$this->assign('cases_count',$cases_count);

    	$now_time = date('Y-m-d H:i:s');

    	$this->assign('now_time',$now_time);

        $hot_list = M('news')->where($map)->order('id desc')->limit(5)->select();

    	$this->assign('hot_list',$hot_list);

        $this->display();

    }
}