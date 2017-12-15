

@extends('adminDashboard.layout.master')

@section('tittle')
    Cập nhật tin tức
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
                    
                    <li  class="active">
                        <a href="{{ route('tintuc') }}">
                            <i class="fa fa-newspaper-o"></i>
                            <p>Tin tức</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('donhang') }}">
                            <i class="fa fa-cart-plus"></i>
                            <p>Đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('chitietdonhang') }}">
                            <i class="fa fa-file-text"></i>
                            <p>Chi tiết đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hinhsanpham') }}">
                            <i class="fa fa-picture-o"></i>
                            <p>Hình sản phẩm</p>
                        </a>
                    </li>
                </ul>
            </div>

@endsection

@section('content')

    <style type="text/css" media="screen">
    .hinh{
        width: 200px !important;
    }
    </style>

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

                            @if (session('loi'))
                            <div class="alert alert-danger">
                                {{session('loi')}} 
                            </div>
                            @endif

                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Cập nhật tin tức</h4>
                                </div>
                                <div class="card-content">

                                    <form method="POST" action="admin/tintuc/sua/{{$tin->idTin}}" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn loại tin</label>
                                                    <select class="form-control" name="LoaiTin">
							                          @foreach($loai as $l)
							                            <option
							                            @if($tin->idLoaiTin == $l->idLoaiTin)
							                                {{"selected"}}
							                            @endif

							                            value="{{$l->idLoaiTin}}">
							                            {{$l->TieuDeLoaiTin}}
							                        	</option>
							                          @endforeach
							                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tiêu đề</label>
                                                    <input type="text" class="form-control" name="tieuDe" value="{{$tin->TieuDe}}">
                                                </div>
                                            </div>   
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Tóm tắt</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="tomTat">{{$tin->TomTat}}</textarea>
                                                    <script type="text/javascript">ckeditor("tomTat")</script>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Nội dung</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="noiDung">{{$tin->NoiDung}}</textarea>
                                                    <script type="text/javascript">ckeditor("noiDung")</script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <img src="clientassets/upload/tintuc/{{$tin->urlHinhTin}}" width="100px" height="100px" alt="">
                                                  <input type="file" name="hinh" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày đăng</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày đăng"  name="ngayDang" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Số lượt xem</label>
                                                    <input type="number" value="{{$tin->SoLanXem}}" class="form-control"  name="soLanXem" >
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