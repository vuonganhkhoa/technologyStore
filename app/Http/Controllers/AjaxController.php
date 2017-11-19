<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class AjaxController extends Controller
{
    public function getGiaSanPham($idSP){

        $sanpham = SanPham::where('idSP',$idSP)->get();  
	    foreach($sanpham as $sp){
	        //echo "<input type='text' class='form-control' name='GiaSP' id='GiaSP' value='".$sp->GiaSP."'>";
	        echo $sp->GiaSP;
	    }
      
    }
     public function getGiaKMSanPham($idSP){

        $sanpham = SanPham::where('idSP',$idSP)->get();  
	    foreach($sanpham as $sp){
	        //echo "<input type='text' class='form-control' name='GiaSP' id='GiaSP' value='".$sp->GiaSP."'>";
	        echo $sp->GiaKhuyenMai;
	    }
      
    }
    public function getThanhTien($idSP, $SoLuong){

        $sanpham = SanPham::where('idSP',$idSP)->get();
	    foreach($sanpham as $sp){
	        //echo "<input type='text' class='form-control' name='GiaSP' id='GiaSP' value='".$sp->GiaSP."'>";
	        if($sp->GiaKhuyenMai == 0){
	        	echo $SoLuong*($sp->GiaSP);
	        }
	        else{
	        	echo $SoLuong*($sp->GiaKhuyenMai);
	        }
	        
	    }
      
    }
}
