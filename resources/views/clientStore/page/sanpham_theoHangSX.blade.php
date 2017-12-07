@extends ('clientStore.layout.master')


@section('content')
<style type="text/css" media="screen">
    .price{
        font-size: 16px !important;
        font-weight: bold !important;
    }
</style>

<div class="main">
            <div class="container">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-3 col-left">
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
<<<<<<< HEAD
=======

>>>>>>> aaff955e4cc142bf0bcbc0ec6b0587a2d83f7632
                        <!-- <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-05.jpg"></a>
                        </div> -->
                        <div class="page-title">
                            <h1>Danh sách sản phẩm hãng {{$hangsanxuat->TenHangSX}}</h1>
                        </div>
                       
                        <ol id="products-list" class="products-list">

                            @foreach ($sanpham_hangSX as $hsx)
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    @if ($hsx->SanPhamMoi==1)
                                                    <div class="new-icon"><span>Mới</span></div>
                                                    @endif
                                                    @if ($hsx->GiaKhuyenMai != 0)
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                    @endif
                                                </div>
<<<<<<< HEAD
                                                <a class="product-image" title="Fusce aliquam" href="{{ route('sanpham_chitiet', $hsx->idSP) }}" rel="author"><img alt="Fusce aliquam" src="clientassets/upload/sanpham/{{$hsx->urlHinhSP}}" ></a>
=======
                                                <a class="product-image" title="Fusce aliquam" href="{{ route('sanpham_chitiet', $hsx->idSP) }}" rel="author"><img alt="Fusce aliquam" src="public/clientassets/upload/sanpham/{{$hsx->urlHinhSP}}" ></a>
>>>>>>> aaff955e4cc142bf0bcbc0ec6b0587a2d83f7632
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="" href="{{ route('sanpham_chitiet', $hsx->idSP) }}">{{$hsx->TenSP}}</a></h2>

                                                @if ($hsx->GiaKhuyenMai != 0)
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá khuyến mãi: </span>
                                                    <span id="product-price-1" class="price">{{number_format($hsx->GiaKhuyenMai)}}</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span id="old-price-1" class="price">{{number_format($hsx->GiaSP)}}</span>
                                                    </p>
                                                </div>
                                                @else
                                                <div class="price-box">
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span id="old-price-1" class="price">{{number_format($hsx->GiaSP)}}</span>
                                                    </p>
                                                </div>
                                                @endif

                                                <div class="desc std">
                                                   {!!$hsx->MoTaSP!!} <br>
                                                   <a class="link-learn" title="Fusce aliquam" href="{{route('sanpham_chitiet', $hsx->idSP)}}" style="font-size: 18px; color:orange">Xem chi tiết</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
<<<<<<< HEAD
                                                        <a href="{{ route('muahang', $hsx->idSP) }}" class="btn btn-danger" title="Add to Cart" type="button">Mua hàng</a>
    
=======
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Mua hàng</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Yêu thích</em>Yêu thích</a></li>

                                                        </ul>
>>>>>>> aaff955e4cc142bf0bcbc0ec6b0587a2d83f7632
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        
                        </ol>
<<<<<<< HEAD
=======

                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-17.jpg"></a>
                        </div>
                        <div class="page-title">
                            <h1>Sản phẩm theo hãng sản xuất {{$hangsanxuat->TenHangSX}}</h1>
                        </div>

                        <div class="row products">
                            @foreach($sanpham_hangsx as $sp)
                            <div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">

                                                @if($sp->SanPhamMoi==1)
                                                <div class='new-icon'><span>Mới</span></div>
                                                @endif

                                                @if($sp->GiaKhuyenMai >0)
                                                <div class="sale-icon"><span>Giảm</span></div>
                                                @endif

                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img height="250px" src="public/clientassets/upload/sanpham/{{$sp->urlHinhSP}}" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Chi tiết</a></li>
                                                    <li><a href="#" class="link-cart">Mua hàng</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$sp->TenSP}}</a></h2>

                                            @if($sp->GiaKhuyenMai!= 0)
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{number_format($sp->GiaKhuyenMai)}}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Giá: </span>
                                                    <span class="price">{{number_format($sp->GiaSP)}}</span>
                                                </p>
                                            </div>

                                            @else
                                            <div class="price-box">
                                                <p class="price">
                                                    <span class="price-label">Giá: </span>
                                                    <span class="price">{{number_format($sp->GiaSP)}}</span>
                                                </p>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- /.product -->


>>>>>>> aaff955e4cc142bf0bcbc0ec6b0587a2d83f7632
                    </div><!-- /.col-right -->
                </div>
            </div>
</div><!-- /.main -->

@endsection