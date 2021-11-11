<div class="wrapper wrapper-content animated fadeInRight">
    <div class="font_bantu">
        <!-- Detail Project -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>
                                    <h2>Villa Warna warni</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Status:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"><span class="label label-primary">Active</span></dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Created by:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">Alex Smith</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Messages:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> 162</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Client:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"><a href="#" class="text-navy"> Zender Company</a> </dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Version:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> v1.4.2 </dd>
                                    </div>
                                </dl>

                            </div>
                            <div class="col-lg-6" id="cluster_info">

                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Last Updated:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">16.08.2014 12:15:57</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Created:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> 10.07.2014 23:36:57</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Participants:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="project-people mb-1">
                                            <a href="><img alt=" image" class="rounded-circle" src="img/a3.jpg"></a>
                                            <a href="><img alt=" image" class="rounded-circle" src="img/a1.jpg"></a>
                                            <a href="><img alt=" image" class="rounded-circle" src="img/a2.jpg"></a>
                                            <a href="><img alt=" image" class="rounded-circle" src="img/a4.jpg"></a>
                                            <a href="><img alt=" image" class="rounded-circle" src="img/a5.jpg"></a>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tos 1 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 1<small> Foot Plat Foundation</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-32" data-toggle="tab">Absolute Reference</a></li>
                                                <li><a class="nav-link" href="#tab-1" data-toggle="tab">Foot Plat</a></li>
                                                <li><a class="nav-link" href="#tab-2" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-3" data-toggle="tab">Batu Kali</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-32">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Overleap & Hook</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos1OH"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Dia</th>
                                                                                    <th>Panjang</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos11 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->dia}}</td>
                                                                                    <td>{{$row->p}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos11_del/<?= $row->id_tos11 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos11 ?>" data-dia="<?= $row->dia ?>" data-p="<?= $row->p ?>" data-target="#edit_tos11" id="tos11">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
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
                                            </div>
                                            <div class="tab-pane" id="tab-1">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Foot Plat</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos1FootPlat"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Type</th>
                                                                                    <th colspan="3" align="center"> Dimensi Foot Plat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Level MTA (m')</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Jumlah </th>
                                                                                    <th colspan="7" align="center">Tulangan Atas Vertikal</th>
                                                                                    <th colspan="7" align="center">Tulangan Bawah Vertikal</th>
                                                                                    <th colspan="7" align="center">Tulangan Atas Hoizontal</th>
                                                                                    <th colspan="7" align="center">Tulangan Bawah Horizontal</th>
                                                                                    <th colspan="4" align="center"> Tulangan Pinggang</th>
                                                                                    <th colspan="6" align="center">Volume</th>
                                                                                    <th rowspan="3" align="center" style="vertical-align:middle;">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Lebar (m')</th>
                                                                                    <th style="vertical-align:middle;">Panjang (m')</th>
                                                                                    <th style="vertical-align:middle;">Tinggi (m')</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Besi</th>
                                                                                    <th style="vertical-align:middle;">Beton</th>
                                                                                    <th style="vertical-align:middle;">Bekisting Batako</th>
                                                                                    <th style="vertical-align:middle;">Galian</th>
                                                                                    <th style="vertical-align:middle;">LC</th>
                                                                                    <th style="vertical-align:middle;">Pasir</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos12 as $row)

                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->type}}</td>
                                                                                    <td>{{$row->dfp_l}}</td>
                                                                                    <td>{{$row->dfp_p}}</td>
                                                                                    <td>{{$row->dfp_t}}</td>
                                                                                    <td>{{$row->level_mta}}</td>
                                                                                    <td>{{$row->jumlah}}</td>
                                                                                    <td>{{$row->tav_dia}}</td>
                                                                                    <td>{{$row->tav_jarak}}</td>
                                                                                    <td>{{$row->tav_p}}</td>
                                                                                    <td>{{$row->tav_add}}</td>
                                                                                    <td>{{$row->tav_jum}}</td>
                                                                                    <td>{{$row->tav_bjenis}}</td>
                                                                                    <td>{{$row->tav_total}}</td>
                                                                                    <td>{{$row->tbv_dia}}</td>
                                                                                    <td>{{$row->tbv_jarak}}</td>
                                                                                    <td>{{$row->tbv_p}}</td>
                                                                                    <td>{{$row->tbv_add}}</td>
                                                                                    <td>{{$row->tbv_jum}}</td>
                                                                                    <td>{{$row->tbv_bjenis}}</td>
                                                                                    <td>{{$row->tbv_total}}</td>
                                                                                    <td>{{$row->tah_dia}}</td>
                                                                                    <td>{{$row->tah_jarak}}</td>
                                                                                    <td>{{$row->tah_p}}</td>
                                                                                    <td>{{$row->tah_add}}</td>
                                                                                    <td>{{$row->tah_jum}}</td>
                                                                                    <td>{{$row->tah_bjenis}}</td>
                                                                                    <td>{{$row->tah_total}}</td>
                                                                                    <td>{{$row->tbh_dia}}</td>
                                                                                    <td>{{$row->tbh_jarak}}</td>
                                                                                    <td>{{$row->tbh_p}}</td>
                                                                                    <td>{{$row->tbh_add}}</td>
                                                                                    <td>{{$row->tbh_jum}}</td>
                                                                                    <td>{{$row->tbh_bjenis}}</td>
                                                                                    <td>{{$row->tbh_total}}</td>
                                                                                    <td>{{$row->tp_dia}}</td>
                                                                                    <td>{{$row->tp_jum}}</td>
                                                                                    <td>{{$row->tp_p}}</td>
                                                                                    <td>{{$row->tp_total}}</td>
                                                                                    <td>{{$row->v_besi}}</td>
                                                                                    <td>{{$row->v_beton}}</td>
                                                                                    <td>{{$row->v_bb}}</td>
                                                                                    <td>{{$row->v_galian}}</td>
                                                                                    <td>{{$row->v_lc}}</td>
                                                                                    <td>{{$row->v_pasir}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos12_del/<?= $row->id_tos12 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos12 ?>" data-type="<?= $row->type ?>" data-dfp_l="<?= $row->dfp_l ?>" data-dfp_p="<?= $row->dfp_p ?>" data-dfp_t="<?= $row->dfp_t ?>" data-level_mta="<?= $row->level_mta ?>" data-jumlah="<?= $row->jumlah ?>" data-tav_dia="<?= $row->tav_dia ?>" data-tav_jarak="<?= $row->tav_jarak ?>" data-tav_p="<?= $row->tav_p ?>" data-tav_add="<?= $row->tav_add ?>" data-tav_jum="<?= $row->tav_jum ?>" data-tav_bjenis="<?= $row->tav_bjenis ?>" data-tav_total="<?= $row->tav_total ?>" data-tbv_dia="<?= $row->tbv_dia ?>" data-tbv_jarak="<?= $row->tbv_jarak ?>" data-tbv_p="<?= $row->tbv_p ?>" data-tbv_add="<?= $row->tbv_add ?>" data-tbv_jum="<?= $row->tbv_jum ?>" data-tbv_bjenis="<?= $row->tbv_bjenis ?>" data-tbv_total="<?= $row->tbv_total ?>" data-tah_dia="<?= $row->tah_dia ?>" data-tah_jarak="<?= $row->tah_jarak ?>" data-tah_p="<?= $row->tah_p ?>" data-tah_add="<?= $row->tah_add ?>" data-tah_jum="<?= $row->tah_jum ?>" data-tah_bjenis="<?= $row->tah_bjenis ?>" data-tah_total="<?= $row->tah_total ?>" data-tbh_dia="<?= $row->tbh_dia ?>" data-tbh_jarak="<?= $row->tbh_jarak ?>" data-tbh_p="<?= $row->tbh_p ?>" data-tbh_add="<?= $row->tbh_add ?>" data-tbh_jum="<?= $row->tbh_jum ?>" data-tbh_bjenis="<?= $row->tbh_bjenis ?>" data-tbh_total="<?= $row->tbh_total ?>" data-tp_dia="<?= $row->tp_dia ?>" data-tp_jum="<?= $row->tp_jum ?>" data-tp_p="<?= $row->tp_p ?>" data-tp_total="<?= $row->tp_total ?>" data-v_besi="<?= $row->v_besi ?>" data-v_beton="<?= $row->v_beton ?>" data-v_bb="<?= $row->v_bb ?>" data-v_galian="<?= $row->v_galian ?>" data-v_lc="<?= $row->v_lc ?>" data-v_pasir="<?= $row->v_pasir ?>" data-target="#edit_tos13" id="tos13">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach
                                                                        </table>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-2">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos1PumpRoom"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Type</th>
                                                                                    <th colspan="3" align="center"> Dimensi Foot Plat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Level MTA (m')</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Jumlah </th>
                                                                                    <th colspan="7" align="center">Tulangan Atas Vertikal</th>
                                                                                    <th colspan="7" align="center">Tulangan Bawah Vertikal</th>
                                                                                    <th colspan="7" align="center">Tulangan Atas Hoizontal</th>
                                                                                    <th colspan="7" align="center">Tulangan Bawah Horizontal</th>
                                                                                    <th colspan="4" align="center"> Tulangan Pinggang</th>
                                                                                    <th colspan="6" align="center">Volume</th>
                                                                                    <th rowspan="3" align="center" style="vertical-align:middle;">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Lebar (m')</th>
                                                                                    <th style="vertical-align:middle;">Panjang (m')</th>
                                                                                    <th style="vertical-align:middle;">Tinggi (m')</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Berat Jenis</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                    <th style="vertical-align:middle;">Besi</th>
                                                                                    <th style="vertical-align:middle;">Beton</th>
                                                                                    <th style="vertical-align:middle;">Bekisting Batako</th>
                                                                                    <th style="vertical-align:middle;">Galian</th>
                                                                                    <th style="vertical-align:middle;">LC</th>
                                                                                    <th style="vertical-align:middle;">Pasir</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos13 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->type}}</td>
                                                                                    <td>{{$row->dfp_l}}</td>
                                                                                    <td>{{$row->dfp_p}}</td>
                                                                                    <td>{{$row->dfp_t}}</td>
                                                                                    <td>{{$row->level_mta}}</td>
                                                                                    <td>{{$row->jumlah}}</td>
                                                                                    <td>{{$row->tav_dia}}</td>
                                                                                    <td>{{$row->tav_jarak}}</td>
                                                                                    <td>{{$row->tav_p}}</td>
                                                                                    <td>{{$row->tav_add}}</td>
                                                                                    <td>{{$row->tav_jum}}</td>
                                                                                    <td>{{$row->tav_bjenis}}</td>
                                                                                    <td>{{$row->tav_total}}</td>
                                                                                    <td>{{$row->tbv_dia}}</td>
                                                                                    <td>{{$row->tbv_jarak}}</td>
                                                                                    <td>{{$row->tbv_p}}</td>
                                                                                    <td>{{$row->tbv_add}}</td>
                                                                                    <td>{{$row->tbv_jum}}</td>
                                                                                    <td>{{$row->tbv_bjenis}}</td>
                                                                                    <td>{{$row->tbv_total}}</td>
                                                                                    <td>{{$row->tah_dia}}</td>
                                                                                    <td>{{$row->tah_jarak}}</td>
                                                                                    <td>{{$row->tah_p}}</td>
                                                                                    <td>{{$row->tah_add}}</td>
                                                                                    <td>{{$row->tah_jum}}</td>
                                                                                    <td>{{$row->tah_bjenis}}</td>
                                                                                    <td>{{$row->tah_total}}</td>
                                                                                    <td>{{$row->tbh_dia}}</td>
                                                                                    <td>{{$row->tbh_jarak}}</td>
                                                                                    <td>{{$row->tbh_p}}</td>
                                                                                    <td>{{$row->tbh_add}}</td>
                                                                                    <td>{{$row->tbh_jum}}</td>
                                                                                    <td>{{$row->tbh_tjenis}}</td>
                                                                                    <td>{{$row->tbh_total}}</td>
                                                                                    <td>{{$row->tp_dia}}</td>
                                                                                    <td>{{$row->tp_jum}}</td>
                                                                                    <td>{{$row->tp_p}}</td>
                                                                                    <td>{{$row->tp_total}}</td>
                                                                                    <td>{{$row->v_besi}}</td>
                                                                                    <td>{{$row->v_beton}}</td>
                                                                                    <td>{{$row->v_bb}}</td>
                                                                                    <td>{{$row->v_galian}}</td>
                                                                                    <td>{{$row->v_lc}}</td>
                                                                                    <td>{{$row->v_pasir}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos13_del/<?= $row->id_tos13 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos13 ?>" data-type="<?= $row->type ?>" data-dfp_l="<?= $row->dfp_l ?>" data-dfp_p="<?= $row->dfp_p ?>" data-dfp_t="<?= $row->dfp_t ?>" data-level_mta="<?= $row->level_mta ?>" data-jumlah="<?= $row->jumlah ?>" data-tav_dia="<?= $row->tav_dia ?>" data-tav_jarak="<?= $row->tav_jarak ?>" data-tav_p="<?= $row->tav_p ?>" data-tav_add="<?= $row->tav_add ?>" data-tav_jum="<?= $row->tav_jum ?>" data-tav_bjenis="<?= $row->tav_bjenis ?>" data-tav_total="<?= $row->tav_total ?>" data-tbv_dia="<?= $row->tbv_dia ?>" data-tbv_jarak="<?= $row->tbv_jarak ?>" data-tbv_p="<?= $row->tbv_p ?>" data-tbv_add="<?= $row->tbv_add ?>" data-tbv_jum="<?= $row->tbv_jum ?>" data-tbv_bjenis="<?= $row->tbv_bjenis ?>" data-tbv_total="<?= $row->tbv_total ?>" data-tah_dia="<?= $row->tah_dia ?>" data-tah_jarak="<?= $row->tah_jarak ?>" data-tah_p="<?= $row->tah_p ?>" data-tah_add="<?= $row->tah_add ?>" data-tah_jum="<?= $row->tah_jum ?>" data-tah_bjenis="<?= $row->tah_bjenis ?>" data-tah_total="<?= $row->tah_total ?>" data-tbh_dia="<?= $row->tbh_dia ?>" data-tbh_jarak="<?= $row->tbh_jarak ?>" data-tbh_p="<?= $row->tbh_p ?>" data-tbh_add="<?= $row->tbh_add ?>" data-tbh_jum="<?= $row->tbh_jum ?>" data-tbh_bjenis="<?= $row->tbh_bjenis ?>" data-tbh_total="<?= $row->tbh_total ?>" data-tp_dia="<?= $row->tp_dia ?>" data-tp_jum="<?= $row->tp_jum ?>" data-tp_p="<?= $row->tp_p ?>" data-tp_total="<?= $row->tp_total ?>" data-v_besi="<?= $row->v_besi ?>" data-v_beton="<?= $row->v_beton ?>" data-v_bb="<?= $row->v_bb ?>" data-v_galian="<?= $row->v_galian ?>" data-v_lc="<?= $row->v_lc ?>" data-v_pasir="<?= $row->v_pasir ?>" data-target="#edit_tos13" id="tos13">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
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
                                            </div>
                                            <div class="tab-pane " id="tab-3">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Batu Kali</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos1BatuKali"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bentuk</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">B' </th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Luas Alas</th>
                                                                                    <th style="vertical-align:middle;">Volume Batu Kali</th>
                                                                                    <th style="vertical-align:middle;">Pasir Urug (M2)</th>
                                                                                    <th style="vertical-align:middle;">Galian</th>
                                                                                    <th style="vertical-align:middle;">Timbunan</th>
                                                                                    <th rowspan="3" align="center" style="vertical-align:middle">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m2)</th>
                                                                                    <th style="vertical-align:middle;">(m3)</th>
                                                                                    <th style="vertical-align:middle;">0.05</th>
                                                                                    <th style="vertical-align:middle;">(m3)</th>
                                                                                    <th style="vertical-align:middle;">(m3)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos14 as $row)
                                                                                <tr class="gradeC">
                                                                                    <td>{{$row->nama}}</td>
                                                                                    <td>{{$row->bentuk}}</td>
                                                                                    <td>{{$row->b}}</td>
                                                                                    <td>{{$row->b_}}</td>
                                                                                    <td>{{$row->h}}</td>
                                                                                    <td>{{$row->p}}</td>
                                                                                    <td>{{$row->la}}</td>
                                                                                    <td>{{$row->v_bk}}</td>
                                                                                    <td>{{$row->pasir_u}}</td>
                                                                                    <td>{{$row->galian}}</td>
                                                                                    <td>{{$row->timbunan}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos14_del/<?= $row->id_tos14 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos14 ?>" data-nama="<?= $row->nama ?>" data-bentuk="<?= $row->bentuk ?>" data-b="<?= $row->b ?>" data-b_="<?= $row->b_ ?>" data-h="<?= $row->h ?>" data-p="<?= $row->panjang ?>" data-la="<?= $row->la ?>" data-v_bk="<?= $row->v_bk ?>" data-pu="<?= $row->pasir_u ?>" data-galian="<?= $row->galian ?>" data-timbunan="<?= $row->timbunan ?>" data-p="<?= $row->p ?>" data-target="#edit_tos14" id="tos14">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tos 2 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 2<small> Pedestal</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-37" data-toggle="tab">Data Kolom</a></li>
                                                <li><a class="nav-link" href="#tab-36" data-toggle="tab">Data Foot Plat</a></li>
                                                <li><a class="nav-link" href="#tab-35" data-toggle="tab">Absolute Reference</a></li>
                                                <li><a class="nav-link" href="#tab-4" data-toggle="tab">Column Pedestal Ground Floor</a></li>
                                                <li><a class="nav-link" href="#tab-5" data-toggle="tab">Pedestal</a></li>
                                                <li><a class="nav-link" href="#tab-6" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-37">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Data Kolom</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos2datakolom"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bentuk</th>
                                                                                    <th colspan="2">Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" style="vertical-align:middle;">Tebal Selimut(mm)</th>
                                                                                    <th colspan="2"> Tulangan Pokok</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Tulangan Sengkang</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Horisontal Tumpuan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Horisontal Lapangan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Vertikal Tumpuan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Vertikal Lapangan</th>
                                                                                    <th rowspan="2" align="center" style="vertical-align:middle;">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Lebar (m)</th>
                                                                                    <th style="vertical-align:middle;">Panjang(m)</th>
                                                                                    <th style="vertical-align:middle;">Diameter(mm)</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Dia. Tumpuan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Jarak Tumpuan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia. Lapangan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Jarak Lapangan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos26 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->nama}}</td>
                                                                                    <td>{{$row->bentuk}}</td>
                                                                                    <td>{{$row->dimensi_l}}</td>
                                                                                    <td>{{$row->dimensi_p}}</td>
                                                                                    <td>{{$row->tebal_selimut}}</td>
                                                                                    <td>{{$row->tulpok_dia}}</td>
                                                                                    <td>{{$row->tulpok_jum}}</td>
                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>
                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>
                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>
                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos26_del/<?= $row->id_tos26 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos26 ?>" data-nama="<?= $row->nama ?>" data-bentuk="<?= $row->bentuk ?>" data-dimensi_l="<?= $row->dimensi_l ?>" data-dimensi_p="<?= $row->dimensi_p ?>" data-tebal_selimut="<?= $row->tebal_selimut ?>" data-tulpok_dia="<?= $row->tulpok_dia ?>" data-tulpok_jum="<?= $row->tulpok_jum ?>" data-tulseng_dia_tumpuan="<?= $row->tulseng_dia_tumpuan ?>" data-tulseng_dia_lapangan="<?= $row->tulseng_dia_lapangan ?>" data-tulseng_dia_jaraklap="<?= $row->tulseng_dia_jaraklap ?>" data-tulseng_dia_jaraktump="<?= $row->tulseng_dia_jaraktump ?>" data-thtump_dia="<?= $row->thtump_dia ?>" data-thtump_jarak="<?= $row->thtump_jarak ?>" data-thlap_dia="<?= $row->thlap_dia ?>" data-thlap_jarak="<?= $row->thlap_jarak ?>" data-tvtump_dia="<?= $row->tvtump_dia ?>" data-tvtump_jarak="<?= $row->tvtump_jarak ?>" data-tvlap_dia="<?= $row->tvlap_dia ?>" data-tvlap_jarak="<?= $row->tvlap_jarak ?>" data-target="#edit_tos26" id="tos26">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
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
                                            </div>
                                            <div class="tab-pane" id="tab-36">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Data Foot Plat</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos2datafootplat"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Nama</th>
                                                                                    <th>B</th>
                                                                                    <th>H</th>
                                                                                    <th>T</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos25 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->nama}}</td>
                                                                                    <td>{{$row->b}}</td>
                                                                                    <td>{{$row->h}}</td>
                                                                                    <td>{{$row->t}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos25_del/<?= $row->id_tos25 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos25 ?>" data-nama="<?= $row->nama ?>" data-b="<?= $row->b ?>" data-h="<?= $row->h ?>" data-t="<?= $row->t ?>" data-target="#edit_tos25" id="tos25">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
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
                                            </div>
                                            <div class="tab-pane" id="tab-35">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Lewatan</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos2lewatan"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Dia</th>
                                                                                    <th>Ls</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos24 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->dia}}</td>
                                                                                    <td>{{$row->ls}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos24_del/<?= $row->id_tos24 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos24 ?>" data-dia="<?= $row->dia ?>" data-ls="<?= $row->ls ?>" data-target="#edit_tos24" id="tos24">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
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
                                            </div>
                                            <div class="tab-pane" id="tab-4">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Column Pedestal Ground Floor</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos2groundfloor"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>
                                                                                    <th colspan="4">Footplat</th>
                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Timbunan</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th rowspan="4" align="center" style="vertical-align:middle;">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">T</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Keterangan</th>
                                                                                    <th colspan="2">Tulang Pokok</th>
                                                                                    <th colspan="3">Sengkang</th>
                                                                                    <th colspan="6">Tulang Pokok</th>
                                                                                    <th colspan="5">Sengkang</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Ovlp</th>
                                                                                    <th style="vertical-align:middle;">Stek u/ Kolom</th>
                                                                                    <th style="vertical-align:middle;">Kait ke Footplat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th colspan="2">Tekukan</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(Ttk)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(1.3Ldd)</th>
                                                                                    <th style="vertical-align:middle;">(28ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(Tebal FP +20ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">ld</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m2)</th>
                                                                                    <th style="vertical-align:middle;">(m3)</th>
                                                                                    <th style="vertical-align:middle;">(kg/m3)</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos22 as $row)
                                                                                <?php
                                                                                $tos22_tamp_berat = (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraklap * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraklap * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + 0.25 * 3.14 * $row->tvtump_dia * $row->tvtump_dia * 0.00785 * (((6 * ($row->tvtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * (((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * (((6 * ($row->thtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * (((6 * ($row->thlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom;
                                                                                ?>
                                                                                <tr class="gradeA">
                                                                                    <!-- tipe kolom  -->
                                                                                    <td>{{$row->tipe_kolom}}</td>
                                                                                    <!-- bentuk Kolom  -->
                                                                                    <td>{{$row->bentuk_kolom}}</td>
                                                                                    <!-- Tinggi   -->
                                                                                    <td>{{1.5-$row->t}}</td>
                                                                                    <!-- dimensi kolom lebar  -->
                                                                                    <td>{{$row->dimensi_l}}</td>
                                                                                    <!-- dimsensi kolom panjang -->
                                                                                    <td>{{$row->dimensi_p}}</td>
                                                                                    <!-- Tebal plat  -->
                                                                                    <td>{{$row->tebal_plat}}</td>
                                                                                    <!-- tinggi net  -->
                                                                                    <td>{{1.5-$row->t-$row->tebal_plat}}</td>
                                                                                    <!-- selmut beton  -->
                                                                                    <td>{{$row->tebal_selimut}}</td>
                                                                                    <!-- jumlah kolom  -->
                                                                                    <td>{{$row->jum_kolom}}</td>
                                                                                    <!-- tipe footplat  -->
                                                                                    <td>{{$row->footplat_type}}</td>
                                                                                    <!-- footplat b  -->
                                                                                    <td>{{$row->b}}</td>
                                                                                    <!-- footplat h  -->
                                                                                    <td>{{$row->h}}</td>
                                                                                    <!-- footplat t  -->
                                                                                    <td>{{$row->t}}</td>
                                                                                    <td>Tulangan Pokok</td>
                                                                                    <!-- pk sengkang dia -->
                                                                                    <td rowspan="8">{{$row->tulpok_dia}}</td>
                                                                                    <!-- pk sengkang jum  -->
                                                                                    <td rowspan="8">{{$row->tulpok_jum}}</td>
                                                                                    <td colspan="3"></td>
                                                                                    <td>{{$row->ls}}</td>
                                                                                    <!-- tulpok ovlp  -->
                                                                                    <td>{{(28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))}}</td>
                                                                                    <!-- stek u/ kolom -->
                                                                                    <td>{{$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))}}</td>
                                                                                    <!-- Kait ke footplat  -->
                                                                                    <td>{{(28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t)}}</td>
                                                                                    <!-- panjang besi  -->
                                                                                    <td>{{$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))}}</td>
                                                                                    <!-- tulang panjang  -->
                                                                                    <td>{{(0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom}}</td>
                                                                                    <td colspan="5"></td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{$tos22_tamp_berat}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- bekissting  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- timbunan  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{0}}</td>
                                                                                    <td rowspan="8" class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos22_del/<?= $row->id_tos22 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos21 ?>" data-type="<?= $row->type ?>" data-bentuk="<?= $row->bentuk ?>" data-t="<?= $row->t ?>" data-l="<?= $row->l ?>" data-p="<?= $row->p ?>" data-jumlah="<?= $row->jumlah ?>" data-tav_dia="<?= $row->tav_dia ?>" data-tav_jarak="<?= $row->tav_jarak ?>" data-tav_p="<?= $row->tav_p ?>" data-tav_add="<?= $row->tav_add ?>" data-tav_jum="<?= $row->tav_jum ?>" data-tav_bjenis="<?= $row->tav_bjenis ?>" data-tav_total="<?= $row->tav_total ?>" data-tbv_dia="<?= $row->tbv_dia ?>" data-tbv_jarak="<?= $row->tbv_jarak ?>" data-tbv_p="<?= $row->tbv_p ?>" data-tbv_add="<?= $row->tbv_add ?>" data-tbv_jum="<?= $row->tbv_jum ?>" data-tbv_bjenis="<?= $row->tbv_bjenis ?>" data-tbv_total="<?= $row->tbv_total ?>" data-tah_dia="<?= $row->tah_dia ?>" data-tah_jarak="<?= $row->tah_jarak ?>" data-tah_p="<?= $row->tah_p ?>" data-tah_add="<?= $row->tah_add ?>" data-tah_jum="<?= $row->tah_jum ?>" data-tah_bjenis="<?= $row->tah_bjenis ?>" data-tah_total="<?= $row->tah_total ?>" data-tbh_dia="<?= $row->tbh_dia ?>" data-tbh_jarak="<?= $row->tbh_jarak ?>" data-tbh_p="<?= $row->tbh_p ?>" data-tbh_add="<?= $row->tbh_add ?>" data-tbh_jum="<?= $row->tbh_jum ?>" data-tbh_bjenis="<?= $row->tbh_bjenis ?>" data-tbh_total="<?= $row->tbh_total ?>" data-tp_dia="<?= $row->tp_dia ?>" data-tp_jum="<?= $row->tp_jum ?>" data-tp_p="<?= $row->tp_p ?>" data-tp_total="<?= $row->tp_total ?>" data-v_besi="<?= $row->v_besi ?>" data-v_beton="<?= $row->v_beton ?>" data-v_bb="<?= $row->v_bb ?>" data-v_galian="<?= $row->v_galian ?>" data-v_lc="<?= $row->v_lc ?>" data-v_pasir="<?= $row->v_pasir ?>" data-target="#edit_tos13" id="tos13">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>.
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>.
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvtump_dia*$row->tvtump_dia*0.00785*(((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*(((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*(((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*(((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
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
                                            </div>
                                            <div class="tab-pane" id="tab-5">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pedestal</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos2Pedestal"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>
                                                                                    <th colspan="4">Footplat</th>
                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">T</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Keterangan</th>
                                                                                    <th colspan="2">Tulang Pokok</th>
                                                                                    <th colspan="3">Sengkang</th>
                                                                                    <th colspan="6">Tulang Pokok</th>
                                                                                    <th colspan="5">Sengkang</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Ovlp</th>
                                                                                    <th style="vertical-align:middle;">Stek u/ Kolom</th>
                                                                                    <th style="vertical-align:middle;">Kait ke Footplat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th colspan="2">Tekukan</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(Ttk)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(1.3Ldd)</th>
                                                                                    <th style="vertical-align:middle;">(28ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(Tebal FP +20ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">ld</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m2)</th>
                                                                                    <th style="vertical-align:middle;">(kg/m3)</th>

                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                @foreach($Tos21 as $row)
                                                                                <?php
                                                                                $tos21_tamp_berat = (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraklap * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraklap * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + 0.25 * 3.14 * $row->tvtump_dia * $row->tvtump_dia * 0.00785 * (((6 * ($row->tvtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * (((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * (((6 * ($row->thtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * (((6 * ($row->thlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom;
                                                                                ?>
                                                                                <tr class="gradeA">
                                                                                    <!-- tipe kolom  -->
                                                                                    <td>{{$row->tipe_kolom}}</td>
                                                                                    <!-- bentuk Kolom  -->
                                                                                    <td>{{$row->bentuk_kolom}}</td>
                                                                                    <!-- Tinggi   -->
                                                                                    <td>{{1.5-$row->t}}</td>
                                                                                    <!-- dimensi kolom lebar  -->
                                                                                    <td>{{$row->dimensi_l}}</td>
                                                                                    <!-- dimsensi kolom panjang -->
                                                                                    <td>{{$row->dimensi_p}}</td>
                                                                                    <!-- Tebal plat  -->
                                                                                    <td>{{$row->tebal_plat}}</td>
                                                                                    <!-- tinggi net  -->
                                                                                    <td>{{1.5-$row->t-$row->tebal_plat}}</td>
                                                                                    <!-- selmut beton  -->
                                                                                    <td>{{$row->tebal_selimut}}</td>
                                                                                    <!-- jumlah kolom  -->
                                                                                    <td>{{$row->jum_kolom}}</td>
                                                                                    <!-- tipe footplat  -->
                                                                                    <td>{{$row->footplat_type}}</td>
                                                                                    <!-- footplat b  -->
                                                                                    <td>{{$row->b}}</td>
                                                                                    <!-- footplat h  -->
                                                                                    <td>{{$row->h}}</td>
                                                                                    <!-- footplat t  -->
                                                                                    <td>{{$row->t}}</td>
                                                                                    <td>Tulangan Pokok</td>
                                                                                    <!-- pk sengkang dia -->
                                                                                    <td rowspan="8">{{$row->tulpok_dia}}</td>
                                                                                    <!-- pk sengkang jum  -->
                                                                                    <td rowspan="8">{{$row->tulpok_jum}}</td>
                                                                                    <td colspan="3"></td>
                                                                                    <td>{{$row->ls}}</td>
                                                                                    <!-- tulpok ovlp  -->
                                                                                    <td>{{(28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))}}</td>
                                                                                    <!-- stek u/ kolom -->
                                                                                    <td>{{$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))}}</td>
                                                                                    <!-- Kait ke footplat  -->
                                                                                    <td>{{(28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t)}}</td>
                                                                                    <!-- panjang besi  -->
                                                                                    <td>{{$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))}}</td>
                                                                                    <!-- tulang panjang  -->
                                                                                    <td>{{(0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom}}</td>
                                                                                    <td colspan="5"></td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{$tos21_tamp_berat}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- bekissting  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- timbunan  -->
                                                                                    <td>{{0}}</td>
                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{0}}</td>
                                                                                    <td rowspan="8" class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos22_del/<?= $row->id_tos22 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos21 ?>" data-type="<?= $row->type ?>" data-bentuk="<?= $row->bentuk ?>" data-t="<?= $row->t ?>" data-l="<?= $row->l ?>" data-p="<?= $row->p ?>" data-jumlah="<?= $row->jumlah ?>" data-tav_dia="<?= $row->tav_dia ?>" data-tav_jarak="<?= $row->tav_jarak ?>" data-tav_p="<?= $row->tav_p ?>" data-tav_add="<?= $row->tav_add ?>" data-tav_jum="<?= $row->tav_jum ?>" data-tav_bjenis="<?= $row->tav_bjenis ?>" data-tav_total="<?= $row->tav_total ?>" data-tbv_dia="<?= $row->tbv_dia ?>" data-tbv_jarak="<?= $row->tbv_jarak ?>" data-tbv_p="<?= $row->tbv_p ?>" data-tbv_add="<?= $row->tbv_add ?>" data-tbv_jum="<?= $row->tbv_jum ?>" data-tbv_bjenis="<?= $row->tbv_bjenis ?>" data-tbv_total="<?= $row->tbv_total ?>" data-tah_dia="<?= $row->tah_dia ?>" data-tah_jarak="<?= $row->tah_jarak ?>" data-tah_p="<?= $row->tah_p ?>" data-tah_add="<?= $row->tah_add ?>" data-tah_jum="<?= $row->tah_jum ?>" data-tah_bjenis="<?= $row->tah_bjenis ?>" data-tah_total="<?= $row->tah_total ?>" data-tbh_dia="<?= $row->tbh_dia ?>" data-tbh_jarak="<?= $row->tbh_jarak ?>" data-tbh_p="<?= $row->tbh_p ?>" data-tbh_add="<?= $row->tbh_add ?>" data-tbh_jum="<?= $row->tbh_jum ?>" data-tbh_bjenis="<?= $row->tbh_bjenis ?>" data-tbh_total="<?= $row->tbh_total ?>" data-tp_dia="<?= $row->tp_dia ?>" data-tp_jum="<?= $row->tp_jum ?>" data-tp_p="<?= $row->tp_p ?>" data-tp_total="<?= $row->tp_total ?>" data-v_besi="<?= $row->v_besi ?>" data-v_beton="<?= $row->v_beton ?>" data-v_bb="<?= $row->v_bb ?>" data-v_galian="<?= $row->v_galian ?>" data-v_lc="<?= $row->v_lc ?>" data-v_pasir="<?= $row->v_pasir ?>" data-target="#edit_tos13" id="tos13">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <td rowspan="7"></td>
                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>.
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>.
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvtump_dia*$row->tvtump_dia*0.00785*(((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{(6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*(((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2)}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*(((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2)}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*(((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
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
                                            </div>
                                            <div class="tab-pane" id="tab-6">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos2Summary"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Nama</th>
                                                                                    <th style="vertical-align:middle;">Beton</th>
                                                                                    <th style="vertical-align:middle;">Besi</th>
                                                                                    <th style="vertical-align:middle;">Bekisting</th>
                                                                                    <th style="vertical-align:middle;">Timbunan</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">
                                                                                    <td colspan="5">
                                                                                        Ground
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <!-- foreach($) -->
                                                                                    <td>
                                                                                        c1
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>

                                                                                </tr>

                                                                                <tr class="gradeA">
                                                                                    <td colspan="5">
                                                                                        Pump Room
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <!-- foreach($) -->
                                                                                    <td>
                                                                                        c1
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                    <td>
                                                                                        0
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tos 3 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 3<small> Kolom</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-7" data-toggle="tab">Data</a></li>
                                                <li><a class="nav-link" href="#tab-8" data-toggle="tab">Ground</a></li>
                                                <li><a class="nav-link" href="#tab-9" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-10" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-7">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Data Kolom</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos3Data"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bentuk</th>
                                                                                    <th colspan="2">Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" style="vertical-align:middle;">Tebal Selimut(mm)</th>
                                                                                    <th colspan="2"> Tulangan Pokok</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Tulangan Sengkang</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Horisontal Tumpuan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Horisontal Lapangan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Vertikal Tumpuan</th>
                                                                                    <th colspan="2" style="vertical-align:middle;">Ties - Vertikal Lapangan</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Lebar (m)</th>
                                                                                    <th style="vertical-align:middle;">Panjang(m)</th>
                                                                                    <th style="vertical-align:middle;">Diameter(mm)</th>
                                                                                    <th style="vertical-align:middle;">Jumlah</th>
                                                                                    <th style="vertical-align:middle;">Dia. Tumpuan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Jarak Tumpuan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia. Lapangan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Jarak Lapangan (mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>
                                                                                    <th style="vertical-align:middle;">Dia(m)</th>
                                                                                    <th style="vertical-align:middle;">Jarak(mm)</th>


                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-8">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Ground</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos3Ground"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>
                                                                                    <th colspan="4">Footplat</th>
                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">T</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Keterangan</th>
                                                                                    <th colspan="2">Tulang Pokok</th>
                                                                                    <th colspan="3">Sengkang</th>
                                                                                    <th colspan="6">Tulang Pokok</th>
                                                                                    <th colspan="5">Sengkang</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Ovlp</th>
                                                                                    <th style="vertical-align:middle;">Stek u/ Kolom</th>
                                                                                    <th style="vertical-align:middle;">Kait ke Footplat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th colspan="2">Tekukan</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(Ttk)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(1.3Ldd)</th>
                                                                                    <th style="vertical-align:middle;">(28ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(Tebal FP +20ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">ld</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m2)</th>
                                                                                    <th style="vertical-align:middle;">(kg/m3)</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-9">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos3PumpRoom"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>
                                                                                    <th colspan="4">Footplat</th>
                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">T</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Keterangan</th>
                                                                                    <th colspan="2">Tulang Pokok</th>
                                                                                    <th colspan="3">Sengkang</th>
                                                                                    <th colspan="6">Tulang Pokok</th>
                                                                                    <th colspan="5">Sengkang</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Dia</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">Ovlp</th>
                                                                                    <th style="vertical-align:middle;">Stek u/ Kolom</th>
                                                                                    <th style="vertical-align:middle;">Kait ke Footplat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th colspan="2">Tekukan</th>
                                                                                    <th style="vertical-align:middle;">Qty</th>
                                                                                    <th style="vertical-align:middle;">Total Panjang</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(Ttk)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(mm)</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(1.3Ldd)</th>
                                                                                    <th style="vertical-align:middle;">(28ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(Tebal FP +20ld+8ld)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">ld</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(m)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m2)</th>
                                                                                    <th style="vertical-align:middle;">(kg/m3)</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-10">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos3Summary"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Nama</th>
                                                                                    <th style="vertical-align:middle;">Beton</th>
                                                                                    <th style="vertical-align:middle;">Besi</th>
                                                                                    <th style="vertical-align:middle;">Bekisting</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tos 4 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 4<small> Tie Beam</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-11" data-toggle="tab">Data</a></li>
                                                <li><a class="nav-link" href="#tab-12" data-toggle="tab">Pool</a></li>
                                                <li><a class="nav-link" href="#tab-13" data-toggle="tab">Ground</a></li>
                                                <li><a class="nav-link" href="#tab-14" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-15" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-11">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Data</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos4Data"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Luas Sekur Beton (m2)</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-12">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pool</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos4Data"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="4">AS</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Nos </th>
                                                                                    <th colspan="2">Code</th>
                                                                                    <th colspan="4"> Panjang Balok</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat</th>
                                                                                    <th colspan="2" rowspan="2" style="vertical-align:middle;">Dimensi TB</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Luas Sekur Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Decking Beton</th>
                                                                                    <th colspan="7"> Tulangan Utama</th>
                                                                                    <th colspan="6"> Tulangan Sengkang</th>
                                                                                    <th colspan="2">Peminggang</th>
                                                                                    <th colspan="4">Tulangan Utama</th>
                                                                                    <th colspan="13">TULANGAN SENGKANG</th>
                                                                                    <th colspan="3"> Tulangan Peminggang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3"> Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th colspan="3">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Pos</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Kotor</th>
                                                                                    <th colspan="2">Pengaruhh Kolom</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Bersi</th>
                                                                                    <th colspan="6">Jumlah Tulangan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th colspan="3">Dia Sengkang</th>
                                                                                    <th colspan="3">Jarak Sengkang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="4">Tulangan Menerus</th>
                                                                                    <th colspan="4">Kiri</th>
                                                                                    <th colspan="4">Tengah</th>
                                                                                    <th colspan="4">Kanan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bekisting</th>

                                                                                </tr>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> - </th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th colspan="3"> Atas</th>
                                                                                    <th colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">sk-kiri</th>
                                                                                    <th style="vertical-align:middle;">sk-tgh</th>
                                                                                    <th style="vertical-align:middle;">sk-knn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tengah</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Atas</th>
                                                                                    <th style="vertical-align:middle;">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th>Utama</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>

                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-13">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Ground</h5>
                                                                    <div class="ibox-tools">\
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos4Ground"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="4">AS</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Nos </th>
                                                                                    <th colspan="2">Code</th>
                                                                                    <th colspan="4"> Panjang Balok</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat</th>
                                                                                    <th colspan="2" rowspan="2" style="vertical-align:middle;">Dimensi TB</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Luas Sekur Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Decking Beton</th>
                                                                                    <th colspan="7"> Tulangan Utama</th>
                                                                                    <th colspan="6"> Tulangan Sengkang</th>
                                                                                    <th colspan="2">Peminggang</th>
                                                                                    <th colspan="4">Tulangan Utama</th>
                                                                                    <th colspan="13">TULANGAN SENGKANG</th>
                                                                                    <th colspan="3"> Tulangan Peminggang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3"> Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th colspan="3">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Pos</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Kotor</th>
                                                                                    <th colspan="2">Pengaruhh Kolom</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Bersi</th>
                                                                                    <th colspan="6">Jumlah Tulangan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th colspan="3">Dia Sengkang</th>
                                                                                    <th colspan="3">Jarak Sengkang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="4">Tulangan Menerus</th>
                                                                                    <th colspan="4">Kiri</th>
                                                                                    <th colspan="4">Tengah</th>
                                                                                    <th colspan="4">Kanan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bekisting</th>

                                                                                </tr>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> - </th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th colspan="3"> Atas</th>
                                                                                    <th colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">sk-kiri</th>
                                                                                    <th style="vertical-align:middle;">sk-tgh</th>
                                                                                    <th style="vertical-align:middle;">sk-knn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tengah</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Atas</th>
                                                                                    <th style="vertical-align:middle;">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th>Utama</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>

                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-14">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos4PumpRoom"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="4">AS</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Nos </th>
                                                                                    <th colspan="2">Code</th>
                                                                                    <th colspan="4"> Panjang Balok</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat</th>
                                                                                    <th colspan="2" rowspan="2" style="vertical-align:middle;">Dimensi TB</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Luas Sekur Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Decking Beton</th>
                                                                                    <th colspan="7"> Tulangan Utama</th>
                                                                                    <th colspan="6"> Tulangan Sengkang</th>
                                                                                    <th colspan="2">Peminggang</th>
                                                                                    <th colspan="4">Tulangan Utama</th>
                                                                                    <th colspan="13">TULANGAN SENGKANG</th>
                                                                                    <th colspan="3"> Tulangan Peminggang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3"> Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th colspan="3">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Pos</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Kotor</th>
                                                                                    <th colspan="2">Pengaruhh Kolom</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Bersi</th>
                                                                                    <th colspan="6">Jumlah Tulangan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th colspan="3">Dia Sengkang</th>
                                                                                    <th colspan="3">Jarak Sengkang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="4">Tulangan Menerus</th>
                                                                                    <th colspan="4">Kiri</th>
                                                                                    <th colspan="4">Tengah</th>
                                                                                    <th colspan="4">Kanan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bekisting</th>

                                                                                </tr>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> - </th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th colspan="3"> Atas</th>
                                                                                    <th colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">sk-kiri</th>
                                                                                    <th style="vertical-align:middle;">sk-tgh</th>
                                                                                    <th style="vertical-align:middle;">sk-knn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tengah</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Atas</th>
                                                                                    <th style="vertical-align:middle;">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th>Utama</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>

                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-15">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos4Summary"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Bekisting</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tos 5 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 5<small> Beam</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-16" data-toggle="tab">Data</a></li>
                                                <li><a class="nav-link" href="#tab-17" data-toggle="tab">Ground</a></li>
                                                <li><a class="nav-link" href="#tab-18" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-19" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-16">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Data</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos5Data"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-17">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Ground</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos5Ground"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="4">AS</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Nos </th>
                                                                                    <th colspan="2">Code</th>
                                                                                    <th colspan="4"> Panjang Balok</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat</th>
                                                                                    <th colspan="2" rowspan="2" style="vertical-align:middle;">Dimensi TB</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Decking Beton</th>
                                                                                    <th colspan="7"> Tulangan Utama</th>
                                                                                    <th colspan="6"> Tulangan Sengkang</th>
                                                                                    <th colspan="2">Peminggang</th>
                                                                                    <th colspan="4">Tulangan Utama</th>
                                                                                    <th colspan="13">Tulangan Sengkang</th>
                                                                                    <th colspan="3"> Tulangan Peminggang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3"> Besi</th>
                                                                                    <th colspan="3">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Pos</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Kotor</th>
                                                                                    <th colspan="2">Pengaruhh Kolom</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Bersi</th>
                                                                                    <th colspan="6">Jumlah Tulangan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th colspan="3">Dia Sengkang</th>
                                                                                    <th colspan="3">Jarak Sengkang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="4">Tulangan Menerus</th>
                                                                                    <th colspan="4">Kiri</th>
                                                                                    <th colspan="4">Tengah</th>
                                                                                    <th colspan="4">Kanan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bekisting</th>

                                                                                </tr>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> - </th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th colspan="3"> Atas</th>
                                                                                    <th colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">sk-kiri</th>
                                                                                    <th style="vertical-align:middle;">sk-tgh</th>
                                                                                    <th style="vertical-align:middle;">sk-knn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tengah</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Atas</th>
                                                                                    <th style="vertical-align:middle;">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th>Utama</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-18">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos5PumpRoom"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="4">AS</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Nos </th>
                                                                                    <th colspan="2">Code</th>
                                                                                    <th colspan="4"> Panjang Balok</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat</th>
                                                                                    <th colspan="2" rowspan="2" style="vertical-align:middle;">Dimensi TB</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Decking Beton</th>
                                                                                    <th colspan="7"> Tulangan Utama</th>
                                                                                    <th colspan="6"> Tulangan Sengkang</th>
                                                                                    <th colspan="2">Peminggang</th>
                                                                                    <th colspan="4">Tulangan Utama</th>
                                                                                    <th colspan="13">Tulangan Sengkang</th>
                                                                                    <th colspan="3"> Tulangan Peminggang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3"> Besi</th>
                                                                                    <th colspan="3">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Pos</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">type</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Kotor</th>
                                                                                    <th colspan="2">Pengaruhh Kolom</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang Bersi</th>
                                                                                    <th colspan="6">Jumlah Tulangan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th colspan="3">Dia Sengkang</th>
                                                                                    <th colspan="3">Jarak Sengkang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="4">Tulangan Menerus</th>
                                                                                    <th colspan="4">Kiri</th>
                                                                                    <th colspan="4">Tengah</th>
                                                                                    <th colspan="4">Kanan</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Berat</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Bekisting</th>

                                                                                </tr>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> - </th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> As</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">B</th>
                                                                                    <th style="vertical-align:middle;">H</th>
                                                                                    <th colspan="3"> Atas</th>
                                                                                    <th colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">sk-kiri</th>
                                                                                    <th style="vertical-align:middle;">sk-tgh</th>
                                                                                    <th style="vertical-align:middle;">sk-knn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tengah</th>
                                                                                    <th style="vertical-align:middle;">Kanan</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">Atas</th>
                                                                                    <th style="vertical-align:middle;">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Berat</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th style="vertical-align:middle;">Panjang</th>
                                                                                    <th style="vertical-align:middle;">P</th>
                                                                                    <th style="vertical-align:middle;">Jarak</th>
                                                                                    <th style="vertical-align:middle;">N</th>
                                                                                    <th>Utama</th>
                                                                                    <th style="vertical-align:middle;">Add</th>
                                                                                    <th style="vertical-align:middle;">Total</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">Kiri</th>
                                                                                    <th style="vertical-align:middle;">Tgh</th>
                                                                                    <th style="vertical-align:middle;">Kn</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">m'</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(bh)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">bh</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-19">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos5Summary"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Bekisting</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tos 6 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 6<small> Slab</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-34" data-toggle="tab">Absolute Reference</a></li>
                                                <li><a class="nav-link" href="#tab-20" data-toggle="tab">t 200 upper GF</a></li>
                                                <li><a class="nav-link" href="#tab-21" data-toggle="tab">Lantai 1</a></li>
                                                <li><a class="nav-link" href="#tab-22" data-toggle="tab">t 120 upper GF</a></li>
                                                <li><a class="nav-link" href="#tab-23" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-24" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-34">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Overleap & Hook</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos1OH"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Dia</th>
                                                                                    <th>Panjang</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">
                                                                                    <td>10</td>
                                                                                    <td>10</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>20</td>
                                                                                    <td>20</td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-20">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>t 200 upper GF</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos6200UpperGF"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                    <h5>Rekapitulasi Perhitungan Struktur Plat</h5>
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Area</th>
                                                                                    <th colspan="3" style="vertical-align:middle;">Data</th>
                                                                                    <th style="vertical-align:middle;">Ratio Besi</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Keliling</th>
                                                                                    <th>Luasan</th>
                                                                                    <th>Tebal</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Bekisting</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Lean Concrete</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-21">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Lantai 1</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos6Lantai1"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                    <h5>Rekapitulasi Perhitungan Struktur Plat</h5>
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Area</th>
                                                                                    <th colspan="3" style="vertical-align:middle;">Data</th>
                                                                                    <th style="vertical-align:middle;">Ratio Besi</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Keliling</th>
                                                                                    <th>Luasan</th>
                                                                                    <th>Tebal</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Bekisting</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Lean Concrete</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-22">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>t 120 upper GF</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos6120UppperGF"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                    <h5>Rekapitulasi Perhitungan Struktur Plat</h5>
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Area</th>
                                                                                    <th colspan="3" style="vertical-align:middle;">Data</th>
                                                                                    <th style="vertical-align:middle;">Ratio Besi</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Keliling</th>
                                                                                    <th>Luasan</th>
                                                                                    <th>Tebal</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Bekisting</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Lean Concrete</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-23">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plusfont_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos4PumpRoom"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Type</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">B</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">H</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton Decking</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;" colspan="3">Dia Tulangan</th>
                                                                                    <th colspan="3"> Sengkang</th>
                                                                                    <th colspan="2"> Peminggang</th>
                                                                                    <th colspan="6" rowspan="2" style="vertical-align:middle;">Jumlahh Tulangan Utama</th>
                                                                                    <th colspan="3"> Jarak Sengkang</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="3">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Dia</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">N</th>
                                                                                    <th colspan="3">Dia</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Utama</th>
                                                                                    <th style="vertical-align:middle;">Skg</th>
                                                                                    <th style="vertical-align:middle;">Pg</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                    <th colspan="3">Atas</th colspan="3">
                                                                                    <th colspan="3" colspan="3">Bawah</th>
                                                                                    <th style="vertical-align:middle;">Ka</th>
                                                                                    <th style="vertical-align:middle;">tg</th>
                                                                                    <th style="vertical-align:middle;">KI</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                    <h5>Rekapitulasi Perhitungan Struktur Plat</h5>
                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Area</th>
                                                                                    <th colspan="3" style="vertical-align:middle;">Data</th>
                                                                                    <th style="vertical-align:middle;">Ratio Besi</th>
                                                                                    <th colspan="4" style="vertical-align:middle;">Volume</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Keliling</th>
                                                                                    <th>Luasan</th>
                                                                                    <th>Tebal</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Bekisting</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Lean Concrete</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                                <tr class="gradeA">


                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-24">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos6Summary"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                                                                    <th>Beton</th>
                                                                                    <th>Besi</th>
                                                                                    <th>Bekisting</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">kg</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tos 7 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>TOS 7<small> Retaining Wall</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="display:none">

                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a class="nav-link active" href="#tab-33" data-toggle="tab">Absolute Reference</a></li>
                                                <li><a class="nav-link" href="#tab-25" data-toggle="tab">Pump Room</a></li>
                                                <li><a class="nav-link" href="#tab-26" data-toggle="tab">Pool</a></li>
                                                <li><a class="nav-link" href="#tab-27" data-toggle="tab">Gutter Kolam Renang</a></li>
                                                <li><a class="nav-link" href="#tab-28" data-toggle="tab">Gutter Tanaman lt 1</a></li>
                                                <li><a class="nav-link" href="#tab-29" data-toggle="tab">Janggutan</a></li>
                                                <li><a class="nav-link" href="#tab-30" data-toggle="tab">RW Batu Kali</a></li>
                                                <li><a class="nav-link" href="#tab-31" data-toggle="tab">Summary</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-33">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Absolute Reference</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7AR"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Dia</th>
                                                                                    <th>Splice</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Ok</td>
                                                                                    <td>OYa</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-25">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pump Room</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7PumpRoom"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Type</th>
                                                                                    <th colspan="3"> Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bekisting</th>
                                                                                    <th colspan="13"> Tulangan Retaining Wall</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> tinggi</th>
                                                                                    <th style="vertical-align:middle;"> panjang</th>
                                                                                    <th style="vertical-align:middle;"> tebal</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Uraian</th>
                                                                                    <th style="vertical-align:middle;"> Uk.</th>
                                                                                    <th style="vertical-align:middle;"> Dia</th>
                                                                                    <th style="vertical-align:middle;"> Jarak</th>
                                                                                    <th style="vertical-align:middle;"> Kait</th>
                                                                                    <th style="vertical-align:middle;"> oL</th>
                                                                                    <th style="vertical-align:middle;"> Is</th>
                                                                                    <th style="vertical-align:middle;"> Panjang</th>
                                                                                    <th style="vertical-align:middle;"> Btg</th>
                                                                                    <th style="vertical-align:middle;"> P.Total</th>
                                                                                    <th style="vertical-align:middle;"> BJ</th>
                                                                                    <th style="vertical-align:middle;"> Nos</th>
                                                                                    <th style="vertical-align:middle;"> Total Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(kg/m')</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-26">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Pool</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7Pool"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Type</th>
                                                                                    <th colspan="3"> Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bekisting</th>
                                                                                    <th colspan="13"> Tulangan Retaining Wall</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> tinggi</th>
                                                                                    <th style="vertical-align:middle;"> panjang</th>
                                                                                    <th style="vertical-align:middle;"> tebal</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Uraian</th>
                                                                                    <th style="vertical-align:middle;"> Uk.</th>
                                                                                    <th style="vertical-align:middle;"> Dia</th>
                                                                                    <th style="vertical-align:middle;"> Jarak</th>
                                                                                    <th style="vertical-align:middle;"> Kait</th>
                                                                                    <th style="vertical-align:middle;"> oL</th>
                                                                                    <th style="vertical-align:middle;"> Is</th>
                                                                                    <th style="vertical-align:middle;"> Panjang</th>
                                                                                    <th style="vertical-align:middle;"> Btg</th>
                                                                                    <th style="vertical-align:middle;"> P.Total</th>
                                                                                    <th style="vertical-align:middle;"> BJ</th>
                                                                                    <th style="vertical-align:middle;"> Nos</th>
                                                                                    <th style="vertical-align:middle;"> Total Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(kg/m')</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-27">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Gutter Kolam Renang</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7KolamRenang"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Type</th>
                                                                                    <th colspan="3"> Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bekisting</th>
                                                                                    <th colspan="13"> Tulangan Retaining Wall</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> tinggi</th>
                                                                                    <th style="vertical-align:middle;"> panjang</th>
                                                                                    <th style="vertical-align:middle;"> tebal</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Uraian</th>
                                                                                    <th style="vertical-align:middle;"> Uk.</th>
                                                                                    <th style="vertical-align:middle;"> Dia</th>
                                                                                    <th style="vertical-align:middle;"> Jarak</th>
                                                                                    <th style="vertical-align:middle;"> Kait</th>
                                                                                    <th style="vertical-align:middle;"> oL</th>
                                                                                    <th style="vertical-align:middle;"> Is</th>
                                                                                    <th style="vertical-align:middle;"> Panjang</th>
                                                                                    <th style="vertical-align:middle;"> Btg</th>
                                                                                    <th style="vertical-align:middle;"> P.Total</th>
                                                                                    <th style="vertical-align:middle;"> BJ</th>
                                                                                    <th style="vertical-align:middle;"> Nos</th>
                                                                                    <th style="vertical-align:middle;"> Total Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(kg/m')</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-28">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Gutter Tanaman lt 1</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7Lantai1"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Type</th>
                                                                                    <th colspan="3"> Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bekisting</th>
                                                                                    <th colspan="13"> Tulangan Retaining Wall</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> tinggi</th>
                                                                                    <th style="vertical-align:middle;"> panjang</th>
                                                                                    <th style="vertical-align:middle;"> tebal</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Uraian</th>
                                                                                    <th style="vertical-align:middle;"> Uk.</th>
                                                                                    <th style="vertical-align:middle;"> Dia</th>
                                                                                    <th style="vertical-align:middle;"> Jarak</th>
                                                                                    <th style="vertical-align:middle;"> Kait</th>
                                                                                    <th style="vertical-align:middle;"> oL</th>
                                                                                    <th style="vertical-align:middle;"> Is</th>
                                                                                    <th style="vertical-align:middle;"> Panjang</th>
                                                                                    <th style="vertical-align:middle;"> Btg</th>
                                                                                    <th style="vertical-align:middle;"> P.Total</th>
                                                                                    <th style="vertical-align:middle;"> BJ</th>
                                                                                    <th style="vertical-align:middle;"> Nos</th>
                                                                                    <th style="vertical-align:middle;"> Total Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(kg/m')</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-29">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Janggutan</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos7Janggutan"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="3" style="vertical-align:middle;"> Type</th>
                                                                                    <th colspan="3"> Dimensi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Beton</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Bekisting</th>
                                                                                    <th colspan="13"> Tulangan Retaining Wall</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> tinggi</th>
                                                                                    <th style="vertical-align:middle;"> panjang</th>
                                                                                    <th style="vertical-align:middle;"> tebal</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;"> Uraian</th>
                                                                                    <th style="vertical-align:middle;"> Uk.</th>
                                                                                    <th style="vertical-align:middle;"> Dia</th>
                                                                                    <th style="vertical-align:middle;"> Jarak</th>
                                                                                    <th style="vertical-align:middle;"> Kait</th>
                                                                                    <th style="vertical-align:middle;"> oL</th>
                                                                                    <th style="vertical-align:middle;"> Is</th>
                                                                                    <th style="vertical-align:middle;"> Panjang</th>
                                                                                    <th style="vertical-align:middle;"> Btg</th>
                                                                                    <th style="vertical-align:middle;"> P.Total</th>
                                                                                    <th style="vertical-align:middle;"> BJ</th>
                                                                                    <th style="vertical-align:middle;"> Nos</th>
                                                                                    <th style="vertical-align:middle;"> Total Berat</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">m3</th>
                                                                                    <th style="vertical-align:middle;">m2</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(m')</th>
                                                                                    <th style="vertical-align:middle;">(kg/m')</th>
                                                                                    <th style="vertical-align:middle;">(n)</th>
                                                                                    <th style="vertical-align:middle;">(kg)</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-30">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>RW Batu Kali</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="fa fa-plus font_bantu btn btn-primary float-right" data-toggle="modal" data-target="#tos7RwBatuKali"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> Nama</th>
                                                                                    <th style="vertical-align:middle;"> B</th>
                                                                                    <th style="vertical-align:middle;"> H</th>
                                                                                    <th style="vertical-align:middle;"> Luas Alas (m2)</th>
                                                                                    <th style="vertical-align:middle;"> Panjang (m)</th>
                                                                                    <th style="vertical-align:middle;"> Volume (m3)</th>
                                                                                    <th style="vertical-align:middle;"> Galian (m3)</th>
                                                                                    <th style="vertical-align:middle;"> Pasir Urug (m2)</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th colspan="8">TO PUMP ROOM</th>
                                                                                    <th style="vertical-align:middle;">0,05</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>
                                                                    <div class="table-responsive scrollmenu">
                                                                        <h5>Rekap Volume Retaining Wall</h5>
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> Nama</th>
                                                                                    <th style="vertical-align:middle;"> Beton (m3)</th>
                                                                                    <th style="vertical-align:middle;"> Besi (kg)</th>
                                                                                    <th style="vertical-align:middle;"> Bekisting (m2)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-31">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Summary</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos7Summary"> Add Data</button>

                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <h5>Rekap Volume Retaining Wall Batu Kali</h5>
                                                                        <table class="table table-striped table-bordered table-hover dataTables-user">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;"> Nama</th>
                                                                                    <th style="vertical-align:middle;"> Beton (m3)</th>
                                                                                    <th style="vertical-align:middle;"> Besi (kg)</th>
                                                                                    <th style="vertical-align:middle;"> Bekisting (m2)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeC">
                                                                                    <td>Trident</td>
                                                                                    <td>Internet
                                                                                        Explorer 5.0
                                                                                    </td>
                                                                                    <td class="center">5</td>
                                                                                    <td class="center">C</td>
                                                                                </tr>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@include('layout.popup')
@include('layout.popupedit')