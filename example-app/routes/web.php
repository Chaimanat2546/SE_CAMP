<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//แบบ1
Route::get('/my-controller', [MyController::class, 'index']);
//แบบ2
Route::get('/my-controller2', "App\Http\Controllers\MyController@index");

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', "MyController@index");
    Route::post('/my-controller3-post', "MyController@store");
});

Route::resource('/my-controller4', MyController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-route', function(){
    // return view('myroute');
    //    Key   =>  Value
    $data = ['val_a' => "Hello World"];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);

});
Route::post('/my-route', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myroute',$data);
});
