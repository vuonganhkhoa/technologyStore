<?php $__env->startSection('content'); ?>
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
                                                <img src="clientassets/upload/sanpham/<?php echo e($chitiet->urlHinhSP); ?>" alt="Fusce aliquam" title="Fusce aliquam" />
                                            </a>
                                        </p>
                                        <div class="more-views thumbnail-container">
                                            <ul class="bxslider">

                                                <?php $__currentLoopData = $hinhsanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="thumbnail-item">
                                                    <a href="clientassets/upload/sanpham/<?php echo e($hinh->TenHinh); ?>" class="cloud-zoom-gallery" title="" name="clientassets/upload/sanpham/<?php echo e($hinh->TenHinh); ?>" rel="useZoom: 'ma-zoom1', smallImage: 'clientassets/upload/sanpham/<?php echo e($hinh->TenHinh); ?>'">
                                                        <img src="clientassets/upload/sanpham/<?php echo e($hinh->TenHinh); ?>" alt="" height="80px" />
                                                    </a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1><?php echo e($chitiet->TenSP); ?></h1>
                                    </div>
                                    
                                    <div class="box-container2"> 
                                        <?php if($chitiet->GiaKhuyenMai != 0): ?>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Giá khuyến mãi: </span>
                                            <span id="product-price-1" class="price"><?php echo e(number_format($chitiet->GiaKhuyenMai)); ?></span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Giá: </span>
                                                <span id="old-price-1" class="price"><?php echo e(number_format($chitiet->GiaSP)); ?></span>
                                            </p>
                                        </div>
                                        <?php else: ?>
                                        <div class="price-box">
                                            <p class="price">
                                                <span class="price-label">Giá: </span>
                                                <span id="old-price-1" class="price"><?php echo e(number_format($chitiet->GiaSP)); ?></span>
                                            </p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="short-description">
                                        <div class="std"><?php echo $chitiet->MoTaSP; ?></div>
                                    </div>
                                    <p class="availability in-stock">Còn: <span><?php echo e($chitiet->TonKho . ' sản phẩm'); ?></span></p>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Số lượng: </label>
                                            <div class="col-md-3 col-sm-5">
                                                <div class="input-group qty">

                                                    <input type="text" class="form-control" value="1" disabled>
     
                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                        <a class="btn btn-danger btn-cart link-cart" href="<?php echo e(route('muahang', $chitiet->idSP)); ?>">Mua hàng</a>

                                    </form>
                                </div><!-- /.product-shop -->
                            </div>
                            <div class="product-tab tab-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#product-desc" data-toggle="tab">Thông tin sản phẩm</a></li>
                                
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-desc">
                                        <?php echo $chitiet->ChiTietSP; ?>

                                    </div>
                                </div>
                            </div><!-- /.product-tab -->
                        </div><!-- /.product-view -->
                        


                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm liên quan</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">

                                    <?php $__currentLoopData = $sanpham_lienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lienquan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                </div>
                                                <a href="<?php echo e(route('sanpham_chitiet', $lienquan->idSP)); ?>" title="Nunc facilisis" class="product-image">
                                                    <img src="clientassets/upload/sanpham/<?php echo e($lienquan->urlHinhSP); ?>" alt="Nunc facilisis" height="200px" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="<?php echo e(route('sanpham_chitiet', $lienquan->idSP)); ?>" class="link-quickview">Xem chi tiet</a></li>
                                                        <li><a href="<?php echo e(route('muahang', $lienquan->idSP)); ?>" class="link-cart">Mua hàng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="<?php echo e(route('sanpham_chitiet', $lienquan->idSP)); ?>" title="Nunc facilisis"><?php echo e($lienquan->TenSP); ?></a></h2>
                                                <div class="price-box">
                                                    <?php if($lienquan->GiaKhuyenMai != 0): ?>
                                                    <p class="special-price">
                                                        <span class="price-label">Giá khuyến mãi: </span>
                                                        <span class="price"><?php echo e(number_format($lienquan->GiaKhuyenMai)); ?></span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($lienquan->GiaSP)); ?></span>
                                                    </p>
                                                    <?php else: ?>
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span class="price"><?php echo e(number_format($lienquan->GiaSP)); ?></span>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </div>
                            </div>
                        </div><!-- /.featuredproductslider-container -->
                    </div><!-- /.col-right -->
                  

                    </div><!-- /.col-left -->
                </div>
            </div>
        </div><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clientStore.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>