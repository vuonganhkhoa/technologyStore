<?php $__env->startSection('tittle'); ?>
    Đơn hàng
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
                    <li class="active">
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
                                            <h4 class="title">Danh sách đơn hàng</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="admin/donhang/them"><button type="button" class="btn-primary-outline btn-circle btn-lg"> + </button></a>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Mã</th>
                                            <th>Khách hàng</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Tên người nhận</th>
                                            <th>Địa điểm giao</th>
                                            <th>Ngày giao</th>
                                            <th>Email</th>
                                            <th>Điện thoại</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $donhang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $don): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td><?php echo e($don->idDonHang); ?></td>
                                                <td><?php echo e($don->HoTen); ?></td>
                                                <td><?php echo e($don->NgayDatHang); ?></td>
                                                <td><?php echo e($don->TenNguoiNhan); ?></td>
                                                <td><?php echo e($don->DiaDiemGiao); ?></td>
                                                <td><?php echo e($don->NgayGiaoHang); ?></td>
                                                <td><?php echo e($don->Email); ?></td>
                                                <td><?php echo e($don->DienThoai); ?></td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/donhang/xoa/<?php echo e($don->idDonHang); ?>" onclick="return xac_nhan_xoa('Bạn có chắc muốn xóa không?')"> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/donhang/sua/<?php echo e($don->idDonHang); ?>"> Edit</a></td>
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