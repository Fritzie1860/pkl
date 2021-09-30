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
                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>
                                        <h2>Contract with Zender Company</h2>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <center>
                                        <img src="img/a2.jpg" alt="">
                                    </center>
                                </div>
                                <div class="col-lg-9" id="cluster_info">
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Status:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"><span class="label label-primary">Active</span></dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Created by:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1">Alex Smith</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Messages:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"> 162</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Client:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"><a href="#" class="text-navy"> Zender Company</a> </dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Version:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1"> v1.4.2 </dd>
                                        </div>
                                    </dl>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row scrollmenu" style="height: 300px;">
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a2.jpg">


                            <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                            <div class="font-bold">Graphics designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a1.jpg">


                            <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                            <div class="font-bold">CEO</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a3.jpg">


                            <h3 class="m-b-xs"><strong>Monica Smith</strong></h3>

                            <div class="font-bold">Marketing manager</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a4.jpg">


                            <h3 class="m-b-xs"><strong>Michael Zimber</strong></h3>

                            <div class="font-bold">Sales manager</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a5.jpg">


                            <h3 class="m-b-xs"><strong>Sandra Smith</strong></h3>

                            <div class="font-bold">Graphics designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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

                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a6.jpg">


                            <h3 class="m-b-xs"><strong>Janet Carton</strong></h3>

                            <div class="font-bold">CFO</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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

                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a1.jpg">


                            <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                            <div class="font-bold">CEO</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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

                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a7.jpg">


                            <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                            <div class="font-bold">Graphics designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a2.jpg">


                            <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                            <div class="font-bold">Graphics designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a1.jpg">


                            <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                            <div class="font-bold">CEO</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a3.jpg">


                            <h3 class="m-b-xs"><strong>Monica Smith</strong></h3>

                            <div class="font-bold">Marketing manager</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="profile.html">

                            <img alt="image" class="rounded-circle" src="img/a4.jpg">


                            <h3 class="m-b-xs"><strong>Michael Zimber</strong></h3>

                            <div class="font-bold">Sales manager</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
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


            </div>
        </div>
    </div>
</div>