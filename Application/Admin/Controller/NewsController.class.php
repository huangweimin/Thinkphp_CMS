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
     * KindEditor 编辑器
     */
     public function fileUpload()
    {
        if (IS_POST) {

            $upload = new \Think\Upload();// 实例化上传类

            $upload->maxSize   =     999999999 ;// 设置附件上传大小

            $upload->exts      =    array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录

            $path='/Uploads/';//设置上传目录

            $file = $upload->upload();

            if ($file) {

                $file_url =__ROOT__.$path.$file['imgFile']['savepath'] . $file['imgFile']['savename'];//取得上传目录

                    echo json_encode(array('error' => 0, 'url' => $file_url));//返回的数据一定要是json

            } else {

                $this->error($upload->getError());//返回错误

            }

        }

    }

}