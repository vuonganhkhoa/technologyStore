<?php $__env->startSection('tittle'); ?>
    Cập nhật loại tin
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
                    <li>
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
                    <li class="active">
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

                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Cập nhật loại tin</h4>
                                </div>
                                <div class="card-content">
                                    <form method="POST" action="admin/loaitin/sua/<?php echo e($loaitin->idLoaiTin); ?>">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên loại tin</label>
                                                    <input type="text" class="form-control" name="tenLoaiTin" value="<?php echo e($loaitin->TieuDeLoaiTin); ?>">
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