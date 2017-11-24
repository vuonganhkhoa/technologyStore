@extends('clientStore.layout.master')

@section('content')
<div class="main">
        	<div class="container">
        		<div class="row" style="margin-top: 10px;"></div>
                <div class="cart">
                	<form>
                    <div class="table-responsive">
                	<table class="table custom-table">
                        <thead>
                            <tr class="first last">
                                <th>Remove</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Edit</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Grandtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
            					<td class="text-center"><a class="btn-remove" href="#"><span class="fa fa-trash-o"></span></a></td>
            					<td><a class="product-image" title="Primis in faucibus" href="#">
                                	<img alt="Primis in faucibus" src="images/products/12.jpg">
                                </a></td>
            					<td>
                                	<a href="#">Et harum quidem rerum</a>
                                    <div class="text-muted">Size: 42<br>
                                    Color: Red</div>
                                </td>
            					<td class="text-center"><a href="#">Edit</a></td>
                        		<td class="qty">
                               		<div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn" type="button">-</button>
                                        </span>
                                        <input type="text" class="form-control" value="3">
                                        <span class="input-group-btn">
                                            <button class="btn" type="button">+</button>
                                        </span>
                                    </div><!-- /input-group -->
                            	</td>
                        		<td class="subtotal">$250.00</td>
                				<td class="grandtotal">$250.00</td>
        					</tr>
                    	</tbody>
                    </table>
                    </div>
                    <div class="text-right">
                    	<a href="#" class="btn btn-default btn-md">CONTINUE SHOPPING</a>
                        <button type="submit" class="btn btn-danger btn-md">UPDATE SHOPPING CART</button>
                    </div>
                    <div class="line2"></div>
                    <div class="row">
                    	<div class="col-sm-4">
                        	<h4>ESTIMATE SHIPPING AND TAX</h4>
                            <p class="text-muted">Enter your destination to get shipping &amp; tax</p>
                            <div class="form-group">
                            	<label class="control-label">Country <em>*</em></label>
                                <select class="form-control">
                                	<option>-- Select options  --</option>
                                </select>
                            </div>
                            <div class="form-group">
                            	<label class="control-label">State/Province <em>*</em></label>
                                <select class="form-control">
                                	<option>-- Select options  --</option>
                                </select>
                            </div>
                            <div class="form-group">
                            	<label class="control-label">Zip/Postal Code</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                            	<button type="button" class="btn btn-default btn-md">GET A QUOTE</button>
                            </div>
                        </div>
                    	<div class="col-sm-4">
                        	<h4>DISCOUNT CODE</h4>
                        	<p class="text-muted">Enter your coupon code if you have one</p>
                            <div class="form-group">
                            	<label class="control-label">&nbsp;</label>
                            	<input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                            	<button type="button" class="btn btn-default btn-md">APPLY COUPON</button>
                            </div>
                        </div>
                    	<div class="col-sm-4">
                        	<table class="table table-cart-total">
                            	<tr>
                                	<td>Subtotal:</td>
                                    <td class="text-right">$250.00</td>
                                </tr>
                            	<tr>
                                	<td>Grandtotal:</td>
                                    <td class="text-right">$250.00</td>
                                </tr>
                            </table>
							<div class="text-right">
                            	<p><button type="button" class="btn btn-default btn-md fwb">PROCCED TO CHECKOUT</button></p>
                                <p><a href="#" class="text-muted">Checkout with multiples address</a></p>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.main -->
@stop