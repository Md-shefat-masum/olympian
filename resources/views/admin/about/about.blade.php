@extends('layouts.admin')
@section('title', 'About')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">About</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/about') }}">About</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/about/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update About Page Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/basic')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> Basic Information</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Page Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" class="form-control" name="about_pagename" value="{{$data->about_pagename}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Top Link One: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="about_toplinkone" value="{{$data->about_toplinkone}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Top Link Two: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="about_toplinktwo" value="{{$data->about_toplinktwo}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Title: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="about_title" value="{{$data->about_title}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Button: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="about_button" value="{{$data->about_button}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Button URL: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="about_url" value="{{$data->about_url}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Description 1: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="about_description1">{{$data->about_description1}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Description 2: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="about_description2">{{$data->about_description2}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">About Description 3: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="about_description3">{{$data->about_description3}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">About Page Banner: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="about_pagebanner" value="{{old('about_pagebanner')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->about_pagebanner != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->about_pagebanner) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">About Photo: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="about_photo" value="{{old('about_photo')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->about_photo != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->about_photo) }}" alt="logo">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="logo">
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