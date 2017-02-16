@extends('admin/layout/layout')
@section('title', '| Create New Client')
@section('content')
<section class="content-create">
    <div class="row main">
    <div class="col-md-8 col-offset-2">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h3 class="title">Registration</h3>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                    <form  method="post" action="#">

                        <div class="row main">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label required">Your Name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="Enter your Name..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="phone" class="cols-sm-2 control-label">Phone No</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone No..."/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email..."/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="cols-sm-2 control-label">Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span>
                                    <textarea name="address" id="address" class="form-control input-sm" placeholder="Enter Address..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row main">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="p_quantity" class="cols-sm-2 control-label">Product Quantity</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa fa-shopping-cart fa-lg" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="p_quantity" id="p_quantity"  placeholder="Enter Product Quantity..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="t_p_quantity" class="cols-sm-2 control-label">Total Quantity</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="t_p_quantity" id="t_p_quantity"  placeholder="Enter Total Quantity..."/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row main">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="u_price" class="cols-sm-2 control-label">Unit Price</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money fa-lg" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="u_price" id="u_price"  placeholder="Enter Unit Price..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="t_price" class="cols-sm-2 control-label">Total Price</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-credit-card fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="t_price" id="t_price"  placeholder="Enter Total Price..."/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="button" class="btn btn-primary btn-block-r login-button">Register</button>
                        </div>
                       {{--  <div class="login-register" style="padding-bottom: 10px;">
                            <a href="index.php">Login</a>
                         </div> --}}
                    </form>
                </div>
            </div>
            </div>
</section>
@endsection 
