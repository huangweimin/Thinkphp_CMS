<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
    	$isLogin = session('isLogin');

    	if($isLogin == 1) {

	 		$this->redirect('/Admin/Index/index');

    	} else {

        	$this->display();

    	}

    }

    /**
	 * 用户登陆
	 */
    public function login(){

        $data['username'] = I('Post.username');

        $data['password'] = md5(I('Post.password'));   //md5加密

        $model = M('user');

        $list = $model->where($data)->find();

        if(!empty($list)) {

            session('isLogin' , 1);           //登陆状态存入session

            session('username' , $list['username']);  //把用户名存入session

            $result = [

                'data' => '登陆成功',

                'msg' => $model->getLastSql(),

                'status' => 1

            ];

        } else {

        	$result = [

                'data' => '登陆失败',

                'msg' => $model->getLastSql(),

                'status' => 0

            ];

        }

        $this->ajaxReturn($result);

	}

	 /**
	 * 退出方法
	 */
	 public function logout(){

	 	 session('isLogin' , 0);

	 	 session('username' , null);       

	 	 $this->ajaxReturn(['status' => 1]);

	 }
	 
}