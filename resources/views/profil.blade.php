@extends('layout.app')
@section('title')
<title>Invest Islands || Profil</title>
@endsection
<div id="wrapper">
    @include('layout.sidebar')
    <div id="page-wrapper" class="gray-bg">
        @include('layout.header')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Extra Pages</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Profile</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <!-- <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                        </div> -->
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>
                                        <h2>Invest Island</h2>
                                    </div>
                                </div>
                            </div>
                            @foreach($data as $row)
                            <div class="row">
                                <div class="col-lg-3">
                                    <center>
                                        <img src="images/<?= $row->foto; ?>" alt="" style="height: 100px;">
                                    </center>
                                </div>
                                <div class="col-lg-9" id="cluster_info">
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Status:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1">
                                                @if($row->status==0)
                                                <span class="label label-primary">
                                                    Staff
                                                </span>
                                                @else
                                                <span class="label label-primary">
                                                    Staff
                                                </span>
                                                @endif
                                            </dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Name:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1">{{$row->username}}</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>E-mail:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"> {{$row->email}}</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Phone Number:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"><a href="#" class="text-navy">{{$row->no_hp}}</a> </dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Address:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"> {{$row->alamat}} </dd>
                                        </div>
                                    </dl>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row scrollmenu" style="height: 300px;">
                @foreach($semua as $row)
                    @if($row->id!=4)
                    <div class="col-lg-3">
                        <div class="contact-box center-version">

                            <a href="profile.html">
                                <img alt="image" class="rounded-circle" src="images/<?= $row->foto ?>">
                                <h3 class="m-b-xs"><strong>{{$row->username}}</strong></h3>
                                <div class="font-bold">
                                    <dd class="mb-1">
                                        @if($row->status==0)
                                        <span class="label label-primary">
                                            Staff
                                        </span>
                                        @else
                                        <span class="label label-primary">
                                            Staff
                                        </span>
                                        @endif
                                    </dd>
                                </div>
                                <address class="m-t-md">
                                    <strong>{{$row->email}}.</strong>
                                    <br>{{$row->alamat}}<br>
                                    <abbr title="Phone">HP:</abbr> {{$row->no_hp}}
                                </address>

                            </a>
                            <div class="contact-box-footer">
                                <div class="m-t-xs btn-group">
                                    <a href="" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                    <a href="" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                    <a href="" class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>