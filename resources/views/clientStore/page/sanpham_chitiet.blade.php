@extends ('clientStore.layout.master')

@section ('content')
<div class="main">
            <div class="container">
                <div class="row" style="margin-top: 20px;"></div>
                <div class="row">
                    <div class="col-sm-9 col-right">


                        
                        <div class="product-view">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="product-img-box">
                                        <p class="product-image">
                                            <a href="#" class="cloud-zoom" id="ma-zoom1">
                                                <img src="public/clientassets/upload/sanpham/{{$chitiet->urlHinhSP}}" alt="Fusce aliquam" title="Fusce aliquam" />
                                            </a>
                                        </p>
                                        <div class="more-views thumbnail-container">
                                            <ul class="bxslider">
                                                <li class="thumbnail-item">
                                                    <a href="images/products/1.jpg" class="cloud-zoom-gallery" title="" name="images/products/1.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/1.jpg'">
                                                        <img src="images/products/1.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/2.jpg" class="cloud-zoom-gallery" title="" name="images/products/2.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/2.jpg'">
                                                        <img src="images/products/2.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/3.jpg" class="cloud-zoom-gallery" title="" name="images/products/3.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/3.jpg'">
                                                        <img src="images/products/3.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/4.jpg" class="cloud-zoom-gallery" title="" name="images/products/4.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/4.jpg'">
                                                        <img src="images/products/4.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/5.jpg" class="cloud-zoom-gallery" title="" name="images/products/5.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/5.jpg'">
                                                        <img src="images/products/5.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/6.jpg" class="cloud-zoom-gallery" title="" name="images/products/6.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/6.jpg'">
                                                        <img src="images/products/6.jpg" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1>{{$chitiet->TenSP}}</h1>
                                    </div>
                                    
                                    <div class="box-container2"> 
                                        @if ($chitiet->GiaKhuyenMai != 0)
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Giá khuyến mãi: </span>
                                            <span id="product-price-1" class="price">{{number_format($chitiet->GiaKhuyenMai)}}</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Giá: </span>
                                                <span id="old-price-1" class="price">{{number_format($chitiet->GiaSP)}}</span>
                                            </p>
                                        </div>
                                        @else
                                        <div class="price-box">
                                            <p class="price">
                                                <span class="price-label">Giá: </span>
                                                <span id="old-price-1" class="price">{{number_format($chitiet->GiaSP)}}</span>
                                            </p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="short-description">
                                        <div class="std">{!!$chitiet->MoTaSP!!}</div>
                                    </div>
                                    <p class="availability in-stock">Còn: <span>{{$chitiet->TonKho . ' sản phẩm'}}</span></p>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Số lượng: </label>
                                            <div class="col-md-3 col-sm-5">
                                                <div class="input-group qty">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">-</button>
                                                    </span>
                                                    <input type="text" class="form-control" value="3">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">+</button>
                                                    </span>
                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-cart">Mua hàng</button>
                                        <button type="button" class="btn btn-default btn-wishlist">Yêu thích</button>

                                    </form>
                                </div><!-- /.product-shop -->
                            </div>
                            <div class="product-tab tab-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#product-desc" data-toggle="tab">Thông tin sản phẩm</a></li>
                                
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-desc">
                                        {!! $chitiet->ChiTietSP !!}
                                    </div>
                                </div>
                            </div><!-- /.product-tab -->
                        </div><!-- /.product-view -->
                        


                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm liên quan</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">

                                    @foreach ($sanpham_lienquan as $lienquan)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                </div>
                                                <a href="{{ route('sanpham_chitiet', $lienquan->idSP) }}" title="Nunc facilisis" class="product-image">
                                                    <img src="public/clientassets/upload/sanpham/{{$lienquan->urlHinhSP}}" alt="Nunc facilisis" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="{{ route('sanpham_chitiet', $lienquan->idSP) }}" class="link-quickview">Xem chi tiet</a></li>
                                                        <li><a href="#" class="link-wishlist">Yêu thích</a></li>
                                                        <li><a href="#" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="{{ route('sanpham_chitiet', $lienquan->idSP) }}" title="Nunc facilisis">{{$lienquan->TenSP}}</a></h2>
                                                <div class="price-box">
                                                    @if ($lienquan->GiaKhuyenMai != 0)
                                                    <p class="special-price">
                                                        <span class="price-label">Giá khuyến mãi: </span>
                                                        <span class="price">{{ number_format($lienquan->GiaKhuyenMai) }}</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">{{ number_format($lienquan->GiaSP) }}</span>
                                                    </p>
                                                    @else
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price">{{ number_format($lienquan->GiaSP) }}</span>
                                                    </p>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div><!-- /.featuredproductslider-container -->
                    </div><!-- /.col-right -->
                  

                    </div><!-- /.col-left -->
                </div>
            </div>
        </div><!-- /.main -->
@stop