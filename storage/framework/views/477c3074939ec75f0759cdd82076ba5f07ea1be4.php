<?php $__env->startSection('tittle'); ?>
    Danh sách khách hàng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

    <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
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
                    <li class="active">
                        <a href="">
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
                </ul>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">

                                    <div class="row">
                                        <div class="col-md-11">
                                            <h4 class="title">Danh sách khách hàng</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="btn-primary-outline btn-circle btn-lg"> + </button>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Mã</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Ngày sinh</th>
                                            <th>Điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày đăng kí</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Apple</td>
                                                <td>1</td>
                                                <td>Apple</td>
                                                <td>1</td>
                                                <td>Apple</td>
                                                <td>Apple</td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href=""> Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Samsung</td>
                                                <td>1</td>
                                                <td>Apple</td>
                                                <td>Apple</td>
                                                <td>1</td>
                                                <td>Apple</td>
                                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
                                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Edit</a></td>
                                            </tr>
                                           
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