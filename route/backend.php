<?php
/**
 * Created by PhpStorm.
 * User: river
 * Date: 2018/9/21
 * Time: 上午11:09
 */


use think\facade\Route;

Route::get('/','Index/index');
Route::resource('/category/','Category');