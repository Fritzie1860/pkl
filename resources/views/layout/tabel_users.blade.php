<body>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Tables</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Tables</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Data Tables</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#add_user"> Tambah</button>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover dataTables-user">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>e-mail</th>
                                        <th>Status </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                    <tr>
                                        <!-- <td>{{$row->foto}}</td> -->
                                        <td><img src="img/a2.jpg" alt=""></td>
                                        <td>{{$row->username}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->alamat}}</td>
                                        <td class="project-actions">
                                            <center>
                                                <a href="/hapususer/<?= $row->id?>" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Hapus </a>
                                                <button type="button" class="btn btn-primary 
            btn-sm" data-toggle="modal" data-nama="<?= $row->username ?>" data-alamat="<?= $row->alamat ?>" data-email="<?= $row->email ?>" data-status="<?= $row->status ?>" data-target="#edit_user" id="detil">
                                                    Submit
                                                </button>

                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- ini pop up  -->
<div class="modal fade" id="add_user" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form action="/inputuser" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="+62 XXX XXX XXX">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl. Nama Jalan">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-select form-select-sm " name ="status" style="margin-left: 100px; border: 3px; border-left:30px;  width:150px" id="isi_pilih">
                            <option selected>Pilih</option>
                            <option value="0">Staff</option>
                            <option value="1">Magang</option>
                            <!-- <option value="3">Three</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="pw" class="form-control" id="password" placeholder="Your Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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

                <form action="/edituser" method="post">


                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" class="form-control" name = "username" id="isi_nama" placeholder="Nama">
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
                        <label for="exampleInputPassword1">Status</label>
                        <select class="form-select form-select-lg" name="status" style="margin-left: 100px; width:150px" id="isi_pilih">
                            <option selected>Pilih</option>
                            <option value="0">Staff</option>
                            <option value="1">Magang</option>
                            <!-- <option value="3">Three</option> -->
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', "#detil", function() {
            var name = $(this).data('nama');
            var email = $(this).data('email');
            var alamat = $(this).data('alamat');

            $("#isi_nama").val(name);
            $("#isi_email").val(email);
            $("#isi_alamat").val(alamat);
            var status = $(this).data('status');
            var pilih = document.getElementById('isi_pilih');
            console.log(status);
            pilih.value = status;
        })
    });
</script>