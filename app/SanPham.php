<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    
    protected $table   = 'SanPham';
    public $timestamps = false;

    public function LoaiSanPham(){
    	return $this->belongsTo('App\LoaiSanPham', 'idLoaiSP', 'idLoaiSP');
    }
    public function HangSanXuat(){
    	return $this->belongsTo('App\HangSanXuat', 'idHangSX', 'idHangSX');
    }
    public function ChiTietDonHang(){
    	return $this->hasMany('App\ChiTietDonHang', 'idSP', 'idSP');
    }
    public function HinhSanPham(){
    	return $this->hasMany('App\HinhSanPham', 'idSP', 'idSP');
    }
}
