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
// Route::get('/dashboard.html', function () {
//     return view('adminDashboard.page.dashboard');
// });
// Route::get('/table.html', function() {
// 	return view('adminDashboard.page.table');
// });

// Route::get('/user.html', function() {
// 	return view('adminDashboard.page.user');
// });


/*Route::get('/', function () {
        return view('adminDashboard.page.dashboard');
    })->name('dashboard');
    Route::get('/dashboard', [
        'as'   => 'dashboard',
        'uses' => 'KhachHangController@getDashboard'
    ]);
*/


Route::group(['prefix'=>'admin'],function(){

    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'KhachHangController@getDashboard'
    ]);

    Route::group(['prefix'=>'hangsanxuat'], function(){

        Route::get('danhsach','HangSanXuatController@getDanhSach')->name('hangsanxuat');

        Route::get('sua/{id}','HangSanXuatController@getSua'); //gọi trang
        Route::post('sua/{id}', 'HangSanXuatController@postSua'); //post data 


        Route::get('them','HangSanXuatController@getThem');
        Route::post('them', 'HangSanXuatController@postThem');

        Route::get('xoa/{id}', 'HangSanXuatController@getXoa');
    });

    Route::group(['prefix'=>'khachhang'], function(){

        Route::get('danhsach','KhachHangController@getDanhSach')->name('khachhang');

        Route::get('sua/{id}','KhachHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'KhachHangController@postSua'); //post data 


        Route::get('them','KhachHangController@getThem');
        Route::post('them', 'KhachHangController@postThem');

        Route::get('xoa/{id}', 'KhachHangController@getXoa');
    });

    Route::group(['prefix'=>'loaisanpham'], function(){

        Route::get('danhsach','LoaiSanPhamController@getDanhSach')->name('loaisanpham');

        Route::get('sua/{id}','LoaiSanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'LoaiSanPhamController@postSua'); //post data 


        Route::get('them','LoaiSanPhamController@getThem');
        Route::post('them', 'LoaiSanPhamController@postThem');

        Route::get('xoa/{id}', 'LoaiSanPhamController@getXoa');
    });

    Route::group(['prefix'=>'sanpham'], function(){

        Route::get('danhsach','SanPhamController@getDanhSach')->name('sanpham');

        Route::get('sua/{id}','SanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'SanPhamController@postSua'); //post data 


        Route::get('them','SanPhamController@getThem');
        Route::post('them', 'SanPhamController@postThem');

        Route::get('xoa/{id}', 'SanPhamController@getXoa');
    });

    Route::group(['prefix'=>'loaitin'], function(){

        Route::get('danhsach','LoaiTinController@getDanhSach')->name('loaitin');

        Route::get('sua/{id}','LoaiTinController@getSua'); //gọi trang
        Route::post('sua/{id}', 'LoaiTinController@postSua'); //post data 


        Route::get('them','LoaiTinController@getThem');
        Route::post('them', 'LoaiTinController@postThem');

        Route::get('xoa/{id}', 'LoaiTinController@getXoa');
    });

    Route::group(['prefix'=>'tintuc'], function(){

        Route::get('danhsach','TinController@getDanhSach')->name('tintuc');
        Route::get('sua/{id}','TinController@getSua'); //gọi trang
        Route::post('sua/{id}', 'TinController@postSua'); //post data 


        Route::get('them','TinController@getThem');
        Route::post('them', 'TinController@postThem');

        Route::get('xoa/{id}', 'TinController@getXoa');
    });
});

