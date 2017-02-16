@extends('admin.layout.layout')
@section('title', '| Create New Client')
@section('content')
<section class="content-show">
    <div class="row main">
        <div class="col-md-8 col-offset-2">
           <div class="panel-heading">
               <div class="panel-title text-center">
                    <h3 class="title">Client Information</h3>
                    <hr />
                </div>
            </div>
            <div class="main-login main-center">
                <div class="row">
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Name:</td>
                            <td>Md. Morshed Khan Rana</td>
                          </tr>
                          <tr>
                            <td>Phone No:</td>
                            <td>01727293292</td>
                          </tr>
                          <tr>
                            <td>Email:</td>
                            <td><a href="mailto:info@support.com">info@support.com</a></td>
                          </tr>
                       
                          <tr>
                            <td>Address:</td>
                            <td>Nikujna-2, Khilkhet, Dhaka-1229</td>
                          </tr>
                          <tr>
                            <td>Product Quantity:</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <td>Total Quantity:</td>
                            <td>5</td>
                          </tr>
                            <td>Unit Price:</td>
                            <td>1250</td>
                          </tr>
                          </tr>
                            <td>Total Price:</td>
                            <td>12500</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <a href=""><button type="button" class="btn btn-warning btn-block-r">Edit Profile</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href=""><button type="button" class="btn btn-info btn-block-r">All Clients</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>   
    </div>       
</section>
@endsection 
