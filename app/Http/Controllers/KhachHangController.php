<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\DonHang;
use DB;

class KhachHangController extends Controller
{
    
    public function getDashboard(){

    	$dashboard = DB::table('KhachHang')
    				->join('DonHang', 'DonHang.idKhachHang', '=', 'KhachHang.idKhachHang') // Gộp bảng
    				->get([
    						'KhachHang.idKhachHang',
    					 	'HoTen', 
    					 	'KhachHang.DienThoai',
    					    'Diachi', 
    					    'NgayGiaoHang', 
    					    'TrangThaiGiaoHang', 
    					    'TrangThaiThanhToan'
    					]);

    	return view('adminDashboard.page.dashboard', compact('dashboard'));
    }
    public function getDanhSach(){

        $khachhang = KhachHang::all();

    	return view('adminDashboard.khachhang.danhsach', compact('khachhang'));
    }

    public function getThem(){

        return view('adminDashboard.khachhang.them');
    }

    public function postThem(Request $request){

       $this->validate($request,[
        'tenKhachHang'=>'required',
        'emailKhachHang'=> 'required|email|unique:khachhang,Email', // không trùng : tên bảng, tên cột
        'matkhauKhachHang'=>'required|min:6',
        'matkhaunhaplaiKhachHang' => 'required|same:matkhauKhachHang',
        'diachiKhachHang'=>'required',
        'dienthoaiKhachHang'=>'required|integer'
      ],
      [
        'tenKhachHang.required'=>'Chưa nhập tên',
        'emailKhachHang.required'=>'Chưa nhập email',
        'emailKhachHang.email'=>'Email không đúng định dạng',
        'emailKhachHang.unique'=>'Email đã tồn tại',
        'matkhauKhachHang.required'=>'Chưa nhập mật khẩu.',
        'matkhauKhachHang.min'=>'Mật khẩu phải có ít nhất 6 kí tự.',
        'matkhaunhaplaiKhachHang.required'=>'Chưa nhập lại mật khẩu.',
        'matkhaunhaplaiKhachHang.same'=>'Mật khẩu nhập lại chưa khớp',
        'diachiKhachHang.required'=>'Bạn chưa nhập địa chỉ.',
        'dienthoaiKhachHang.required'=>'Bạn chưa nhập số điện thoại.',
        'dienthoaiKhachHang.integer'=>'Số điện thoại bạn nhập chưa đúng.',

      ]);

      $khachhang = new KhachHang;
      $khachhang ->HoTen = $request->tenKhachHang;
      $khachhang ->Email = $request->emailKhachHang;
      $khachhang ->MatKhau = bcrypt($request->matkhauKhachHang);   //bcrypt: mã hóa pass
      $khachhang ->DienThoai = $request->dienthoaiKhachHang;
      $khachhang ->DiaChi = $request->diachiKhachHang;
      $khachhang ->NgaySinh = $request->ngaysinhKhachHang;
      $khachhang ->GioiTinh = $request->gioitinh;
      $khachhang ->NgayDangKy = $request->ngaydangkyKhachHang;
      $khachhang ->KichHoat = $request ->kichhoat;

      $khachhang->save();

      return redirect('admin/khachhang/them')->with('thongbao','Thêm thành công');
    }

    public function getXoa($idKhachHang){

        $khachhang = KhachHang::find($idKhachHang);
        $khachhang->delete();

        return redirect('admin/khachhang/danhsach')->with('thongbao', 'Xóa thành công');
    }

    public function getSua($idKhachHang){

        $khachhang = KhachHang::find($idKhachHang);

        return view('adminDashboard.khachhang.sua', compact('khachhang'));
    }

    public function postSua($idKhachHang, Request $request){

        $this->validate($request,[
        'tenKhachHang'=>'required',
        'emailKhachHang'=> 'required|email', // không trùng : tên bảng, tên cột
        // 'matkhauKhachHang'=>'required|min:6',
        // 'matkhaunhaplaiKhachHang' => 'required|same:matkhauKhachHang',
        'diachiKhachHang'=>'required',
        'dienthoaiKhachHang'=>'required|integer'
      ],
      [
        'tenKhachHang.required'=>'Chưa nhập tên',
        'emailKhachHang.required'=>'Chưa nhập email',
        'emailKhachHang.email'=>'Email không đúng định dạng',
        // 'matkhauKhachHang.required'=>'Chưa nhập mật khẩu.',
        // 'matkhauKhachHang.min'=>'Mật khẩu phải có ít nhất 6 kí tự.',
        // 'matkhaunhaplaiKhachHang.required'=>'Chưa nhập lại mật khẩu.',
        // 'matkhaunhaplaiKhachHang.same'=>'Mật khẩu nhập lại chưa khớp',
        'diachiKhachHang.required'=>'Bạn chưa nhập địa chỉ.',
        'dienthoaiKhachHang.required'=>'Bạn chưa nhập số điện thoại.',
        'dienthoaiKhachHang.integer'=>'Số điện thoại bạn nhập chưa đúng.',

      ]);

      $khachhang = KhachHang::find($idKhachHang);
      $khachhang->HoTen = $request->tenKhachHang;
      $khachhang->Email = $request->emailKhachHang;
      $khachhang->DienThoai = $request->dienthoaiKhachHang;
      // $khachhang->MatKhau = $request->matkhauKhachHang;
      $khachhang->DiaChi = $request->diachiKhachHang;
      $khachhang->NgaySinh = $request->ngaysinhKhachHang;
      $khachhang->GioiTinh = $request->gioitinh;
      $khachhang->NgayDangKy = $request->ngaydangkyKhachHang;
      $khachhang->KichHoat = $request ->kichhoat;

      $khachhang->save();

      return redirect('admin/khachhang/sua/' . $idKhachHang)->with('thongbao','Cập nhật thành công');
    }
}
