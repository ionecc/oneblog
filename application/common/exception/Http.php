<?php
/**
 * Created by PhpStorm.
 * User: river
 * Date: 2018/9/22
 * Time: 上午11:33
 */

namespace app\common\exception;


use Exception;
use think\exception\Handle;

class Http extends Handle
{

    public function render(Exception $e)
    {

        return parent::render($e); // TODO: Change the autogenerated stub
    } 
}