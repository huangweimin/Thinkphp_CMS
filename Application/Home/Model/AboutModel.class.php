<?php

namespace Home\Model;

use Think\Model;

class AboutModel extends Model
{
    protected $tableName = 'about';

    public function getAbout()
    {
        $data = $this->select();
        return $data[0]['content'];
    }
}