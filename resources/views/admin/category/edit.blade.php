@extends('layouts.admin')
@section('title', 'Categories')

@push('css')

@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Categories</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/categories') }}">Categories</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{route('admin.categories.update', $category->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Information of Category</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/categories')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> All Categories</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group {{$errors->has('cate_name') ? ' has-error':''}}">
                        <label class="col-sm-3 control-label">Title: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="cate_name" value="{{$category->cate_name}}">
                            @if($errors->has('cate_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('cate_name')}}</strong>
                                </span>
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

@endpush