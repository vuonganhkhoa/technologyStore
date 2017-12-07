<?php $__env->startSection('content'); ?>
<div class="main">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-3"></div>
        			<div class="col-sm-9"><h2>Tin công nghệ</h2></div>
        		</div>
            	<div class="row">
                    <div class="col-sm-3"></div>
                	<div class="col-sm-9">
                    	<ol id="products-list" class="blog-list">
							<?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="images-container">
                                                <a class="product-image" title="Fusce aliquam" href="<?php echo e(route('tintuc_chitiet', $tin->idTin)); ?>" rel="author"><img alt="Fusce aliquam" src="clientassets/upload/tintuc/<?php echo e($tin->urlHinhTin); ?>"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2 class="product-name"><a title="" href="<?php echo e(route('tintuc_chitiet', $tin->idTin)); ?>"><?php echo e($tin->TieuDe); ?></a></h2>
                                            <div class="blog-attr">
                                            	<span>Post by <a href="#">Admin</a></span>
                                                <span class="separator">|</span>
                                                <span><?php echo e($tin->NgayDang); ?></span>
                                            </div>
                                            <div class="desc">
                                               <?php echo $tin->TomTat; ?>

                                            </div>
                                            <a href="<?php echo e(route('tintuc_chitiet', $tin->idTin)); ?>" class="btn btn-default btn-readmore">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    	</ol>
                        <!-- <nav>
                          <ul class="pagination">
                            <li><a href="#" aria-label="Previous">Prev</a></li>
                            <li class="divider"><span>|</span></li>
                            <li><a href="#">1</a></li>
                            <li class="divider"><span>|</span></li>
                            <li><a href="#">2</a></li>
                            <li class="divider"><span>|</span></li>
                            <li><a href="#" aria-label="Next">Next</a></li>
                          </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
</div><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clientStore.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>