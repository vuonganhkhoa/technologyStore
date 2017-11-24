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
Route::get('/',[
    'as' => 'trangchu',
    'uses'=> 'PageController@getIndex'
]);
Route::get('lienhe',[
    'as' => 'lienhe',
    'uses'=> 'PageController@getContact'
]);
Route::get('tintuc',[
    'as' => 'tin_tuc',
    'uses'=> 'PageController@getNews'
]);
Route::get('sanpham',[
    'as' => 'san_pham',
    'uses'=> 'PageController@getProduct'
]);
Route::get('tintuc_chitiet/{tin}',[
    'as' => 'tintuc_chitiet',
    'uses'=> 'PageController@getNewsDetail'
]);
Route::get('giohang',[
    'as' => 'giohang',
    'uses'=> 'PageController@getCart'
]);
Route::get('thanhtoan',[
    'as' => 'thanhtoan',
    'uses'=> 'PageController@getCheckout'
]);
Route::get('sanpham_chitiet',[
    'as' => 'sanpham_chitiet',
    'uses'=> 'PageController@getProductDetail'
]);
Route::get('sanpham_theoHangSX',[
    'as' => 'sanpham_theoHangSX',
    'uses'=> 'PageController@getProductByProvider'
]);

//Route::get('login', 'Auth\LoginController@getLogin');
//Route::post('login', 'Auth\LoginController@postLogin');
Route::get('dangnhap','KhachHangController@getLogin');
Route::post('dangnhap','KhachHangController@postLogin');
Route::get('dangxuat','KhachHangController@getLogout');


Route::group(['prefix'=>'admin','middleware'=>'Login'],function(){

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

    Route::group(['prefix'=>'donhang'], function(){

        Route::get('danhsach','DonHangController@getDanhSach')->name('donhang');
        Route::get('sua/{id}','DonHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'DonHangController@postSua'); //post data 


        Route::get('them','DonHangController@getThem');
        Route::post('them', 'DonHangController@postThem');

        Route::get('xoa/{id}', 'DonHangController@getXoa');
    });

    Route::group(['prefix'=>'chitietdonhang'], function(){

        Route::get('danhsach','ChiTietDonHangController@getDanhSach')->name('chitietdonhang');
        Route::get('sua/{id}','ChiTietDonHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'ChiTietDonHangController@postSua'); //post data 


        Route::get('them','ChiTietDonHangController@getThem');
        Route::post('them', 'ChiTietDonHangController@postThem');

        Route::get('xoa/{id}', 'ChiTietDonHangController@getXoa');
    });

    Route::group(['prefix'=>'hinhsanpham'], function(){

        Route::get('danhsach','HinhSanPhamController@getDanhSach')->name('hinhsanpham');
        Route::get('sua/{id}','HinhSanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'HinhSanPhamController@postSua'); //post data 


        Route::get('them','HinhSanPhamController@getThem');
        Route::post('them', 'HinhSanPhamController@postThem');

        Route::get('xoa/{id}', 'HinhSanPhamController@getXoa');
    });

    Route::get('search', [
        'as'   => 'searchDashboard',
        'uses' => 'KhachHangController@getSearch'
    ]);

    Route::group(['prefix'=>'ajax'], function(){

        Route::get('giasanpham/{idSP}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getGiaSanPham'
        ]);
        Route::get('giaKMsanpham/{idSP}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getGiaKMSanPham'
        ]);
        Route::get('thanhtiensanpham/{idSP}/{SoLuong}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getThanhTien'
        ]);

    });
   
});

