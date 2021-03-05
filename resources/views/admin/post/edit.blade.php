@extends('layouts.admin')
@section('title', 'Posts')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Posts</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/posts') }}">Posts</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{route('admin.posts.update', $post->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card">
              <div class="card-header card-header-part">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update The Post</h3>
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('admin/posts')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> All Posts</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body card-form">
                <div class="form-group row custom-form-group {{$errors->has('post_title') ? ' has-error':''}}">
                    <label class="col-sm-3 control-label">Post Title: <span class="req_star">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="post_title" value="{{$post->post_title}}">
                        @if($errors->has('post_title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('post_title')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row custom-form-group">
                    <label class="col-sm-3 control-label">Category: </label>
                    <div class="col-sm-4">
                        <select class="select2-multiple form-control" name="categories[]" multiple="multiple">
                            @foreach($categories as $key=>$value)
                                <option value="{{ $value->id }}"
                                    @foreach($post->categories as $category)
                                        {{ $category->id == $value->id ? 'selected' : '' }}
                                    @endforeach
                                >{{ $value->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row custom-form-group">
                    <label class="col-sm-3 control-label">Post Body 1: </label>
                    <div class="col-sm-7">
                      <textarea type="text" class="form-control" name="post_body1">{{$post->post_body1}}</textarea>
                    </div>
                </div>
                <div class="form-group row custom-form-group">
                    <label class="col-sm-3 control-label">Post Body 2: </label>
                    <div class="col-sm-7">
                      <textarea type="text" class="form-control" name="post_body2">{{$post->post_body2}}</textarea>
                    </div>
                </div>
                <div class="form-group row custom-form-group">
                    <label class="col-sm-3 control-label">Post Body 3: </label>
                    <div class="col-sm-7">
                      <textarea type="text" class="form-control" name="post_body3">{{$post->post_body3}}</textarea>
                    </div>
                </div>
                <div class="form-group row custom-form-group">
                    <label class="col-sm-3 control-label">Post Body 4: </label>
                    <div class="col-sm-7">
                      <textarea type="text" class="form-control" name="post_body4">{{$post->post_body4}}</textarea>
                    </div>
                </div>
                <div class="form-group row custom-form-group custom-form-group-photo">
                    <label class="col-sm-3 col-form-label">Post Image: </label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="post_image" value="{{old('post_image')}}">
                    </div>
                    <div class="col-sm-6">
                        @if($post->post_image != '')
                            <img class="table-img-100" src="{{ asset('uploads/'.$post->post_image) }}" alt="Photo">
                        @else
                            <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="Photo">
                        @endif
                    </div>
                </div>
                <div class="form-group row custom-form-group custom-form-group-photo">
                    <label class="col-sm-3 col-form-label">Post Thumb: </label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="post_thumb" value="{{old('post_thumb')}}">
                    </div>
                    <div class="col-sm-6">
                        @if($post->post_thumb != '')
                            <img class="table-img-100" src="{{ asset('uploads/'.$post->post_thumb) }}" alt="Photo">
                        @else
                            <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="Photo">
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
    <script src="{{asset('contents/admin')}}/assets/js/select2.init.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/dropify.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/dropify.js"></script>


@endpush



