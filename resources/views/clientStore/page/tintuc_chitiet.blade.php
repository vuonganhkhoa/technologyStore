@extends('clientStore.layout.master')

@section ('content')
<style type="text/css" media="screen">
    .desc p{
        font-size: 16px;
    }
    .desc h4,h2{
        font-weight: bold;
        font-size: 20px;
    }
</style>
<div class="main">
        	<div class="container">
                <div class="row" style="margin-top: 10px;"></div>
            	<div class="row">

                    <div class="col-sm-3">
                    </div><!-- /sidebar -->

                    @foreach ($tintuc as $tin)
                	<div class="col-sm-7">
                    	<div class="blog-detail blog-list">
                        	<div class="blog-image"><img src="clientassets/upload/tintuc/{{$tin->urlHinhTin}}" class="img-responsive" alt=""></div>

                            <div class="item">
                                <div class="item-inner">
                                    <h2 class="product-name"><a title="" href="#">{{$tin->TieuDe}}</a></h2>
                                    
                                    <div class="blog-attr">
                                        <span>Post by <a href="#">Admin</a></span>
                                        <span class="separator">|</span>
                                        <span>{{$tin->NgayDang}}</span>
                                    </div>
                                    <div class="desc">
                                       	{!!$tin->NoiDung!!}</div>
                    @endforeach


                                    <div class="share-post">
                                    	<span class="share-label">Chia sẻ</span>
                                        <ul>
                                        	<li class="color-facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        	<li class="color-twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        	<li class="color-gplus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>

		            </div>
		            </div>
		            <hr>
                            <!-- <div class="title-group3">
                            	<h3>Bình luận</h3>
                            </div>
                            <div class="comment-list">
                            	<div class="comment-item">
                                    <div class="media">
                                        <div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
                                        <div class="media-body">
                                            <div class="comment-date">12/5/2104</div>
                                            <div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                        </div>
                                    </div>
                                </div> /.commnent-item -->
                            </div>
                            <hr> 
                            <div class="title-group3">
                            	<h3>Để lại bình luận</h3>
                            </div>
                            <form>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="form-group">
                                    	<input type="text" class="form-control input-md" placeholder="Tên">
                                    </div>
                                </div>
                            	<div class="col-sm-6">
                                	<div class="form-group">
                                    	<input type="text" class="form-control input-md" placeholder="Email">
                                    </div>
                                </div>
                            	<div class="col-sm-12">
                                	<div class="form-group">
                                    	<input type="text" class="form-control input-md" placeholder="Tiêu đề">
                                    </div>
                                </div>
                            	<div class="col-sm-12">
                                	<div class="form-group">
                                    	<textarea class="form-control" placeholder="Bình luận của bạn" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">Đăng</button>
                            </form>
                            <br>
                        </div>
                    </div><!-- /content -->
                </div>
            </div>
        </div><!-- /.main -->
@stop