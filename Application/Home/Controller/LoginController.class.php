<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends BaseController
{
    public function index()
    {

        $this->display();

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

}