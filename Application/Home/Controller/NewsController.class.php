<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;

class NewsController extends BaseController
{
    public function index()
    {

		$map['is_deleted'] = 0;
		
    	$map['is_show'] = 1;

    	$param = I();

    	if($param['type']) {

    		$map['type_id'] = $param['type'];
    		
		}

		$n=M('news');  

		$count = $n->where($map)->count();// 查询满足$condition条件的总记录数 $map表示查询条件  

		$pageNum=6;  // 每页显示2条数据  

		$Page = new Page($count,$pageNum);// 实例化分页类 传入总记录数，每页显示几条  

		// 设置分页样式  
		$Page->setConfig('first','首页');   

		$Page->setConfig('prev','上一页');  

		$Page->setConfig('next','下一页');  

		$Page->setConfig('last','末页');  

		$show = $Page->show();// 分页显示输出  

		// 进行分页数据查询  
		$list = $n->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条  

		$this->assign('list',$list);// 赋值数据集  

		$this->assign('page',$show);// 赋值分页输出  

        $this->display();

    }

    public function detail()
    {
    	$param = I();

    	$data = M('news')->where(['id' => ['in', $param['id']]])->find();
	
		$this->assign('data',$data);

		$map['is_deleted'] = 0;
		
    	$map['is_show'] = 1;

		$new_list = M('news')->where($map)->order('id desc')->limit(3)->select();
	
		$this->assign('new_list',$new_list);

        $this->display();

    }


}