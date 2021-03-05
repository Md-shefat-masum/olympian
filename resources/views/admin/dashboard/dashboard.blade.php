@extends('layouts.admin')
@section('title', 'Dashboard')

@push('css')
    <style>
        .card .card-header.dashboad-card-header {
            padding: 10px 20px;
            border: none;
            background: #2b4049;
        }
    </style>
@endpush
@section('content')
@component('admin.includes.breadcrumb')
    <h4 class="pull-left page-title">Dasboard</h4>
    <ol class="breadcrumb pull-right">
        <li><a href="{{ url('admin') }}">Dashboard</a></li>
        <li class="active">Home</li>
    </ol>
@endcomponent

<div class="row">
    <div class="col-sm-3 col-md-3 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-book"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark"> {{$usersCount}} </span>
                Total Users
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-wallet-membership"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">{{$gamesCount}}</span>
                Total Games
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-pages"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">{{$categoriesCount}}</span>
                Total Categories
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-3">
        <div class="mini-stat clearfix bx-shadow bg-white">
            <span class="mini-stat-icon bg-primary"><i class="md md-view-stream"></i></span>
            <div class="mini-stat-info text-right text-dark mini_stat_info">
                <span class="counter text-dark">{{$postsCount}}</span>
                Total Posts
            </div>
        </div>
    </div>

</div>    

@endsection

@push('js')

@endpush