<?php
/**
 * Created by PhpStorm.
 * User: river
 * Date: 2018/9/21
 * Time: 下午4:48
 */

namespace app\backend\controller;


class Category extends Base
{

    public function create()
    {
        return $this->fetch();
    }
}