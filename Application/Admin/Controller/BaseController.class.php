<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{

    public function _initialize()
    {

        $isLogin = session('isLogin');

        $username = session('username');

        $this->assign('username',$username);

        if($isLogin == 0) {

            $this->redirect('Admin/Login/index');

        } 

    }

    /**
     * 上传封面图
     */
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
