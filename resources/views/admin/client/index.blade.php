@extends('layouts.admin')
@section('title', 'Clients')

@push('css')

@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Clients</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/clients') }}">Clients</a></li>
        <li class="active">Index</li>
    </ol>
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-part">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> All Clients Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/clients/create') }}" class="btn btn-md btn-secondary card-top-button"><i class="fa fa-plus-circle"></i> Add Client</a>
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
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $key=>$client)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{$client->client_name}}</td>
                                        <td>
                                            @if($client->client_photo != '')
                                                <img width="50" src="{{asset('uploads/'.$client->client_photo)}}" alt="client_photo">
                                            @else
                                                <img width="50" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="client" class="photo" />
                                            @endif
                                        </td>
                                        <td>
                                            <a class="edit-icon" href="{{ route('admin.clients.edit', $client->id) }}" title="edit"><i class="fa fa-edit fa-lg"></i></a>
                                    

                                            <span style="margin-left: 3px; margin-right: 3px"></span>
                                            <a class="delete-icon" href="#" id="unPublish" title="delete" data-id="{{$client->id}}" data-toggle="modal" data-target="#unpublishDelModal" style="color: #ff3030;" ><i class="fa fa-trash fa-lg"></i></a>
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
        <form method="post" action="{{route("admin.clients.unpublish")}}">
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





















