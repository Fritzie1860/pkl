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
                        @foreach($data as $row)
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <button type="submit" class="font_bantu fa fa-edit btn btn-primary float-right" data-toggle="modal" data-idu=<?= $row->id ?> data-nama="<?= $row->username ?>" data-alamat="<?= $row->alamat ?>" data-email="<?= $row->email ?>" data-hp="<?= $row->no_hp ?>" data-status=<?= $row->status ?> data-target=" #edit_user" id="lempar"> Edit</button>
                                        <h2>Invest Island</h2>
                                    </div>
                                </div>
                            </div>

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
                                            <dd class="mb-1" id="username">{{$row->username}}</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>E-mail:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1" id="email"> {{$row->email}}</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Phone Number:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1" id="no_hp"><a href="#" class="text-navy">{{$row->no_hp}}</a> </dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-3 text-sm-left">
                                            <dt>Address:</dt>
                                        </div>
                                        <div class="col-sm-4 text-sm-left">
                                            <dd class="mb-1" id="alamat"> {{$row->alamat}} </dd>
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
                @if($row->id!=$idu)
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

<!-- buat edit  -->
<div class="modal fade" id="edit_user" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Confirmation
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>

            <div class="modal-body">

                <form action="/edituser" method="post" enctype="multipart/form-data">

                    <input type="text" name="idu" id="rahasia" style="display: none;">
                    <input type="text" name="status" id="isis" style="display: none;">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="file" class="form-control" name="foto" id="kosong">
                        <br>
                        <small>Centang jika ingin mengubah</small>
                        <input type="checkbox" class="float-right" style="display: inline;" id="ganti" name="ganti">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" class="form-control" name="username" id="isi_nama" placeholder="Nama">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">E-mail</label>
                        <input type="text" name="email" class="form-control" id="isi_email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="isi_alamat" placeholder="Alamat">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="isi_hp" placeholder="+62 XXX XXX XXX">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#lempar", function() {
        var name = $(this).data('nama');
        var email = $(this).data('email');
        var alamat = $(this).data('alamat');
        var hp = $(this).data('hp');
        var status = $(this).data('status');
        var idu = $(this).data('idu');

        console.log(name);
        console.log(email);
        console.log(alamat);
        console.log(idu);
        $("#isi_nama").val(name);
        $("#isi_hp").val(hp);
        $("#isi_email").val(email);
        $("#isi_alamat").val(alamat);
        $("#rahasia").val(idu);
        $("#isis").val(status);
        // $('#isi_pilih').val(status);
        // document.querySelector('#isiin').value=status;
    })
    // });
</script>