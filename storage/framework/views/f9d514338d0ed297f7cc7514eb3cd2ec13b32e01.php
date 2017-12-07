<?php $__env->startSection('tittle'); ?>
    Thêm tin tức
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
                    <li>
                        <a href="<?php echo e(route('sanpham')); ?>">
                            <i class="fa fa-archive"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    
                    <li  class="active">
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

                            <?php if(session('loi')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('loi')); ?> 
                            </div>
                            <?php endif; ?>

                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Thêm tin tức</h4>
                                </div>
                                <div class="card-content">

                                    <form method="POST" action="admin/tintuc/them" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn loại tin</label>
                                                    <select class="form-control" name="LoaiTin" id="LoaiTin">
                                                      <?php $__currentLoopData = $loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loaitin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($loaitin->idLoaiTin); ?>"><?php echo e($loaitin->TieuDeLoaiTin); ?></option>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tiêu đề</label>
                                                    <input type="text" class="form-control" name="tieuDe">
                                                </div>
                                            </div>   
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Tóm tắt</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="tomTat"></textarea>
                                                    <script type="text/javascript">ckeditor("tomTat");
                                                    
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Nội dung</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="noiDung"></textarea>
                                                    <script type="text/javascript">ckeditor("noiDung")</script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <input type="file" name="hinh" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày đăng</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày đăng"  name="ngayDang" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Số lượt xem</label>
                                                    <input type="number" value="0" class="form-control"  name="soLanXem">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Thêm</button>
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