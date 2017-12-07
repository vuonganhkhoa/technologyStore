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
                <div class="row">
                    <div class="col-sm-3 col-left">
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-17.jpg"></a>
                        </div>
                        <div class="page-title">
                            <h1>Sản phẩm mới</h1>
                        </div>

                        <div class="row products">
                            @foreach($sanphamkhuyenmai as $sp)
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

                    </div><!-- /.col-right -->
                </div>
            </div>
</div><!-- /.main -->

@endsection