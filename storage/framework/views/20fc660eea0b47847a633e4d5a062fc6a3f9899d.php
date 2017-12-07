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
                                            <h4 class="title">Danh sách chi tiết đơn hàng</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="admin/chitietdonhang/them"><button type="button" class="btn-primary-outline btn-circle btn-lg"> + </button></a>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Mã</th>
                                            <th>Đơn hàng</th>
                                            <th>Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Khuyến mãi</th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $chitiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ctdh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td><?php echo e($ctdh->idChiTietDonHang); ?></td>
                                                <td><?php echo e($ctdh->idDonHang); ?></td>
                                                <td><?php echo e($ctdh->TenSP); ?></td>
                                                <td><?php echo e($ctdh->SoLuong); ?></td>
                                                <td><?php echo e($ctdh->GiaSP); ?></td>
                                                <td><?php echo e($ctdh->GiaKhuyenMai); ?></td>
                                                <td><?php echo e($ctdh->ThanhTien); ?></td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitietdonhang/xoa/<?php echo e($ctdh->idChiTietDonHang); ?>" onclick="return xac_nhan_xoa('Bạn có chắc muốn xóa không?')"> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitietdonhang/sua/<?php echo e($ctdh->idChiTietDonHang); ?>"> Edit</a></td>
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