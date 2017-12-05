@extends ('clientStore.layout.master')


@section('content')
<style type="text/css" media="screen">
    .price{
        font-size: 16px !important;
        font-weight: bold !important;
    }
</style>
<div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">

                    </div><!-- /sidebar -->
                    <div class="col-sm-9">
                        <div class="blog-detail blog-list">
                            <div class="blog-image"><img src="public/clientassets/upload/tintuc/{{$tintuc->urlHinhTin}}" class="img-responsive" alt=""></div>
                            <div class="item">
                                <div class="item-inner">
                                    <h2 class="product-name"><a title="" href="#">{{$tintuc->TieuDe}}</a></h2>
                                    <div class="blog-attr">
                                        <span>Post by <a href="#">Admin</a></span>
                                        <span class="separator">|</span>
                                        <span>{{$tintuc->NgayDang}}</span>
                                    </div>
                                    <div class="desc">
                                        {!!$tintuc->NoiDung!!}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="title-group3">
                                <h3>Bình luận</h3>
                            </div>
                            <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your comment" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">SUBMIT COMMENT</button>
                            </form>
                            <br>
                        </div>
                    </div><!-- /content -->
                </div>
            </div>
        </div><!-- /.main -->

@endsection