<?php

namespace Admin\Model;

use Think\Model;

class CustomModel extends Model
{

    /**
     * 获取
     */
    public function Get()
    {

        $map['is_deleted'] = 0;

        $data = M('custom')->where($map)->select();

        return $data;

    }

    /**
     * 创建
     */
     public function Create($param)
    {

    	$model = M('custom');

    	// 判断是否存在
    	$flag = $model->where(['key' => $param['key'], 'is_deleted' => 0])->find();

        if ($flag) {

            return [

                'data' => $param['key'] . '已经存在了',

                'msg' => $model->getLastSql(),

                'status' => 0,

            ];

        }

        $doAdd = false;

        $doAdd = $model->add([

            'key' => $param['key'],

            'value' => $param['value']

        ]);

        $res = $doAdd ? ['msg' => 'success'] : ['msg' => 'failed'];

        return [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doAdd ? 1 : 0,

        ];

    }

    /**
     * 修改
     */
     public function Edit($param)
    {

        $model = M('custom');
        
    	// 判断是否存在
    	$flag = $model->where(['key' => $param['key'], 'is_deleted' => 0, 'id' => ['neq', $param['id']]])->find();

        if ($flag) {

            return [

                'data' => $param['key'] . '已经存在了',

                'msg' => $model->getLastSql(),

                'status' => 0,

            ];

        }

        $doMod = false;

        $doMod = $model

            ->where(['id' => $param['id']])

        	->save([

            'key' => $param['key'],

            'value' => $param['value']

        ]);

        $res = $doMod ? ['msg' => 'success'] : ['msg' => 'failed'];

        return [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doMod ? 1 : 0,

        ];

    }

    /**
     * 删除
     */
  	  public function Del($param)
    {

        $model = M('custom');
        
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