@extends('layouts.admin')
@section('title', 'Games')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Games</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/games') }}">Games</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/games')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Add Game</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/games')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> All Games</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group @error('game_title') is-invalid @enderror">
                        <label class="col-sm-3 control-label">Game Title: <span class="req_star">*</span></label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_title" value="{{old('game_title')}}">
                            @error('game_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Subtitle: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_subtitle" value="{{old('game_subtitle')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Company/Platform: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_company" value="{{old('game_company')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Description 1: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_description1">{{old('game_description1')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Description 2: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_description2">{{old('game_description2')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Description 3: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_description3">{{old('game_description3')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Description 4: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_description4">{{old('game_description4')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Game Photo (Small): </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="game_photo1" value="{{old('game_photo1')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Game Photo (Large for Detail Page): </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="game_photo2" value="{{old('game_photo2')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Button: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="game_button" value="{{old('game_button')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Button URL: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="game_url" value="{{old('game_url')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Launch Date: </label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="game_launchdate" value="{{old('game_launchdate')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Note 1: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_note1">{{old('game_note1')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Note 2: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_note2">{{old('game_note2')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Note 3: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_note3">{{old('game_note3')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Note 4: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_note4">{{old('game_note4')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Title 1: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_feature_title1" value="{{old('game_feature_title1')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Subtitle 1: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_feature_subtitle1">{{old('game_feature_subtitle1')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Title 2: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_feature_title2" value="{{old('game_feature_title2')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Subtitle 2: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_feature_subtitle2">{{old('game_feature_subtitle2')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Title 3: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_feature_title3" value="{{old('game_feature_title3')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Subtitle 3: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_feature_subtitle3">{{old('game_feature_subtitle3')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Title 4: </label>
                        <div class="col-sm-7">                            
                            <input type="text" class="form-control" name="game_feature_title4" value="{{old('game_feature_title4')}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Game Feature Subtitle 4: </label>
                        <div class="col-sm-7">
                          <textarea type="text" class="form-control" name="game_feature_subtitle4">{{old('game_feature_subtitle4')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-button text-center">
                    <button type="submit" class="btn btn-submit btn-secondary waves-effect">Create</button>
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