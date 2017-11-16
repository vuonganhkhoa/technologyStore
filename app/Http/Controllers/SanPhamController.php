<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\HangSanXuat;
use DB;

class SanPhamController extends Controller
{
    public function getDanhSach(){

    	$sanpham = DB::table('SanPham')
    				  ->join('HangSanXuat', 'SanPham.idHangSX', 'HangSanXuat.idHangSX')
    				  ->get([

    				  	     'idSP',
    				  	     'TenHangSX',
    				  	     'TenSP',
    				  	     'GiaSP',
    				  	     'GiaKhuyenMai',
    				  	     'TonKho',
    				  	     'SanPhamMoi'

    				  ]);

    	return view('adminDashboard.sanpham.danhsach', compact('sanpham'));
    }
}
