<?php $__env->startSection('tittle'); ?>
    Sản Phẩm
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
                    <li>
                        <a href="<?php echo e(route('loaitin')); ?>">
                            <i class="fa fa-list"></i>
                            <p>Loại tin tức</p>
                        </a>
                    </li>
                    <li class="active">
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
                    <li>
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
                        <div class="col-md-12">
                            <?php if(session('thongbao')): ?>
                                  <div class="alert alert-success">
                                    <?php echo e(session('thongbao')); ?>

                                  </div>
                                <?php endif; ?>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                        
                                    <div class="row">
                                        <div class="col-md-11">
                                            <h4 class="title">Danh sách các sản phẩm</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="admin/sanpham/them"><button type="button" class="btn-primary-outline btn-circle btn-lg"> + </button></a>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hãng sản xuất</th>
                                            <th>Giá</th>
                                            <th>Khuyến mãi</th>
                                            <th>Tồn kho</th>
                                            <th>Sản phẩm mới</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($sp->idSP); ?></td>
                                                <td><?php echo e($sp->TenSP); ?></td>
                                                <td><?php echo e($sp->TenHangSX); ?></td>
                                                <td><?php echo e(number_format($sp->GiaSP)); ?></td>
                                                <td><?php echo e(number_format($sp->GiaKhuyenMai)); ?></td>
                                                <td><?php echo e($sp->TonKho); ?></td>
                                                <td><?php echo e($sp->SanPhamMoi); ?></td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/<?php echo e($sp->idSP); ?>" onclick="return xac_nhan_xoa('Bạn có chắc muốn xóa sản phẩm này?')"> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/<?php echo e($sp->idSP); ?>"> Edit</a></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminDashboard.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>