@extends('layouts.admin')
@section('title', 'Basic')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Basic</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/manage/basic') }}">Basic</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/manage/basic/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update Basic Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/manage/social')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> Social Media</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Basic Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" class="form-control" name="basic_name" value="{{$data->basic_name}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Basic Title: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="basic_title" value="{{$data->basic_title}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Subtitle: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="basic_subtitle" value="{{$data->basic_subtitle}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Basic About Us: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="basic_aboutus">{{$data->basic_aboutus}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Basic Details: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="basic_details">{{$data->basic_details}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Favicon: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="basic_favicon" value="{{old('basic_favicon')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->basic_favicon != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->basic_favicon) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Logo: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="basic_logo" value="{{old('basic_logo')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->basic_logo != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->basic_logo) }}" alt="logo">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="logo">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Sticky Logo: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="basic_stickylogo" value="{{old('basic_stickylogo')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->basic_stickylogo != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->basic_stickylogo) }}" alt="sticky-logo">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="sticky-logo">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Extra/Footer Logo: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="basic_flogo" value="{{old('basic_flogo')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->basic_flogo != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->basic_flogo) }}" alt="extra-logo">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="extra-logo">
                            @endif
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