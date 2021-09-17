@extends('layout.app')
@section('title')
    <title>Invest Islands || Detil Projects</title>
@endsection
<div id="wrapper">
    @include('layout.sidebar')
    <div id="page-wrapper" class="gray-bg">
        @include('layout.header')
        @include('layout.detil')
    </div>
</div>
