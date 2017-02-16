@extends('admin/layout/layout')
@section('content')
   
<section class="content-dashboard">
    <h2>
        Dashboard
        <small>QuickerBD Online Shopping</small>
    </h2>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

{{-- <section class="content">
    @include('flash::message')
</section>
 --}}
@stop