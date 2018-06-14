<?php
namespace Home\Controller;

use Think\Controller;

class AboutController extends BaseController
{
    public function index()
    {

        $data = M('about')->select();

        $this->assign('about_content', $data[0]['content']);

        $this->display();

    }

}