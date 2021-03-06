<div class="header">
    <div class="topbar">
        <div class="container">
            <div class="topbar-left">
                <ul class="topbar-nav clearfix">
                    <li><span class="phone">0906482639</span></li>
                    <li><span class="email">technologystore96@gmail.com</span></li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav clearfix">
                    <li><a style="font-size: 14px;" href="dangnhap"><i class="fa fa-user" aria-hidden="true">  &nbsp;Đăng nhập</i></a></li>
                    <li>
                        <a style="font-size: 14px;" href="<?php echo e(route('giohang')); ?>" class=""><i class="fa fa-shopping-cart" >   &nbsp;Giỏ hàng</i></a>

                    </li>

                            <!-- <li class="dropdown">
                                <a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="clientassets/assets/images/flag-us.png" alt=""> English</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><img src="clientassets/assets/images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a href="#"><img src="clientassets/assets/images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <a href="./" class="logo"><img src="clientassets/assets/images/logo.png" alt=""></a>
                        </div>
                        
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>Thời gian</h2>
                                                <p>Thứ 2 - Chủ nhật: 9h - 22h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Giao miễn phí</h2>
                                                <p>Tất cả sản phẩm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Hoàn tiền 100%</h2>
                                                <p>Nếu sản phẩm lỗi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <form class="form-search" action="<?php echo e(route('timkiem')); ?>">
                                <input type="text" class="input-text" name="key" id="search" placeholder="Tìm sản phẩm...">
                                <!-- <div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Smart Phone</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div> -->
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="<?php echo e(route('giohang')); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                        Giỏ hàng (<?php echo e($count); ?>)
                                        <span class="price"><?php echo e($total); ?> đồng</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="cart-listing">
                                            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="media" id="media<?php echo e($sp->options->id); ?>">
                                                <div class="media-left"><a href="<?php echo e(route('sanpham_chitiet', $sp->options->id)); ?>"><img height="50px" src="clientassets/upload/sanpham/<?php echo e($sp->options->img); ?>" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">

                                                    <a id="remove-ajax" href="<?php echo e(route('xoahang', $sp->rowId)); ?>" class="remove-cart-item" value="<?php echo e($sp->options->id); ?>">&times;</a>

                                                    <h4><?php echo e($sp->name); ?></h4>
                                                    <div class="mini-cart-qty">Số lượng: <?php echo e($sp->qty); ?></div>
                                                    <div class="mini-cart-price">Giá: <?php echo e(number_format($sp->price)); ?> đồng</div>

                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        
                                        <div class="checkout-btn">
                                            <a href="<?php echo e(route('thanhtoan')); ?>" class="btn btn-default btn-md fwb">Đặt hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>MENU</h3></div>
                                    <div class="mega-menu-category" style="display:none;">
                                        <ul class="nav">
                                            <li>
                                                <a href="#">Điện thoại</a>
                                                <div class="wrap-popup" style="width: 200px;">
                                                    <div class="popup">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h3>Hãng sản suất</h3>
                                                                <ul class="nav">
                                                                    <?php $__currentLoopData = $hangsanxuat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li><a href="<?php echo e(route('sanpham_hsx', $hsx->idHangSX)); ?>"><?php echo e($hsx->TenHangSX); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nosub">
                                                <a href="<?php echo e(route('maytinhbang')); ?>">Máy tính bảng</a>
                                                <!-- <div class="wrap-popup" style="width: 200px;">
                                                    <div class="popup">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h3>Hãng sản suất</h3>
                                                                <ul class="nav">
                                                                    <li><a href="#">Apple</a></li>
                                                                    <li><a href="#">Samsung</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </li>

                                            <li class="nosub"><a href="<?php echo e(route('sanphammoi')); ?>">Sản phẩm mới</a></li>
                                            <li class="nosub"><a href="<?php echo e(route('sanphambanchay')); ?>">Sản phẩm bán chạy</a></li>
                                            <li class="nosub"><a href="<?php echo e(route('sanphamkhuyenmai')); ?>">Sản phẩm khuyến mãi</a></li> 
                                            <li class="nosub"><a href="<?php echo e(route('phukien')); ?>">Phụ kiện khác</a></li> 

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="menu clearfix visible-lg visible-md">
                                <li><a href="<?php echo e(route('trangchu')); ?>">Trang chủ</a></li>
                                <li><a href="<?php echo e(route('san_pham')); ?>">Sản phẩm</a></li>
                                <li><a href="<?php echo e(route('tin_tuc')); ?>">Tin tức công nghệ</a></li>
                                <li><a href="<?php echo e(route('lienhe')); ?>">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->

        <!-- <script src="js/jquery.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function(){



              $("#remove-ajax").click(function(){

                var id = $(this).attr('value');
                var route = "<?php echo e(route('xoahang', ':id')); ?>";
                route = route.replace(':id',id);

                $.ajax({
                    url: route,
                    type: 'get',
                    data:{id:id},
                    success:function(){
                        $('#media'+id).hide();
                    }
                })
            });

          });



      </script> -->