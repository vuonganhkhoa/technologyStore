<?php $__env->startSection('content'); ?>
<div class="main">
            <div class="container">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-3 col-left">
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <!-- <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-05.jpg"></a>
                        </div> -->
                        <div class="page-title">
                            <h1>Danh sách sản phẩm hãng <?php echo e($hangsanxuat->TenHangSX); ?></h1>
                        </div>
                       
                        <ol id="products-list" class="products-list">

                            <?php $__currentLoopData = $sanpham_hangSX; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <?php if($hsx->SanPhamMoi==1): ?>
                                                    <div class="new-icon"><span>Mới</span></div>
                                                    <?php endif; ?>
                                                    <?php if($hsx->GiaKhuyenMai != 0): ?>
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                    <?php endif; ?>
                                                </div>
                                                <a class="product-image" title="Fusce aliquam" href="<?php echo e(route('sanpham_chitiet', $hsx->idSP)); ?>" rel="author"><img alt="Fusce aliquam" src="clientassets/upload/sanpham/<?php echo e($hsx->urlHinhSP); ?>" ></a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="" href="<?php echo e(route('sanpham_chitiet', $hsx->idSP)); ?>"><?php echo e($hsx->TenSP); ?></a></h2>

                                                <?php if($hsx->GiaKhuyenMai != 0): ?>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Giá khuyến mãi: </span>
                                                    <span id="product-price-1" class="price"><?php echo e(number_format($hsx->GiaKhuyenMai)); ?></span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Giá: </span>
                                                        <span id="old-price-1" class="price"><?php echo e(number_format($hsx->GiaSP)); ?></span>
                                                    </p>
                                                </div>
                                                <?php else: ?>
                                                <div class="price-box">
                                                    <p class="price">
                                                        <span class="price-label">Giá: </span>
                                                        <span id="old-price-1" class="price"><?php echo e(number_format($hsx->GiaSP)); ?></span>
                                                    </p>
                                                </div>
                                                <?php endif; ?>

                                                <div class="desc std">
                                                   <?php echo $hsx->MoTaSP; ?> <br>
                                                   <a class="link-learn" title="Fusce aliquam" href="<?php echo e(route('sanpham_chitiet', $hsx->idSP)); ?>" style="font-size: 18px; color:orange">Xem chi tiết</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <a href="<?php echo e(route('muahang', $hsx->idSP)); ?>" class="btn btn-danger" title="Add to Cart" type="button">Mua hàng</a>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </ol>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clientStore.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>