@extends('clientStore.layout.master')

@section('content')
<div class="main">
        	<div class="container">
        		<div class="row" style="margin-top: 10px;"></div>
                <div class="checkout">
                	<div class="row">
                    	<div class="col-sm-9">
                        	<div class="checkout-step">
                        		<div class="checkout-step-item">
                                	<div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                        <span class="number">1</span>
                                        <h2>Checkout Method</h2>
                                    </div>
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4>Checkout as a gust or register</h4>
                                                    <div class="line2 mtb20"></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Register with us for future convenience:</label>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" value="option1" name="register-type" checked> Checkout as Guest
                                                          </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" value="option2" name="register-type"> Register
                                                          </label>
                                                        </div>
                                                    </div>
                                                    <p class="text-primary">Register and save time!</p>
                                                    <p class="text-primary">Register with us for future convenience:</p>
                                                    <ul class="list-unstyled">
                                                        <li>+  Fast and easy check out</li>
                                                        <li>+  Easy access to your order history and status</li>
                                                    </ul>
                                                    <br>
                                                    <p><button type="button" class="btn btn-danger btn-md btn-continue fwb">CONTINUE</button></p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4>Login</h4>
                                                    <div class="line2 mtb20"></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Already registered?</label>
                                                        <p class="text-muted">Please Login below:</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email address *</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Password *</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <p><a href="#">Forgot your password?</a></p>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger btn-md btn-login fwb">LOGIN</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-two">
                                        <span class="number">2</span>
                                        <h2>BILLING INFORMATION</h2>
                                    </div>
                                    <div id="checkout-two" class="collapse">
                                    	<div class="step-content">
                                    		Billing Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-three">
                                        <span class="number">3</span>
                                        <h2>SHIPPING INFORMATION</h2>
                                    </div>
                                    <div id="checkout-three" class="collapse">
                                    	<div class="step-content">
                                    		Shipping Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-four">
                                        <span class="number">4</span>
                                        <h2>SHIPPING METHOD</h2>
                                    </div>
                                    <div id="checkout-four" class="collapse">
                                    	<div class="step-content">
                                    		Shipping Method
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-five">
                                        <span class="number">5</span>
                                        <h2>PAYMENT INFORMATION</h2>
                                    </div>
                                    <div id="checkout-five" class="collapse">
                                    	<div class="step-content">
                                    		Payment Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-six">
                                        <span class="number">6</span>
                                        <h2>ORDER REVIEW</h2>
                                    </div>
                                    <div id="checkout-six" class="collapse">
                                    	<div class="step-content">
                                    		Order Review
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        	<div class="block block-layered-nav">
                                <div class="block-content">
                                	<h2>Checkout progress</h2>
                                    <ol class="checkout-progress">
                                        <li><span class="fa fa-play-circle-o"></span> Billing address</li>
                                        <li><span class="fa fa-play-circle-o"></span> Shipping address</li>
                                        <li><span class="fa fa-play-circle-o"></span> shipping method</li>
                                        <li><span class="fa fa-play-circle-o"></span> payment methor</li>
                                    </ol>
                                </div>
                            </div><!-- /.block - Comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
@stop