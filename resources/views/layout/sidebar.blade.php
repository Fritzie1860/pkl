@extends('layout.app')
@section('title')
<title>Invest Islands || sb</title>
@endsection

<body>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" style="width: 125px;" src="images/{{Auth::user()->foto}}" />
                        <a href="/profil">
                            <span class="block m-t-xs font-bold">{{Auth::user()->username}}</span>
                            @if(Auth::user()->status==0)
                            <span class="text-muted text-xs block">Staff</span>
                            @else
                            <span class="text-muted text-xs block">Trainee</span>
                            @endif
                        </a>
                        
                    </div>
                </li>
                <li class="<?php

                            use Illuminate\Support\Facades\Auth;

                            if (request()->is('dashboard')) {
                                echo "active";
                            }
                            ?>">
                    <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li class="<?php
                            if (request()->is('projects')) {
                                echo "active";
                            }
                            ?>">
                    <a href="/projects"><i class="fa fa-table"></i> <span class="nav-label">Projects</span></a>
                </li>
                @if(Auth::user()->status==0)
                <li class="<?php
                            if (request()->is('users')) {
                                echo "active";
                            }
                            ?>">
                    <a href="/users"><i class="fa fa-table"></i> <span class="nav-label">Users</span></a>
                </li>
                @endif

            </ul>
        </div>
    </nav>
</body>