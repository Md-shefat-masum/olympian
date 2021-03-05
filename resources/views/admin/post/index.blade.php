@extends('layouts.admin')
@section('title', 'Posts')

@push('css')

@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Posts</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin/posts') }}">Posts</a></li>
        <li class="active">Index</li>
    </ol>
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-part">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title card-top-title"><i class="fa fa-gg-circle"></i> All Posts</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ url('admin/posts/create') }}" class="btn btn-md btn-secondary card-top-button"><i class="fa fa-plus-circle"></i> Add Post</a>
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
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Body(1)</th>
                                        <th>Body(2)</th>
                                        <th>Created At</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $key=>$post)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{Str::limit($post->post_title, 20)}}</td>
                                        <td>{{optional($post->user)->name}}</td>
                                        <td>{{Str::words($post->post_body1, 3, ' >>>')}}</td>
                                        <td>{{Str::words($post->post_body2, 3, ' >>>')}}</td>
                                        <td>{{$post->created_at->format('d M Y')}}</td>
                                        <td>
                                            @if($post->post_image != '')
                                                <img width="50" src="{{asset('uploads/'.$post->post_image)}}" alt="post_image">
                                            @else
                                                <img width="50" src="{{ asset('contents/admin/assets/images/avatar.png') }}" alt="post" class="post_image" />
                                            @endif
                                        </td>
                                        <td>
                                            <a class="edit-icon" href="{{ route('admin.posts.edit', $post->id) }}" title="edit"><i class="fa fa-edit fa-lg"></i></a>
                                    

                                            <span style="margin-left: 3px; margin-right: 3px"></span>
                                            <a class="delete-icon" href="#" id="unPublish" title="delete" data-id="{{$post->id}}" data-toggle="modal" data-target="#unpublishDelModal" style="color: #ff3030;" ><i class="fa fa-trash fa-lg"></i></a>
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
        <form method="post" action="{{route("admin.posts.unpublish")}}">
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





















