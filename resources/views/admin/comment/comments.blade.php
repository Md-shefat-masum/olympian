@extends('layouts.admin')
@section('title', 'Comments')

@push('css')
    <style>
        table thead th:nth-child(1) { width: 7%;  }
        table thead th:nth-child(2) { width: 8%;  }
        table thead th:nth-child(3) { width: 8%;  }
        table thead th:nth-child(4) { width: 8%;  }
        table thead th:nth-child(5) { width: 52%;  }
        table thead th:nth-child(6) { width: 10%;  }
    </style>
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Comments</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/comments') }}">Comments</a></li>
        <li class="active">Index</li>
    </ol>
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-part">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> Comments From Posts</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('/admin') }}" class="btn btn-md btn-secondary card-top-button"><i class="fa fa-plus-circle"></i> Dashboard</a>
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
                                        <th>Post</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comments as $key=>$comment)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>
                                            <a href="{{url('admin/posts/'.$comment->post->id.'/edit')}}">
                                            {{$comment->post->post_title }}</a>
                                        </td>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>{{$comment->created_at->diffForHumans()}}</td>
                                        <td>
                                            <span style="margin-left: 3px; margin-right: 3px"></span>
                                            <a class="delete-icon" href="#" id="unPublish" title="delete" data-id="{{$comment->id}}" data-toggle="modal" data-target="#unpublishDelModal"><i class="fa fa-trash fa-lg"></i></a>
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
        <form method="post" action="{{route("admin.comments.unpublish")}}">
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





















