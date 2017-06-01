<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/*
 * 测试api文档使用
 * @Resource('Test')
 * */
class TestsController extends Controller
{
    /*
     * 测试方法
     *  @Versions({"v1"})
     * @Get('/api/tests/1')
     * */
    public function show(){
        $d['ssss']=1111;
       return $d;
    }
}
