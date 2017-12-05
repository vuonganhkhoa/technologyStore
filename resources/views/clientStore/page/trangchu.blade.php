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
                    <div class="col-md-9 col-md-offset-3">
                        <div class="flexslider ma-nivoslider">
                            <div class="ma-loading"></div>
                            <div id="ma-inivoslider-banner7" class="slides">
                                <img src="images/slider/slide-01.jpg" class="dn" alt="" title="#banner7-caption1"  />                           
                                <img src="images/slider/slide-02.jpg" class="dn" alt="" title="#banner7-caption2"  />
                            </div>
                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-1">
                                    <div class="title-container">
                                        <h1 class="title1">headphones az12</h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>sale up to!</h1>
                                            <h2>30% off</h2>
                                            <div class="check-box">
                                                <ul class="list-unstyled">
                                                    <li>With all products in shop</li>
                                                    <li>All combos $69.96</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="images/slider/img-04.png" alt="" />                                                                              
                                </div>
                            </div>                      
                            <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-2">
                                    <div class="title-container">
                                        <h1 class="title1">Samsung s5</h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>sale up to!</h1>
                                            <h2>50% off</h2>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="images/slider/img-05.png" alt="" />                                                                                  
                                </div>
                            </div>
                        </div><!-- /.flexslider -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="col-sm-5">
                        <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-02.jpg"></a></div>
                        <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-03.jpg"></a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="banner"><a href="#"><img alt="" src="images/ads/ads-04.jpg"></a></div>
                    </div>
                </div><!-- /advertisement -->
                <div class="row">
                    <div class="col-sm-3 col-left"></div><!-- /.col-left -->


                    
                    <div class="col-sm-9 col-right">

                        <!--Sản Phẩm Nổi Bật-->   
                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản Phẩm Nổi Bật</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                                    @foreach($sanphamnoibat as $sp)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">

                                                @if($sp->SanPhamMoi == 1 )
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                </div>
                                                @endif

                                                @if($sp->GiaKhuyenMai != 0)
                                                <div class="product_icon">
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                </div>
                                                @endif

                                                <a href="{{route('sanpham_chitiet', $sp_noibat->idSP)}}" title="{{$sp_noibat->TenSP}}" class="product-image">
                                                    <img src="public/clientassets/upload/sanpham/{{$sp_noibat->urlHinhSP}}" alt="{{$sp_noibat->TenSP}}" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="{{route('sanpham_chitiet', $sp_noibat->idSP)}}" class="link-quickview">Chi tiết</a></li>
                                                        <li><a href="#" class="link-wishlist">Yêu thích</a></li>


                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="public/clientassets/upload/sanpham/{{$sp->urlHinhSP}}" alt="Nunc facilisis" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="#" class="link-quickview">Chi tiết</a></li>

                                                        <li><a href="#" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">

                                                <h2 class="product-name"><a href="{{route('sanpham_chitiet', $sp_noibat->idSP)}}" title="{{$sp_noibat->TenSP}}">{{$sp_noibat->TenSP}}</a></h2>

                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$sp->TenSP}}</a></h2>
                                                
                                                @if($sp->GiaKhuyenMai>0)

                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá KM</span>
                                                        <span class="price">{{number_format($sp->GiaKhuyenMai)}} VND</span>
                                                    </p>

                                                    <p class="old-price">
                                                        <span class="price">{{number_format($sp->GiaSP)}} VND</span>
                                                    </p>
                                                </div>

                                                @else
                                                <div class="price-box">
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">{{number_format($sp->GiaSP)}} VND</span>
                                                    </p>
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> 
                        </div><!-- /.featuredproductslider-container -->
                        

                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-05.jpg"></a>
                        </div>


                        <!--Sản Phẩm Mới-->
                        <div class="newproductslider-container"> 
                            <div class="title-group1"><h2>Sản Phẩm Mới</h2></div>
                            <div id="new-products" class="owl-container">
                                <div class="owl">
                                    @foreach($sanphammoi as $sp)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">

                                                @if($sp->SanPhamMoi == 1 )
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>

                                                    @if($sp_moi->GiaKhuyenMai != 0)
                                                    <div class="product_icon">
                                                        <div class="sale-icon"><span>Giảm</span></div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <a href="{{route('sanpham_chitiet', $sp_moi->idSP)}}" title="{{$sp_moi->TenSP}}" class="product-image">
                                                    <img src="public/clientassets/upload/sanpham/{{$sp_moi->urlHinhSP}}" alt="{{$sp_moi->TenSP}}"/>

                                                </div>
                                                @endif

                                                @if($sp->GiaKhuyenMai != 0)
                                                <div class="product_icon">
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                </div>
                                                @endif

                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="public/clientassets/upload/sanpham/{{$sp->urlHinhSP}}" alt="Nunc facilisis" />

                                                </a>

                                                <div class="box-hover">
                                                    <ul class="add-to-links">

                                                        <li><a href="{{route('sanpham_chitiet', $sp_moi->idSP)}}" class="link-quickview">Xem chi tiết</a></li>
                                                        <li><a href="#" class="link-wishlist">Yêu thích</a></li>

                                                        <li><a href="#" class="link-quickview">Chi tiết</a></li>
                                                        <li><a href="#" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">

                                                <h2 class="product-name"><a href="{{route('sanpham_chitiet', $sp_moi->idSP)}}" title="{{$sp_moi->TenSP}}">{{$sp_moi->TenSP}}</a></h2>

                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$sp->TenSP}}</a></h2>


                                                <div class="price-box">
                                                    <p class="price">
                                                        <span class="price-label">Giá :</span>
                                                        <span class="price">{{number_format($sp->GiaSP)}} VND</span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- /.newproductslider-container -->


                        <div class="row">
                            <div class="col-smc-7">
                                <div class="banner">
                                    <a href="#"><img alt="" src="images/ads/ads-06.jpg"></a>
                                </div>
                            </div>
                            <div class="col-smc-5">
                                <div class="banner">
                                    <a href="#"><img alt="" src="images/ads/ads-07.jpg"></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <!--Sản Phẩm Giảm Giá-->
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Sản Phẩm Giảm Giá</h2></div>
                                <div class="product-list">
                                    @foreach($sanphamkhuyenmai as $sp)
                                    <div class="products-grid">
                                        <div class="images-container">


                                            <a class="product-image" title="{{$sp_banchay->TenSP}}" href="{{route('sanpham_chitiet', $sp_banchay->idSP)}}"><img alt="{{$sp_banchay->TenSP}}" src="public/clientassets/upload/sanpham/{{$sp_banchay->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="{{$sp_banchay->TenSP}}" href="{{route('sanpham_chitiet', $sp_banchay->idSP)}}">{{$sp_banchay->TenSP}}</a></h2>

                                        
                                            <div class="product_icon">
                                                <div class="sale-icon"><span>Giảm</span></div>
                                            </div>
                                            
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="public/clientassets/upload/sanpham/{{$sp->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$sp->TenSP}} </a></h2>

                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{number_format($sp->GiaKhuyenMai)}}VND</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{number_format($sp->GiaSP)}}VND</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- /.product-list -->
                            </div>
                            
                            <!--Sản Phẩm Bán Chạy-->
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Sản Phẩm Bán Chạy</h2></div>
                                <div class="product-list">
                                    @foreach($sanphambanchay as $sp)
                                    <div class="products-grid">
                                        <div class="images-container">

                                            <a class="product-image" title="{{$sp_giamgia->TenSP}}" href="{{route('sanpham_chitiet', $sp_giamgia->idSP)}}"><img alt="{{$sp_giamgia->TenSP}} " src="public/clientassets/upload/sanpham/{{$sp_giamgia->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="{{$sp_giamgia->TenSP}}" href="{{route('sanpham_chitiet', $sp_giamgia->idSP)}}">{{$sp_giamgia->TenSP}} </a></h2>

                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="public/clientassets/upload/sanpham/{{$sp->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$sp->TenSP}}</a></h2>

                                            @if($sp->GiaKhuyenMai != 0)
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{number_format($sp->GiaKhuyenMai)}}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{number_format($sp->GiaSP)}}VND</span>
                                                </p>
                                            </div>

                                            @else
                                            <div class="price-box">
                                                <p class="price">
                                                    <span class="price">{{number_format($sp->GiaSP)}}VND</span>
                                                </p>
                                            </div>
                                            @endif


                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- /.product-list -->
                            </div>
                            
                            <!--Phụ Kiện-->
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Phụ Kiện</h2></div>
                                <div class="product-list">
                                    @foreach($phukien as $pk)
                                    <div class="products-grid">
                                        <div class="images-container">

                                            <a class="product-image" title="{{$phukien->TenSP}}" href="{{route('sanpham_chitiet', $phukien->idSP)}}"><img alt="{{$phukien->TenSP}}" src="public/clientassets/upload/sanpham/{{$phukien->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="{{$phukien->TenSP}}" href="{{route('sanpham_chitiet', $phukien->idSP)}}">{{$phukien->TenSP}}</a></h2>

                                            <a class="product-image" title="Accumsan elit " href="#"><img height="100px" alt="Accumsan elit " src="public/clientassets/upload/sanpham/{{$pk->urlHinhSP}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$pk->TenSP}} </a></h2>
                                            
                                            @if($sp->GiaKhuyenMai != 0)
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{number_format($pk->GiaKhuyenMai)}}VND</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{number_format($pk->GiaSP)}}VND</span>
                                                </p>
                                            </div>
                                            @else

                                            <div class="price-box">
                                                <p class="price">
                                                    <span class="price">{{number_format($pk->GiaSP)}}VND</span>
                                                </p>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- /.product-list -->
                            </div>

                        </div>
                    </div><!-- /.col-right -->
                </div>
            </div>
</div><!-- /.main -->

<div class="catlist">
            <div class="container">
                <!--Tin tức công nghệ-->
                <div class="title-group1">
                    <h2>Tin Tức Công Nghệ</h2>
                </div> 
                <div class="row">


                    @foreach($tintuc as $tin)
                  
                    <div class="col-md-6 col-sm-6">
                        <div class="row">

                            <div style="margin-bottom: 7px" class="col-xs-6">
                                <div class="image-cat">
                                    <a href="{{route('tintuc_chitiet',$tin->idTin)}}"><img height="200px" alt="Electronic" src="public/clientassets/upload/tintuc/{{$tin->urlHinhTin}}"></a>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="name-cat"><a href="{{route('tintuc_chitiet',$tin->idTin)}}"><h3>{{$tin->TieuDe}}</h3></a></div>
                                <a class="view-more" href="{{route('tintuc_chitiet',$tin->idTin)}}">Xem thêm</a>
                            </div>
                        </div>

                    </div>
                    
                    @endforeach

                </div>
            </div>
        </div><!-- /.catlist -->

@endsection