@extends('layouts.admin')
@section('title', 'Contact Us')


@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/bootstrap-toggle.min.css">    
    <style type="text/css" media="print">
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
    </style>
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Contact Us</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/contactus/show') }}">Contact Us</a></li>
        <li class="active">Show</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header card-header-part d-print-none">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Contact Us</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/contactus')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-plus-circle"></i> All Messages Received</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="margin-left: 10px;">
                        <table class="table table-bordered table-striped table-hover custom-view-table">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{$data->conus_name}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{$data->conus_phone}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$data->conus_email}}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>:</td>
                                <td>{{$data->conus_mess}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    @if ($data->conus_status == 1)
                                        <span class="badge bg-info status-color-active">Active</span>
                                    @else
                                        <span class="badge bg-danger status-color-inactive">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer card-footer-part d-print-none">
                 <a href="#" class="btn btn-primary" onclick="javascript:window.print();">PRINT</a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush


