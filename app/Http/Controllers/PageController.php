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

    public function getTinTucChiTiet($tin){

        $tintuc = Tin::where('idTin',$tin)->first();
        return view('clientStore/page/tintuc_chitiet', compact('tintuc'));
    }

    public function getProductDetail($id_sanpham){

        $chitiet = SanPham::where('idSP', $id_sanpham)->first();
        //$sanpham_lienquan = SanPham::where('idHangSX', $chitiet->idHangSX)->limit(8)->get(); // giới hạn 8 
        $sanpham_lienquan = SanPham::where('idLoaiSP', $chitiet->idLoaiSP)->limit(8)->get();
        return view('clientStore.page.sanpham_chitiet', compact('chitiet', 'sanpham_lienquan'));
    }
    public function getProductByProvider($id_hangSX){

        $sanpham_hangSX = SanPham::where([['idHangSX', $id_hangSX],['idLoaiSP', 1]])->get();
        $hangsanxuat = HangSanXuat::where('idHangSX', $id_hangSX)->first();
        return view('clientStore.page.sanpham_theoHangSX', compact('sanpham_hangSX', 'hangsanxuat'));
    }
    public function getMayTinhBang(){

        $sanpham = SanPham::where('idLoaiSP', 2)->get();
        return view('clientStore.page.maytinhbang', compact('sanpham'));
    }
    public function getSanPhamMoi(){

        $sanpham = SanPham::where('SanPhamMoi', 1)->get();
        return view('clientStore.page.sanphammoi', compact('sanpham'));
    }
    public function getSanPhamBanChay(){

        $sanpham = SanPham::orderBy('SoLanMua', 'DESC')->get();
        return view('clientStore.page.sanphambanchay', compact('sanpham'));
    }
    public function getSanPhamKhuyenMai(){

        $sanpham = SanPham::where('GiaKhuyenMai', '<>', 0)->get();
        return view('clientStore.page.sanphamkhuyenmai', compact('sanpham'));
    }
    public function getPhuKien(){

        $sanpham = SanPham::where('idLoaiSP', 3)->get();
        return view('clientStore.page.phukien', compact('sanpham'));
    }


    public function getSearch(Request $request){

        $sanpham = SanPham::where('TenSP', 'like', "%".$request->key."%")->get();
        return view('clientStore.page.danhsachtimkiem', compact('sanpham'));
    }


    public function getIntroduce(){

        return view('clientStore.page.gioithieu');
    }
    public function getWarranty(){

        return view('clientStore.page.chinhsachbaohanh');
    }
    public function getChinhSachTraGop(){

        return view('clientStore.page.chinhsachtragop');
    }
    public function getChinhSachDoiTra(){

        return view('clientStore.page.chinhsachdoitra');


    public function getSanPham_HangSX($id_hangSX){

        $sanpham_hangsx = SanPham::where([['idHangSX', $id_hangSX],['idLoaiSP',1]])->get();
        $hangsanxuat = HangSanXuat::where('idHangSX', $id_hangSX)->first();
        return view('clientStore/page/sanpham_theoHangSX', compact('sanpham_hangsx', 'hangsanxuat'));

    }
}
