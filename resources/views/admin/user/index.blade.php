@extends('layouts.admin')
@section('title', 'Users')

@push('css')

@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Users</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/users') }}">Users</a></li>
        <li class="active">Index</li>
    </ol>
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-part">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> All Users Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/users/create') }}" class="btn btn-md btn-secondary card-top-button"><i class="fa fa-plus-circle"></i> Add User</a>
                    </div>
                </div>
            </div>
         
            <div class="row">
                <div class="col-12"> 
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped custom-table mb-0" id="dataTable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key=>$user)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->designation}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->role_name}}</td>
                                        @if($user->status == 1)
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge badge-info">Inactive</span>
                                        </td>
                                        @endif 
                                        {{-- <td>{{$user->created_at->format('d-M, Y')}}</td> --}}
                                        <td>
                                            @if($user->photo != '')
                                                <img width="50" src="{{asset('uploads/'.$user->photo)}}" alt="photo">
                                            @else
                                                <img width="50" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="user" class="photo" />
                                            @endif
                                        </td>
                                        <td>
                                            <a class="edit-icon" href="{{ route('admin.users.edit', $user->id) }}" title="edit"><i class="fa fa-edit fa-lg"></i></a>
                                    

                                            <span style="margin-left: 3px; margin-right: 3px"></span>
                                            <a class="delete-icon" href="#" id="unPublish" title="delete" data-id="{{$user->id}}" data-toggle="modal" data-target="#unpublishDelModal" style="color: #ff3030;" ><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="card-footer card-footer-part">
                <div class="row">
                    <div class="col-5">
                        
                    </div>
                    <div class="col-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}


<!-- softDelete Modal Start -->
<div class="modal fade" id="unpublishDelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="{{route("admin.users.unpublish")}}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete !!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="modal_id" />
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

@push('js')


@endpush





















