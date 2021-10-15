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
                        <h5>Users List</h5>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#add_project"> Tambah</button>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive scrollmenu">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Project's Name</th>
                                        <th>Start Date</th>
                                        <th>Status</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $row)
                                    <tr class="gradeA font_bantu">
                                        <td>
                                            <center>{{$row->pro_nama}}</center>
                                        </td>
                                        <td>
                                            <center>
                                                {{$row->tanggal_mulai}}
                                            </center>
                                        </td>
                                        <td class="center">
                                            <center> {{$row->pro_status}}</center>
                                        </td>
                                        <td class="center">
                                            <center> {{$row->pro_update}}</center>
                                        </td>
                                        <td class="project-actions">
                                            <center>
                                                <div style="display: inline-block;">
                                                    <a href="/hapususer/<?= $row->id ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                    <a class="btn btn-white btn-sm " data-toggle="modal" data-idu="<?= $row->id ?>" data-nama="<?= $row->username ?>" data-alamat="<?= $row->alamat ?>" data-email="<?= $row->email ?>" data-status="<?= $row->status ?>" data-target="#edit_user" id="detil">
                                                        <i class="fa fa-edit "></i>
                                                    </a>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Project's Name</th>
                                        <th>Start Date</th>
                                        <th>Status</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ini pop up  -->
    <div class="modal fade" id="add_project" role="dialog" arialabelledby="modalLabel" area-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add Project</h2>
                </div>
                <div class="container">
                    <form action="/inputProject" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Project</label>
                            <input type="text" class="form-control" name="proname" id="proname" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Start Date</label>
                            <input type="date" class="form-control" name="startdate" id="startdate">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Status</label>
                            <select class="form-select form-select-sm " id="prostat" name="prostat" style="margin-left: 100px; border: 3px; border-left:30px;  width:150px">
                                <option selected>Pilih</option>
                                <option value="0">Prepared</option>
                                <option value="1">On Going</option>
                                <option value="3">Finished</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>