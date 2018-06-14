<?php

namespace Home\Model;

use Think\Model;

class CommentsModel extends Model
{

    /**
     * 创建
     */
     public function Create($param)
    {

        $model = M('comments');
        
        $doAdd = false;

        $doAdd = $model->add([

            'username' => $param['username'],

            'create_time' => date('Y-m-d H:i:s'),

            'email' => $param['email'],

            'phone' => $param['phone'],

            'address' => $param['address'],

            'content' => $param['content'],

        ]);

        $res = $doAdd ? ['msg' => 'success'] : ['msg' => 'failed'];

        return [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doAdd ? 1 : 0,

        ];

    }


}