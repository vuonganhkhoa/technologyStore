@extends ('clientStore.layout.master')

@section ('content')
<div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-left">
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-05.jpg"></a>
                        </div>
                        <div class="page-title">
                            <h1>Danh sách sản phẩm</h1>
                        </div>
                       
                        <ol id="products-list" class="products-list">
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class="new-icon"><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a class="product-image" title="Fusce aliquam" href="#" rel="author"><img alt="Fusce aliquam" src="images/products/1.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="" href="#">Fusce aliquam</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:67%" class="rating"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span id="product-price-1" class="price">$99.00</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price:</span>
                                                        <span id="old-price-1" class="price">$170.00</span>
                                                    </p>
                                                </div>
                                                <div class="desc std">
                                                    Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. <a class="link-learn" title="Fusce aliquam" href="#">Learn More</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Add to Cart</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Wishlist</em>Add to Wishlist</a></li>
                                                            <li><span class="separator">|</span> <a title="Compare" class="link-compare" href="#"><em class="tooltip">Compare</em>Add to Compare</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class="new-icon"><span>new</span>
                                                    </div>
                                                </div>
                                                <a class="product-image" title="Primis in faucibus" href="#" rel="author"><img alt="Primis in faucibus" src="images/products/2.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="Fusce aliquam" href="#">Primis in faucibus</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:87%" class="rating"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span id="product-price-11" class="regular-price">
                                                    <span class="price">$111.00</span> </span>
                                                </div>
                                                <div class="desc std">
                                                    Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. <a class="link-learn" title="Primis in faucibus" href="#">Learn More</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Add to Cart</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Wishlist</em>Add to Wishlist</a>
                                                            </li>
                                                            <li><span class="separator">|</span> <a title="Compare" class="link-compare" href="#"><em class="tooltip">Compare</em>Add to Compare</a>
                                                            </li>
                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class="new-icon"><span>new</span>
                                                    </div>
                                                </div>
                                                <a class="product-image" title="Nunc facilisis" href="#" rel="author"><img alt="Nunc facilisis" src="images/products/3.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="Primis in faucibus" href="#">Nunc facilisis</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:67%" class="rating"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                    <span class="price">$222.00</span> </span>
                                                </div>
                                                <div class="desc std">
                                                    Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. <a class="link-learn" title="Nunc facilisis" href="#">Learn More</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Add to Cart</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Wishlist</em>Add to Wishlist</a>
                                                            </li>
                                                            <li><span class="separator">|</span> <a title="Compare" class="link-compare" href="#"><em class="tooltip">Compare</em>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class="new-icon"><span>new</span>
                                                    </div>
                                                </div>
                                                <a class="product-image" title="Cras neque metus" href="#" rel="author"><img alt="Cras neque metus" src="images/products/5.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="Nunc facilisis" href="#">Cras neque metus</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:67%" class="rating"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span id="product-price-9" class="regular-price">
                                                    <span class="price">$155.00</span> </span>
                                                </div>
                                                <div class="desc std">
                                                    Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. <a class="link-learn" title="Cras neque metus" href="#">Learn More</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Add to Cart</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Wishlist</em>Add to Wishlist</a>
                                                            </li>
                                                            <li><span class="separator">|</span> <a title="Compare" class="link-compare" href="#"><em class="tooltip">Compare</em>Add to Compare</a>
                                                            </li>
                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class="new-icon"><span>new</span>
                                                    </div>
                                                </div>
                                                <a class="product-image" title="Nunc facilisis" href="#" rel="author"><img alt="Nunc facilisis" src="images/products/6.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">
                                            <div class="f-fix">
                                                <h2 class="product-name"><a title="Primis in faucibus" href="#">Nunc facilisis</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width:67%" class="rating"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                    <span class="price">$222.00</span> </span>
                                                </div>
                                                <div class="desc std">
                                                    Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. <a class="link-learn" title="Nunc facilisis" href="#">Learn More</a>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Add to Cart</button>
                                                        <ul class="add-to-links">
                                                            <li><a title="Wishlist" class="link-wishlist" href="#"><em class="tooltip">Wishlist</em>Add to Wishlist</a>
                                                            </li>
                                                            <li><span class="separator">|</span> <a title="Compare" class="link-compare" href="#"><em class="tooltip">Compare</em>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div>
@stop