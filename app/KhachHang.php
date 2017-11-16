<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    
    protected $table   = 'KhachHang';
    protected $primaryKey = 'idKhachHang';
    public $timestamps = false;

    public function BinhLuan(){

    	return $this->hasMany('App\BinhLuan', 'idKhachHang', 'idKhachHang');
    }
    public function DonHang(){

    	return $this->hasMany('App\DonHang', 'idKhachHang', 'idKhachHang');
    }
}
