<?php
namespace Home\Controller;

use Think\Controller;

class RegisterController extends BaseController
{
    public function index()
    {

        $this->display();

    }

    /**
	 * 用户注册
	 */
    public function register(){

        $data['username'] = I('Post.username');

        $data['password'] = md5(I('Post.password'));   //md5加密

        $model = M('user');

    	// 判断是否存在
    	$flag = $model->where(['username' => $data['username'], 'is_deleted' => 0])->find();

        if ($flag) {

            $result = [

                'data' => $data['username'] . '已经被注册了',

                'msg' => $model->getLastSql(),

                'status' => 0,

            ];

        	$this->ajaxReturn($result);

        }

        $doAdd = false;

        $doAdd = $model->add([

            'username' => $data['username'],

            'password' => $data['password'],

            'create_time' => date('Y-m-d H:i:s')

        ]);

        $res = $doAdd ? ['msg' => 'success'] : ['msg' => 'failed'];

        $result = [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doAdd ? 1 : 0,

        ];

        $this->ajaxReturn($result);

	}


}