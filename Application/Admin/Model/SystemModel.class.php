<?php

namespace Admin\Model;

use Think\Model;

class SystemModel extends Model
{

    /**
     * 获取配置
     */
    public function Get()
    {

    	$model = M('system');

		$map['id'] = 1;

        $data = $model->where($map)->find();
        
        return $data;

    }

    /**
     * 保存配置
     */
     public function Edit($param)
    {

    	$model = M('system');

        $doMod = false;

        $doMod = $model

            ->where(['id' => 1])

        	->save([

            'title' => $param['title'],

            'keyword' => $param['keyword'],

            'desc' => $param['desc'],

            'footer_js' => $param['footer_js']

        ]);

        $res = $doMod ? ['msg' => 'success'] : ['msg' => 'failed'];

        return [

            'data' => $res['msg'],

            'msg' => $model->getLastSql(),

            'status' => $doMod ? 1 : 0,

        ];

    }

}