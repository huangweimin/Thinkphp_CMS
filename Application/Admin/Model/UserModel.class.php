<?php

namespace Admin\Model;

use Think\Model;

class UserModel extends Model
{
    /**
     * 获取列表
     */
    public function Get()
    {

    	$model = M('user');

        $map['is_deleted'] = 0;

        $list = $model->where($map)->order('id desc')->limit($limit)->select();
        
        return $list;

    }

    /**
     * 删除
     */
  	  public function Del($param)
    {

    	$model = M('user');

        $doDel = false;

        $doDel = $model->where(['id' => ['in', $param['id']]])->save(['is_deleted' => 1]);

        $res = $doDel ? ['msg' => $doDel . ' deleted'] : ['msg' => 'no delete'];

        return [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doDel ? 1 : 0,

        ];

    }
      

}