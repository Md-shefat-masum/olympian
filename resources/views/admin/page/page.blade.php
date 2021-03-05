@extends('layouts.admin')
@section('title', 'Page')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Page</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/about') }}">Page</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/page/update')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update Page Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/manage/basic')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> Basic Information</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Games Page Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" class="form-control" name="pagename1" value="{{$data->pagename1}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Games Page Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link1" value="{{$data->link1}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Gallery Page Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pagename2" value="{{$data->pagename2}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Gallery Page Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link2" value="{{$data->link2}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Blog Page Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pagename3" value="{{$data->pagename3}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Blog Page Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link3" value="{{$data->link3}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Contact Page Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pagename4" value="{{$data->pagename4}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Contact Page Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link4" value="{{$data->link4}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Home Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="home_link" value="{{$data->home_link}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Video Title: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="video_title" value="{{$data->video_title}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Video Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="map_title" value="{{$data->map_title}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Map Title: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="video_title" value="{{$data->video_title}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Map Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="map_link" value="{{$data->map_link}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Games Page Banner: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="game_pagebanner" value="{{old('game_pagebanner')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->game_pagebanner != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->game_pagebanner) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Gallery Page Banner: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="gallery_pagebanner" value="{{old('gallery_pagebanner')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->gallery_pagebanner != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->gallery_pagebanner) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Blog Page Banner: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="blog_pagebanner" value="{{old('blog_pagebanner')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->blog_pagebanner != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->blog_pagebanner) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Contact Page Banner: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="contact_pagebanner" value="{{old('contact_pagebanner')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($data->contact_pagebanner != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$data->contact_pagebanner) }}" alt="favicon">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="favicon">
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
    <script src="{{asset('contents/admin')}}/assets/js/dropify.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/dropify.js"></script>
@endpush