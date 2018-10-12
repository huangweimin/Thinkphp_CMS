<?php
namespace Admin\Controller;

use Think\Controller;

class NewsController extends BaseController
{
    /**
     * 获取新闻列表
     */
    public function index()
    {
    	
    	$news = D('News')->getNews();

        $this->assign('news_list', $news);

        $this->display();

    }

    /**
     * 新增/修改新闻
     */
    public function create()
    {

        $do = I('do');

        if (empty($do)) {

            $title = "创建新闻";

            $param = I();

            if ($param){

                $title = "修改新闻";

                $map['id'] = $param['id'];

                $news_detail = M('news')->where($map)->order('id desc')->find();

                $this->assign('news_detail', $news_detail);
           
            }

            $this->assign('title', $title);

            $this->display();

        } elseif ($do == 'create') {

            $param = I();

            $result = D('News')->Create($param);

            $this->ajaxReturn($result);

        }  elseif ($do == 'edit') {

            $param = I();

            $result = D('News')->Edit($param);

            $this->ajaxReturn($result);

        }

    }

    /**
     * 删除新闻
     */
    public function del()
    {

        $param = I();

        $result = D('News')->Del($param);

        $this->ajaxReturn($result);

    }

     /**
     * 导出
     */
    public function exportCSV()
    {
        $data = D('News')->getNews();

        $headList = array(
            'ID',
            '标题',
            '内容',
            '发布时间',
            '类型',
            '是否显示',
            '描述',
            '类型ID',
            '是否删除',
        );
        $fileName = '新闻列表';
        
        writeCsv($data,$headList,$fileName);

        die;

    }   

}