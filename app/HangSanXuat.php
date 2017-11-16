<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangSanXuat extends Model
{
    
    protected $table   = 'HangSanXuat';
    protected $primaryKey = 'idHangSX';
    public $timestamps = false;

    public function SanPham(){

    	return $this->hasMany('App\SanPham', 'idHangSX', 'idHangSX');
    }
}
