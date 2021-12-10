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
                                <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#add_project"> Add Project</button>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div>
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
                                            @if($row->pro_status==0)
                                            <center>Prepared</center>
                                            @elseif($row->pro_status==1)
                                            <center>On Going</center>
                                            @elseif($row->pro_status==2)
                                            <center>Finished</center>
                                            @endif

                                        </td>
                                        <td class="center">
                                            <center> {{$row->pro_update}}</center>
                                        </td>
                                        <td class="project-actions">
                                            <center>
                                                <div style="display: inline-block;">
                                                    <a href="/hapusProject/<?= $row->id_projects ?>" class="btn btn-danger btn-sm float-left mr-2"> <i class="fa fa-trash"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-idp=<?= $row->id_projects ?> data-pronama="<?= $row->pro_nama ?>" data-stadate="<?= $row->tanggal_mulai ?>" data-prostatus=<?= $row->pro_status ?> data-target="#edit_user" id="detil">
                                                        <i class="fa fa-edit "></i>
                                                    </a>
                                                    <form action="/target" method="post" style="float:right">
                                                        <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input required autocomplete="off" type="hidden" name="cari" value="{{ $row->id_projects }}" />
                                                        <button type="submit" class="btn btn-sm"><i class="fa fa-eye"></i> </button>
                                                    </form>
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
                            <input required autocomplete="off" type="text" class="form-control" name="proname" id="proname" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Start Date</label>
                            <input required autocomplete="off" type="date" class="form-control" name="startdate" id="startdate">
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
    <!-- buat edit  -->
    <div class="modal fade" id="edit_user" role="dialog" arialabelledby="modalLabel" area-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="/editProject" method="post">

                        <input required autocomplete="off" type="text" name="idp" id="isi_idp" style="display: none;">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Projct Name</label>
                            <input required autocomplete="off" type="text" class="form-control" name="proname" id="isi_proname" placeholder="Project Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Date</label>
                            <input required autocomplete="off" type="date" name="stardate" class="form-control" id="isi_startdate">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select class="form-select form-select-lg" name="prostatus" id="isiin" style="margin-left: 100px; width:150px">
                                <!-- <option selected>Pilih</option> -->
                                <option value="0">Prepare</option>
                                <option value="1">On Going</option>
                                <option value="2">Finised</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // $(document).ready(function() {
        $(document).on('click', "#detil", function() {
            var name = $(this).data('pronama');
            var start = $(this).data('stadate');
            var stp = $(this).data('prostatus');
            var idp = $(this).data('idp');

            $("#isi_proname").val(name);
            $("#isi_startdate").val(start);
            // $("#isi_isiin").val(alamat);
            $("#isi_idp").val(idp);
            var pilih = document.getElementById('isiin');
            console.log(stp);
            pilih.value = stp;
            // $('#isi_pilih').val(status);
            // document.querySelector('#isiin').value=status;
        })
        // });
    </script>
</body>