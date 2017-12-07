<?php $__env->startSection('tittle'); ?>
    Cập nhật Sản Phẩm
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
    <style type="text/css" media="screen">
    .hinh{
        width: 200px !important;
    }
    </style>

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
                                    <h4 class="title">Cập nhật sản phẩm</h4>
                                </div>
                                <div class="card-content">

                                    <form method="POST" action="admin/sanpham/sua/<?php echo e($sanpham->idSP); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn loại sản phẩm</label>
                                                    <select class="form-control" name="LoaiSanPham" id="LoaiSanPham">
                                                      <?php $__currentLoopData = $loaisp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($loai->idLoaiSP); ?>" <?php if($sanpham->idLoaiSP == $loai->idLoaiSP): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($loai->TenLoaiSP); ?></option>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn hãng sản xuất</label>
                                                    <select class="form-control" name="HangSX" id="HangSX">
                                                      <?php $__currentLoopData = $hangSX; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($hang->idHangSX); ?>" <?php if($sanpham->idHangSX == $hang->idHangSX): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($hang->TenHangSX); ?></option>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên sản phẩm</label>
                                                    <input type="text" class="form-control" name="tenSP" value="<?php echo e($sanpham->TenSP); ?>">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Giá sản phẩm</label>
                                                    <input type="text" class="form-control" name="giaSP" value="<?php echo e($sanpham->GiaSP); ?>">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Giá khuyến mãi</label>
                                                    <input type="text" class="form-control" name="khuyenmaiSP" value="<?php echo e($sanpham->GiaKhuyenMai); ?>">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Mô tả</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="mota"><?php echo e($sanpham->MoTaSP); ?></textarea>
                                                    <script type="text/javascript">ckeditor("mota")</script>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Chi tiết</label>
                                                    <textarea id="demo" class="form-control ckeditor" rows="8" name="chitiet"><?php echo e($sanpham->ChiTietSP); ?></textarea>
                                                    <script type="text/javascript">ckeditor("chitiet")</script>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <img class="hinh" src="public/clientassets/upload/sanpham/<?php echo e($sanpham->urlHinhSP); ?>" alt="">
                                                  <input type="hidden" name="hinh_sp" value="<?php echo e($sanpham->urlHinhSP); ?>">
                                                  <input type="file" name="hinh" value="<?php echo e(old('hinh_sp')); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày đăng</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày đăng"  name="ngaydang" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tồn kho</label>
                                                    <input type="number" value="<?php echo e($sanpham->TonKho); ?>" class="form-control"  name="tonkho">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ghi chú</label>
                                                    <input type="text" value="<?php echo e($sanpham->GhiChu); ?>" class="form-control"  name="ghichu">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Số lần mua</label>
                                                    <input type="number" value="<?php echo e($sanpham->SoLanMua); ?>" class="form-control"  name="solanmua">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Số lần xem</label>
                                                    <input type="number" value="<?php echo e($sanpham->SoLanXem); ?>" class="form-control"  name="solanxem">
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Sản phẩm mới</label>
                                                    <input type="number" value="<?php echo e($sanpham->SanPhamMoi); ?>" class="form-control"  name="sanphammoi">
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