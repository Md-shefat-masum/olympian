@extends('layouts.admin')
@section('title', 'Users')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
    {{-- <style>
        .disable-manual{
            cursor: not-allowed;
        }
    </style> --}}
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Users</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/users') }}">Users</a></li>
        <li class="active">Update</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/users/'.$user->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="card">
                <div class="card-header card-header-part">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Update User Information</h3>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{url('admin/users')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> All Users</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card-form">
                    <div class="form-group row custom-form-group {{$errors->has('name') ? ' has-error':''}}">
                        <label class="col-sm-3 control-label">Name: <span class="req_star">*</span></label>
                        <div class="col-sm-7">                    
                            {{-- <input type="hidden" name="id" value="{{$user->id}}"> --}}
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-7">
                            <input type="checkbox" name="status" class="control-input" id="customCheck" @if($user->status != 0) checked @endif>
                            <label class="control-label" for="customCheck">Enable Status <small>(if unchecked, he or she can't login)</small></label>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group {{$errors->has('phone') ? ' has-error':''}}">
                        <label class="col-sm-3 control-label">Phone: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                            @if($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group {{$errors->has('email') ? ' has-error':''}}">
                        <label class="col-sm-3 control-label">Email: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Address: <span class="req_star">*</span></label>
                        <div class="col-sm-7">
                            <textarea type="text" class="form-control" name="address">{{$user->address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Note: </label>
                        <div class="col-sm-7">
                            <textarea type="text" class="form-control" name="note">{{$user->note}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">User Role: <span class="req_star">*</span></label>
                        <div class="col-sm-4">
                            <select class="select2 form-control" name="role">
                                {{-- <option selected>Select User Role</option> --}}
                                <option></option>
                                @foreach($allRole as $urole)
                                    <option value="{{$urole->id}}" @if($user->role_id == $urole->id) selected @endif>{{$urole->role_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Twitter Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="twitter" value="{{$user->twitter}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Facebook Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="fb" value="{{$user->fb}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">LinkedIn Link: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="linkedin" value="{{$user->linkedin}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group">
                        <label class="col-sm-3 control-label">Designation: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="designation" value="{{$user->designation}}">
                        </div>
                    </div>
                    <div class="form-group row custom-form-group custom-form-group-photo">
                        <label class="col-sm-3 col-form-label">Photo: </label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="photo" value="{{old('photo')}}">
                        </div>
                        <div class="col-sm-6">
                            @if($user->photo != '')
                                <img class="table-img-100" src="{{ asset('uploads/'.$user->photo) }}" alt="Photo">
                            @else
                                <img class="table-img-100" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="Photo">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer card-footer-button text-center">
                    <button type="submit" class="btn btn-submit btn-secondary waves-effect">UPDATE</button>
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


{{-- {{ $errors->has('photo') ? ' has-error' : '' }} --}}
{{-- @if($errors->has('photo'))
    <span class="invalid-feedback" role="alert">
        <strong>{{$errors->first('photo')}}</strong>
    </span>
@endif --}}