@extends('layouts.admin')
@section('title', 'Clients')

@push('css')
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/dropify.min.css">
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Clients</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/clients') }}">Clients</a></li>
        <li class="active">Create</li>
    </ol>
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" method="post" action="{{url('admin/clients')}}" enctype="multipart/form-data">
          @csrf
          <div class="card">
              <div class="card-header card-header-part">
                  <div class="row">
                      <div class="col-md-8">
                          <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Information of Client</h3>
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="{{url('admin/clients')}}" class="btn btn-md btn-secondary waves-effect card-top-button"><i class="fa fa-th"></i> All Clients</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body card-form">
                <div class="form-group row custom-form-group {{$errors->has('client_name') ? ' has-error':''}}">
                    <label class="col-sm-3 control-label">Client Name: <span class="req_star">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="client_name" value="{{old('client_name')}}">
                        @if($errors->has('client_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$errors->first('client_name')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row custom-form-group custom-form-group-photo">
                    <label class="col-sm-3 col-form-label">Client Photo: </label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control dropify" data-default-file="{{ asset('contents/admin/assets/images/avatar.png') }}" name="client_photo" value="{{old('client_photo')}}">
                    </div>
                </div>
              </div>
              <div class="card-footer card-footer-button text-center">
                  <button type="submit" class="btn btn-submit btn-secondary waves-effect">Create</a>
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