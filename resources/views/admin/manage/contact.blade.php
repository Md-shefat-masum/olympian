@extends('layouts.admin')
@section('title', 'Contact Information')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Contact Information</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/manage/contact') }}">Contact Information</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/manage/contact/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update Contact Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/manage/social')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> Social</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group">
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" class="form-control" name="ci_phone1" value="{{$data->ci_phone1}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>                            
                            <input type="text" class="form-control" name="ci_phone2" value="{{$data->ci_phone2}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>                            
                            <input type="text" class="form-control" name="ci_email1" value="{{$data->ci_email1}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>                            
                            <input type="text" class="form-control" name="ci_email2" value="{{$data->ci_email2}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-home"></i></span>
                            </div>                            
                            <input type="text" class="form-control" name="ci_add1" value="{{$data->ci_add1}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-home"></i></span>
                            </div>                            
                            <input type="text" class="form-control" name="ci_add2" value="{{$data->ci_add2}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-button text-center">
                    <button type="submit" class="btn btn-submit btn-secondary waves-effect">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
    <script src="{{asset('contents/admin')}}/assets/js/select2.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/dropify.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/dropify.js"></script>

    <script>
        $(function() {
            $(".select2").select2({
                width: "100%",
                placeholder: "Choose Any",
            });
        });
    </script>
@endpush