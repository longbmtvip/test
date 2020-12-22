	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\TheLoai;
// trang nhap
route::get('trangnhap',function(){
	return view('admin/pages/complete');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', 'UserController@getDangnhapAdmin');
Route::post('admin/login', 'UserController@postDangnhapAdmin');
route::get('logout','UserController@logout');
route::get('thu',function(){
	$theloai=TheLoai::find(1);
	foreach ($theloai->loaitin as $loaitin) 
	{
		echo $loaitin->Ten."<br>";
	}
});
//admin/theloai/them
route::group(['prefix'=>'admin'],function(){
	route::group(['prefix'=>'theloai'],function(){
		
route::get('danhsach','TheLoaiController@getDanhSach');

route::get('sua/{id}','TheLoaiController@getSua');
route::post('sua/{id}','TheLoaiController@postSua');

route::get('them','TheLoaiController@getThem');
route::post('them','TheLoaiController@postThem');
route::get('xoa/{id}','TheLoaiController@getXoa');
	});
	//admin/loaitin/them
	route::group(['prefix'=>'loaitin'],function(){
		
route::get('danhsach','LoaiTinController@getDanhSach');

route::get('sua/{id}','LoaiTinController@getSua');
route::post('sua/{id}','LoaiTinController@postSua');

route::get('them','LoaiTinController@getThem');
route::post('them','LoaiTinController@postThem');
route::get('xoa/{id}','LoaiTinController@getXoa');
	});
	//admin/tintuc/them
	route::group(['prefix'=>'tintuc'],function(){
		
route::get('danhsach','TinTucController@getDanhSach');

route::get('sua/{id}','TinTucController@getSua');
route::post('sua/{id}','TinTucController@postSua');
route::get('them','TinTucController@getThem');
route::post('them','TinTucController@postThem');
route::get('xoa/{{id}}','TinTucController@getXoa');		
	});
	
	route::group(['prefix'=>'comment'],function(){
		route::get('xoa/{id}','CommentController@getXoa');
	});
	route::group(['prefix'=>'slide'],function(){
		
route::get('danhsach','SlideController@getDanhSach');

route::get('sua/{id}','SlideController@getSua');
route::post('sua/{id}','SlideController@postSua');
route::get('them','SlideController@getThem');
route::post('them','SlideController@postThem');
route::get('xoa/{{id}}','SlideController@getXoa');
});
	route::group(['prefix'=>'slide'],function(){
		
route::get('danhsach','SlideController@getDanhSach');

route::get('sua/{id}','SlideController@getSua');
route::post('sua/{id}','SlideController@postSua');

route::get('them','SlideController@getThem');
route::post('them','SlideController@postThem');
route::get('xoa/{id}','SlideController@getXoa');
	});
	route::group(['prefix'=>'user'],function(){
		
route::get('danhsach','UserController@getDanhSach');

route::get('sua/{id}','UserController@getSua');
route::post('sua/{id}','UserController@postSua');

route::get('them','UserController@getThem');
route::post('them','UserController@postThem');
route::get('xoa/{id}','UserController@getXoa');
	});
});
route::get('trangchu','PageController@trangchu');
route::get('dangnhap','UserController@getDangnhapAdmin');
route::post('dangnhap','UserController@postDangnhapAdmin');
route::post('dangxuat','PageController@getdangxuat');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
