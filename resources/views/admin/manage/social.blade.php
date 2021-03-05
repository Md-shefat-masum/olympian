@extends('layouts.admin')
@section('title', 'Social')

@push('css')

@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Social Media</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/manage/social') }}">Social Media</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/manage/social/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update Social Media Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/manage/basic')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> Basic</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group">
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                            </div>
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" class="form-control" name="sm_facebook" value="{{$data->sm_facebook}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_twitter" value="{{$data->sm_twitter}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-linkedin"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_linkedin" value="{{$data->sm_linkedin}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pinterest"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_pinterest" value="{{$data->sm_pinterest}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_instagram" value="{{$data->sm_instagram}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-youtube"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_youtube" value="{{$data->sm_youtube}}">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-google"></i></span>
                            </div>
                            <input type="text" class="form-control" name="sm_google" value="{{$data->sm_google}}">
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

@endpush