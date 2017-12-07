<?php $__env->startSection('tittle'); ?>
    Chi tiết đơn hàng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

    <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo e(route('hangsanxuat')); ?>">
                            <i class="fa fa-building-o"></i>
                            <p>Hãng sản xuất</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('khachhang')); ?>">
                            <i class="fa fa-users fa-fw"></i>
                            <p>Khách hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('loaisanpham')); ?>">
                            <i class="fa fa-list"></i>
                            <p>Loại sản phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('loaitin')); ?>">
                            <i class="fa fa-list"></i>
                            <p>Loại tin tức</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('sanpham')); ?>">
                            <i class="fa fa-archive"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('tintuc')); ?>">
                            <i class="fa fa-newspaper-o"></i>
                            <p>Tin tức</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('donhang')); ?>">
                            <i class="fa fa-cart-plus"></i>
                            <p>Đơn hàng</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo e(route('chitietdonhang')); ?>">
                            <i class="fa fa-file-text"></i>
                            <p>Chi tiết đơn hàng</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('hinhsanpham')); ?>">
                            <i class="fa fa-picture-o"></i>
                            <p>Hình sản phẩm</p>
                        </a>
                    </li>
                </ul>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            
                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">  <!--div đỏ  -->
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($err); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('thongbao')); ?> 
                            </div>
                            <?php endif; ?>

                            <?php if(session('loi')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('loi')); ?> 
                            </div>
                            <?php endif; ?>

                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Cập nhật chi tiết đơn hàng</h4>
                                </div>
                                <div class="card-content">

                                    <form method="POST" action="admin/chitietdonhang/sua/<?php echo e($chitietdonhang->idChiTietDonHang); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn đơn hàng</label>
                                                    <select class="form-control" name="DonHang" id="LoaiTin">
                                                      <?php $__currentLoopData = $donhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $don): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($don->idDonHang); ?>" <?php if($chitietdonhang->idDonHang==$don->idDonHang): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($don->idDonHang); ?></option>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn sản phẩm</label>
                                                    <select class="form-control SanPham" name="SanPham" id="LoaiTin">
                                                      <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($sp->idSP); ?>" <?php if($chitietdonhang->idSP==$sp->idSP): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($sp->TenSP); ?></option>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label SoLuong">Số lượng</label>
                                                    <input type="text" class="form-control" name="SoLuong" value="<?php echo e($chitietdonhang->SoLuong); ?>" id="SoLuong">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label GiaSP">Giá sản phẩm</label>
                                                    <input type="text" class="form-control" name="GiaSP" value="<?php echo e($chitietdonhang->GiaSP); ?>" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label GiaKM">Giá khuyến mãi</label>
                                                    <input type="text" class="form-control" name="GiaKhuyenMai" value="<?php echo e($chitietdonhang->GiaKhuyenMai); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label thanhtien">Thành tiền</label>
                                                    <input type="text" class="form-control" name="ThanhTien" value="<?php echo e($chitietdonhang->ThanhTien); ?>" >
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminDashboard.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>