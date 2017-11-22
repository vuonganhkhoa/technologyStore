<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\LoaiTin;

class PageController extends Controller
{
    
    public function getIndex(){

    	$san_pham_moi = SanPham::where('SanPhamMoi', 1)->get();
    	$san_pham_noi_bat = SanPham::OrderBy('SoLanXem', 'DESC')->get();
    	$san_pham_giam_gia = SanPham::where('GiaKhuyenMai', '<>', 0)->limit(3)->get();
    	$san_pham_ban_chay = SanPham::OrderBy('SoLanMua', 'DESC')->limit(3)->get();
    	$phu_kien = SanPham::where('idLoaiSP', '3')->limit(3)->get();

    	//dd($san_pham_ban_chay);

    	$loai_tin = LoaiTin::all();

    	return view('clientStore.page.trangchu', compact('san_pham_moi','san_pham_noi_bat', 'loai_tin','san_pham_giam_gia', 'san_pham_ban_chay', 'phu_kien'));
    }
}
