<?php $__env->startSection('tittle'); ?>
    Cập nhật khách hàng
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
                    <li class="active">
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
                                    <h4 class="title">Cập nhật khách hàng</h4>
                                </div>
                                <div class="card-content">

                                    <form method="POST" action="admin/khachhang/sua/<?php echo e($khachhang->id); ?>">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Họ tên</label>
                                                    <input type="text" class="form-control" name="tenKhachHang" value="<?php echo e($khachhang->HoTen); ?>">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Địa chỉ Email</label>
                                                    <input type="email" class="form-control" name="emailKhachHang" value="<?php echo e($khachhang->Email); ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <br>
                                                <label class="checkbox-inline"><input type="checkbox" name="changePassword" id="changePassword"> Đổi mật khẩu</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                   
                                                    <label class="control-label">Mật khẩu</label>
                                                    <input type="password" class="form-control password"  name="matkhauKhachHang" value="<?php echo e($khachhang->MatKhau); ?>"  disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control password"  name="matkhaunhaplaiKhachHang" value="<?php echo e($khachhang->MatKhau); ?>" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="diachiKhachHang" value="<?php echo e($khachhang->Diachi); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Điện thoại</label>
                                                    <input type="text" class="form-control" name="dienthoaiKhachHang" value="<?php echo e($khachhang->DienThoai); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày sinh</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày sinh"  name="ngaysinhKhachHang" value="<?php echo e($khachhang->NgaySinh); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày đăng ký</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày đăng ký"  name="ngaydangkyKhachHang" value="<?php echo e($khachhang->NgayDangKy); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label><input type="radio" name="gioitinh" value="1" <?php echo e($khachhang->GioiTinh == 1 ? 'checked' : ''); ?>> Nam</label>
                                                    <label><input type="radio" name="gioitinh" value="0" <?php echo e($khachhang->GioiTinh == 0 ? 'checked' : ''); ?>> Nữ</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label><input type="radio" name="kichhoat" value="1" <?php if($khachhang->KichHoat == 1): ?> <?php echo e("checked"); ?> <?php endif; ?>> Admin</label>
                                                     <label><input type="radio" name="kichhoat" value="0"<?php if($khachhang->KichHoat == 0): ?> <?php echo e("checked"); ?> <?php endif; ?>> Khách hàng</label>
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