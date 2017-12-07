@extends ('clientStore.layout.master')


@section('content')

<div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9"><h2>Tin công nghệ</h2></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <ol id="products-list" class="blog-list">
                            @foreach($tintuc as $tin)
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="images-container">
<<<<<<< HEAD
                                                <a class="product-image" title="Fusce aliquam" href="{{route('tintuc_chitiet', $tin->idTin)}}" rel="author"><img alt="Fusce aliquam" src="clientassets/upload/tintuc/{{$tin->urlHinhTin}}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2 class="product-name"><a title="" href="{{route('tintuc_chitiet', $tin->idTin)}}">{{$tin->TieuDe}}</a></h2>
=======
                                                <a class="product-image" title="Fusce aliquam" href="{{route('tintuc_chitiet',$tin->idTin)}}" rel="author"><img height="220px" alt="Fusce aliquam" src="public/clientassets/upload/tintuc/{{$tin->urlHinhTin}}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">

                                            <h2 class="product-name"><a title="" href="{{route('tintuc_chitiet', $tin->idTin)}}">{{$tin->TieuDe}}</a></h2>

                                            <h2 class="product-name"><a title="" href="{{route('tintuc_chitiet',$tin->idTin)}}">{{$tin->TieuDe}}</a></h2>

>>>>>>> aaff955e4cc142bf0bcbc0ec6b0587a2d83f7632
                                            <div class="blog-attr">
                                                <span>Post by <a href="#">Admin</a></span>
                                                <span class="separator">|</span>
                                                <span>{{$tin->NgayDang}}</span>
                                            </div>
                                            <div class="desc">
                                               {!!$tin->TomTat!!}
                                            </div>
                                            <a href="{{route('tintuc_chitiet',$tin->idTin)}}" class="btn btn-default btn-readmore">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div><!-- /.main -->                
@endsection