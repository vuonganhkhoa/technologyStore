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

                    <div class="col-sm-3 col-left"></div>

                    <div class="col-sm-9 col-right">
                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-17.jpg"></a>
                        </div>
                        <div class="page-title">
                            <h1>Sản phẩm</h1>
                            <h4>Tìm kiếm theo <span style="color:red;">'<?php echo e($key); ?>'</span></h4>
                        </div>

                        <div>
                            <p><b>Tìm kiếm theo: </b><a href="<?php echo e(route('SearchGiaTangDan', $key)); ?>">Giá tăng dần</a> | <a href="<?php echo e(route('SearchGiaGiamDan', $key)); ?>">Giá giảm dần</a></p>
                        </div>

                        <div class="row products">
                            
                            <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">

                                                <?php if($sp->SanPhamMoi==1): ?>
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>Mới</span></div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($sp->GiaKhuyenMai != 0): ?>
                                                <div class="product_icon">
                                                    <div class="sale-icon"><span>Giảm</span></div>
                                                </div>
                                                <?php endif; ?>

                                            <a href="<?php echo e(route('sanpham_chitiet', $sp->idSP)); ?>" title="Nunc facilisis" class="product-image">
                                                <img src="clientassets/upload/sanpham/<?php echo e($sp->urlHinhSP); ?>" alt="Nunc facilisis" height="250px"/>
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="<?php echo e(route('sanpham_chitiet', $sp->idSP)); ?>" class="link-quickview">Xem chi tiết</a></li>
                                                    <li><a href="<?php echo e(route('muahang', $sp->idSP)); ?>" class="link-cart">Mua hàng</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="<?php echo e(route('sanpham_chitiet', $sp->idSP)); ?>" title="Nunc facilisis"><?php echo e($sp->TenSP); ?></a></h2>
                                            <div class="price-box">
                                                <?php if($sp->GiaKhuyenMai != 0): ?>
                                                <p class="special-price price">
                                                    <span class="price-label">Khuyến mãi: </span>
                                                    <span class="price"><?php echo e(number_format($sp->GiaKhuyenMai)); ?></span>
                                                </p>
                                                <p class="old-price price">
                                                    <span class="price-label">Giá: </span>
                                                    <span class="price"><?php echo e(number_format($sp->GiaSP)); ?></span>
                                                </p>
                                                <?php else: ?>
                                                <p class="price price">
                                                    <span class="price-label">Giá: </span>
                                                    <span class="price"><?php echo e(number_format($sp->GiaSP)); ?></span>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div><!-- /.product -->

                        <?php echo e($sanpham->links()); ?>

                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clientStore.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>