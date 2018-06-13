<?php
namespace Admin\Controller;

use Think\Controller;

class CasesController extends Controller
{
	// 获取案例列表
    public function index()
    {
    	
    	$list = D('Cases')->getCases();

        $this->assign('list', $list);

        $this->display();

    }


    // 新增&修改案例
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

    // 删除案例
    public function del()
    {

        $param = I();

        $result = D('Cases')->Del($param);

        $this->ajaxReturn($result);

    }

    // 上传图片
    public function uploadImg()
    {

        $filenames = $_FILES['file']['name'];

        $upload = new \Think\Upload();// 实例化上传类

        $upload->maxSize   =     3145728 ;// 设置附件上传大小

        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录

        $upload->savePath  =     ''; // 设置附件上传（子）目录

        // 上传文件 
        $info   =   $upload->upload();

        if(!$info) {// 上传错误提示错误信息

            $this->error($upload->getError());

        }else{// 上传成功

            foreach($info as $file){

                echo $file['savepath'].$file['savename'];

            }

        }

    }

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