<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
$api=app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api){
    $api->group(['namespace'=>'App\Http\Controllers\Api','middleware' => 'api.throttle', 'limit' => 10, 'expires' => 1],function ($api){
//            $api->post('user/login','AuthController@authenticate');//登陆授权
//            $api->post('user/register','AuthCOntrooler@register');

                //路径为 /api/tests
                $api->get('tests', 'TestsController@index');
                //请求方式：
                //http://localhost:8000/api/tests?token=xxxxxx  (从登陆或注册那里获取,目前只能用get)
//                $api->get('tests/{id}', 'TestsController@show');
//                $api->get('user/me', 'AuthController@AuthenticatedUser');//根据
//            );
    });
});
