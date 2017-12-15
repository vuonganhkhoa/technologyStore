<?php $__env->startSection('content'); ?>

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
                                <img src="clientassets/assets/images/slider/slide-01.jpg" class="dn" alt="" title="#banner7-caption1" height ="400px"/>                           
                                <img src="clientassets/assets/images/slider/slide-02.jpg" class="dn" alt="" title="#banner7-caption2" height ="400px"/>
                                <img src="clientassets/assets/images/slider/slide-03.jpg" class="dn" alt="" title="#banner7-caption3" height ="400px"/>
                            </div>
                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-1">
                                    <div class="title-container">
                                        <h1 class="title1">Samsung Galaxy S8</h1>
                                        <h2 class="title2" >Thiết kế không phiền màn hình</h2>                                          
                                    </div>                                                                                             
                                    <img class="img1" src="clientassets/assets/images/slider/img-04.png" alt="" height ="280px" />    
                                </div> 

                            </div>                    
                            <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-2">
                                    <div class="title-container">
                                        <h1 class="title1">HTC U11</h1>
                                        <h2 class="title2" >Thiết kế bề mặt phản chiếu hình ảnh bạn</h2>                                          
                                    </div>                                                                                                                                                                             
                                </div>
                            </div>
                            <div id="banner7-caption3" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-3">
                                    <div class="title-container">
                                        <h1 class="title1">LG V30</h1>
                                        <h2 class="title2" >Siêu phẩm của LG - thiết kế lột xác hoàn toàn</h2>                                          
                                    </div>                                                                                                                                                                             
                                </div>
                            </div>
                        </div><!-- /.flexslider -->
                    </div>
                </div>
                <!--  ****************************************** CONTENT ************************************ -->
                <div class="row">     
                    <div class="col-md-3"></div>
                    <div class="col-sm-9 col-right">
                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm nổi bật</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">

                                    <?php $__currentLoopData = $san_pham_noi_bat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_noibat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <?php if($sp_noibat->SanPhamMoi==1): ?>
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($sp_noibat->GiaKhuyenMai != 0): ?>
                                                <div class="product_icon">
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                </div>
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('sanpham_chitiet', $sp_noibat->idSP)); ?>" title="<?php echo e($sp_noibat->TenSP); ?>" class="product-image">
                                                    <img src="clientassets/upload/sanpham/<?php echo e($sp_noibat->urlHinhSP); ?>" alt="<?php echo e($sp_noibat->TenSP); ?>" height="220px" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="<?php echo e(route('sanpham_chitiet', $sp_noibat->idSP)); ?>" class="link-quickview">Chi tiết</a></li>
                                                        <li><a href="<?php echo e(route('muahang', $sp_noibat->idSP)); ?>" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="<?php echo e(route('sanpham_chitiet', $sp_noibat->idSP)); ?>" title="<?php echo e($sp_noibat->TenSP); ?>"><?php echo e($sp_noibat->TenSP); ?></a></h2>
                                                <div class="price-box">
                                                    <?php if($sp_noibat->GiaKhuyenMai!=0): ?>
                                                    <p class="special-price price">
                                                        <span class="price-label">Khuyến mãi</span>
                                                        <span class="price"><?php echo e(number_format($sp_noibat->GiaKhuyenMai)); ?></span>
                                                    </p>
                                                    <p class="old-price price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($sp_noibat->GiaSP)); ?></span>
                                                    </p>
                                                    <?php else: ?>
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($sp_noibat->GiaSP)); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>

                        <!-- /.featuredproductslider-container -->
                        <!-- <div class="banner">
                            <a href="#"><img alt="" src="clientassets/assets/images/ads/ads-05.jpg" height="100px"></a>
                        </div>  -->

                        <div class="newproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm mới</h2></div>
                            <div id="new-products" class="owl-container">
                                <div class="owl">

                                    <?php $__currentLoopData = $san_pham_moi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_moi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                    <?php if($sp_moi->GiaKhuyenMai != 0): ?>
                                                    <div class="product_icon">
                                                        <div class="sale-icon"><span>Giảm</span></div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <a href="<?php echo e(route('sanpham_chitiet', $sp_moi->idSP)); ?>" title="<?php echo e($sp_moi->TenSP); ?>" class="product-image">
                                                    <img src="clientassets/upload/sanpham/<?php echo e($sp_moi->urlHinhSP); ?>" alt="<?php echo e($sp_moi->TenSP); ?>" height="220px"/>
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="<?php echo e(route('sanpham_chitiet', $sp_moi->idSP)); ?>" class="link-quickview">Xem chi tiết</a></li>
                                                        <li><a href="<?php echo e(route('muahang', $sp_moi->idSP)); ?>" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="<?php echo e(route('sanpham_chitiet', $sp_moi->idSP)); ?>" title="<?php echo e($sp_moi->TenSP); ?>"><?php echo e($sp_moi->TenSP); ?></a></h2>
                                                <div class="price-box">
                                                    <?php if($sp_moi->GiaKhuyenMai!=0): ?>
                                                    <p class="special-price price">
                                                        <span class="price-label">Khuyến mãi</span>
                                                        <span class="price"><?php echo e(number_format($sp_moi->GiaKhuyenMai)); ?></span>
                                                    </p>
                                                    <p class="old-price price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($sp_moi->GiaSP)); ?></span>
                                                    </p>
                                                    <?php else: ?>
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($sp_moi->GiaSP)); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div><!-- /.newproductslider-container -->

                        <div class="row">
                            <div class="col-smc-7">
                                <div class="banner">
                                    <a href="#"><img alt="" src="clientassets/assets/images/ads/ads-05.jpg" height="300px"></a>
                                </div>
                            </div>
                            <div class="col-smc-5">
                                <div class="banner">
                                    <a href="#"><img alt="" src="clientassets/assets/images/ads/ads-04.jpg" height="300px"></a>
                                </div>
                            </div>

                        </div>

                        <div class="row">


                            <div class="col-sm-4">
                                <div class="title-group"><h2>Sản phẩm bán chạy</h2></div>
                                <div class="product-list">
                                    <?php $__currentLoopData = $san_pham_ban_chay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_banchay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="products-grid">
                                        <div class="images-container">

                                            <a class="product-image" title="<?php echo e($sp_banchay->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $sp_banchay->idSP)); ?>"><img alt="<?php echo e($sp_banchay->TenSP); ?>" src="clientassets/upload/sanpham/<?php echo e($sp_banchay->urlHinhSP); ?>" height="90px"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="<?php echo e($sp_banchay->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $sp_banchay->idSP)); ?>"><?php echo e($sp_banchay->TenSP); ?></a></h2>
                                            <div class="price-box">
                                                <?php if($sp_banchay->GiaKhuyenMai != 0): ?>
                                                <p class="special-price price">
                                                    <span class="price"><?php echo e(number_format($sp_banchay->GiaSP)); ?></span>
                                                </p>
                                                <p class="old-price price">
                                                    <span class="price"><?php echo e(number_format($sp_banchay->GiaKhuyenMai)); ?></span>
                                                </p>
                                                
                                                <?php else: ?>
                                                <p class="special-price price">
                                                    <span class="price"><?php echo e(number_format($sp_banchay->GiaSP)); ?></span>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- /.product-list -->
                            </div>

                            <div class="col-sm-4">
                                <div class="title-group"><h2>Sản phẩm giảm giá</h2></div>
                                <div class="product-list">
                                    <?php $__currentLoopData = $san_pham_giam_gia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_giamgia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="<?php echo e($sp_giamgia->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $sp_giamgia->idSP)); ?>"><img alt="<?php echo e($sp_giamgia->TenSP); ?> " src="clientassets/upload/sanpham/<?php echo e($sp_giamgia->urlHinhSP); ?>" height="90px"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="<?php echo e($sp_giamgia->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $sp_giamgia->idSP)); ?>"><?php echo e($sp_giamgia->TenSP); ?> </a></h2>
                                            <div class="price-box">
                                                <p class="special-price price">
                                                    <span class="price"><?php echo e(number_format($sp_giamgia->GiaKhuyenMai)); ?></span>
                                                </p>
                                                <p class="old-price price">
                                                    <span class="price"><?php echo e(number_format($sp_giamgia->GiaSP)); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- /.product-list -->
                            </div>

                            <div class="col-sm-4">
                                <div class="title-group"><h2>Phụ kiện</h2></div>
                                <div class="product-list">
                                    <?php $__currentLoopData = $phu_kien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phukien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="products-grid" style="margin-top: 5px;">
                                        <div class="images-container">
                                            <a class="product-image" title="<?php echo e($phukien->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $phukien->idSP)); ?>"><img alt="<?php echo e($phukien->TenSP); ?>" src="clientassets/upload/sanpham/<?php echo e($phukien->urlHinhSP); ?>" height="90px"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="<?php echo e($phukien->TenSP); ?>" href="<?php echo e(route('sanpham_chitiet', $phukien->idSP)); ?>"><?php echo e($phukien->TenSP); ?></a></h2>
                                            <div class="price-box">
                                                <p class="special-price price">
                                                    <span class="price"><?php echo e(number_format($phukien->GiaSP)); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- /.product-list -->
                            </div>



                        </div>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="catlist">
            <div class="container">
                <div class="title-group1">
                    <h2>Tin tức công nghệ</h2>
                </div> 

                <div class="row">

                    <?php $dem=1; ?>
                    <?php $__currentLoopData = $tin_tuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if($dem==1){ echo "<div class='row'>";} ?>
                    <div class="col-md-6 col-sm-6" style="margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="<?php echo e(route('tintuc_chitiet', $tin->idTin)); ?>"><img alt="Electronic" src="clientassets/upload/tintuc/<?php echo e($tin->urlHinhTin); ?>" height="200px"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class=""><h4><?php echo e($tin->TieuDe); ?></h4></div>
                                <a class="view-more" href="<?php echo e(route('tintuc_chitiet', $tin->idTin)); ?>">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <?php if($dem==2){ echo "</div>";$dem=0;} ?>
                    <?php $dem++; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-cat">
                                    <a href="#/"><img alt="Electronic" src="clientassets/assets/images/products/img-07.jpg"></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="name-cat"><h3>Smartphones &amp; tablets</h3></div>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="list-cat">
                            <ul>
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                 
            </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('clientStore.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>