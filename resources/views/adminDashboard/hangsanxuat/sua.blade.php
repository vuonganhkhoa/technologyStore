@extends('adminDashboard.layout.master')

@section('tittle')
    Cập nhật hãng sản xuất
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
                    <li class="active">
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
                    <li>
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
                        <div class="col-md-8">
                            
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">  <!--div đỏ  -->
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                                </div>
                            @endif

                            @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}} 
                            </div>
                            @endif

                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Sửa hãng sản xuất</h4>
                                </div>
                                <div class="card-content">
                                    <form method="POST" action="admin/hangsanxuat/sua/{{$hangsanxuat->idHangSX}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên hãng sản xuất</label>
                                                    <input type="text" class="form-control" name="tenHangSX" value="{{ $hangsanxuat->TenHangSX }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>

                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

@endsection