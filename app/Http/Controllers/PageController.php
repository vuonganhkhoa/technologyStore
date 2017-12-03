<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Tin;

class PageController extends Controller
{
    
    public function getIndex(){

    	$san_pham_moi = SanPham::where('SanPhamMoi', 1)->orderBy('idSP','DESC')->limit(8)->get();
    	$san_pham_noi_bat = SanPham::OrderBy('SoLanXem', 'DESC')->limit(8)->get();
    	$san_pham_giam_gia = SanPham::where('GiaKhuyenMai', '<>', 0)->limit(3)->get();
    	$san_pham_ban_chay = SanPham::OrderBy('SoLanMua', 'DESC')->limit(3)->get();
    	$phu_kien = SanPham::where('idLoaiSP', '3')->limit(3)->get();

    	//dd($san_pham_ban_chay);

    	$tin_tuc = Tin::orderBy('idTin','DESC')->limit(6)->get();

    	return view('clientStore.page.trangchu', compact('san_pham_moi','san_pham_noi_bat', 'tin_tuc','san_pham_giam_gia', 'san_pham_ban_chay', 'phu_kien'));
    }

    public function getContact(){
        
        return view('clientStore.page.lienhe');
    }
    public function getNews(){

        $tintuc = Tin::all();
        return view('clientStore.page.tintuc', compact('tintuc'));
    }
    public function getProduct(){

        $sanpham = SanPham::all();
        return view('clientStore.page.sanpham', compact('sanpham'));
    }
    public function getNewsDetail($tin){

        $tintuc = Tin::where('idTin', $tin)->get();
        return view('clientStore.page.tintuc_chitiet', compact('tintuc'));
    }
    public function getCart(){

        return view('clientStore.page.giohang');
    }
    public function getCheckout(){

        return view('clientStore.page.thanhtoan');
    }
    public function getProductDetail(){

        return view('clientStore.page.sanpham_chitiet');
    }
    public function getProductByProvider(){

        return view('clientStore.page.sanpham_theoHangSX');
    }

}
