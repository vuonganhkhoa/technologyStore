@extends('adminDashboard.layout.master')

@section('tittle')
    Loại tin
@endsection

@section('sidebar')

    <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hangsanxuat') }}">
                            <i class="fa fa-building-o"></i>
                            <p>Hãng sản xuất</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('khachhang') }}">
                            <i class="fa fa-users fa-fw"></i>
                            <p>Khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('loaisanpham') }}">
                            <i class="fa fa-list"></i>
                            <p>Loại sản phẩm</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('loaitin') }}">
                            <i class="fa fa-list"></i>
                            <p>Loại tin tức</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sanpham') }}">
                            <i class="fa fa-archive"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tintuc') }}">
                            <i class="fa fa-newspaper-o"></i>
                            <p>Tin tức</p>
                        </a>
                    </li>
                </ul>
            </div>

@endsection

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @if (session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header" data-background-color="purple">

                                    <div class="row">
                                        <div class="col-md-11">
                                            <h4 class="title">Danh sách loại tin</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="admin/loaitin/them"><button type="button" class="btn-primary-outline btn-circle btn-lg"> + </button></a>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Mã loại</th>
                                            <th>Tên loại tin</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($loaiTin as $key=>$loai)
                                            <tr>
                                                <td>{{$loai->idLoaiTin}}</td>
                                                <td>{{$loai->TieuDeLoaiTin}}</td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaitin/xoa/{{$loai->idLoaiTin}}" onclick="return xac_nhan_xoa('Bạn có chắc muốn xóa?')"> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{$loai->idLoaiTin}}"> Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

@endsection