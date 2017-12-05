<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\HangSanXuat;
use App\Tin;

class PageController extends Controller
{
    public function getIndex(){

    	$sanphamnoibat = SanPham::orderBy('SoLanXem', 'Desc')->limit(8)->get();
    	$sanphammoi = SanPham::where('SanPhamMoi',1)->limit(8)->get();
    	$sanphamkhuyenmai = SanPham::where('GiaKhuyenMai','<>',0)->limit(3)->get();
    	$sanphambanchay = SanPham::orderBy('SoLanMua', 'Desc')->limit(3)->get();
        $phukien = SanPham::where('idLoaiSP',3)->limit(3)->get();

        $tintuc = Tin::orderBy('idTin','DESC')->limit(6)->get();

    	return view('clientStore/page/trangchu', compact('sanphamnoibat', 'sanphammoi','sanphamkhuyenmai','sanphambanchay', 'phukien','tintuc'));
    }

    public function getSanPham(){

    	$sanpham = SanPham::all();
    	return view('clientStore/page/sanpham', compact('sanpham'));
    }

    public function getTinTuc(){

        $tintuc = Tin::all();
        return view('clientStore/page/tintuc', compact('tintuc'));
    }

    public function getSanPham_HangSX($id_hangSX){

        $sanpham_hangsx = SanPham::where([['idHangSX', $id_hangSX],['idLoaiSP',1]])->get();
        $hangsanxuat = HangSanXuat::where('idHangSX', $id_hangSX)->first();
        return view('clientStore/page/sanpham_theoHangSX', compact('sanpham_hangsx', 'hangsanxuat'));
    }
}
