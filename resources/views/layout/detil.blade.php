<div class="wrapper wrapper-content animated fadeInRight">
    <div class="font_bantu">
        <!-- Detail Project -->
        @foreach($info as $row)
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>
                                    <h2>{{$row->pro_nama}}</h2>
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
                                        @if($row->pro_status==0)
                                        <dd class="mb-1"><span class="label label-primary">Prepared</span></dd>
                                        @elseif($row->pro_status==1)
                                        <dd class="mb-1"><span class="label label-primary">On Going</span></dd>
                                        @else
                                        <dd class="mb-1"><span class="label label-primary">Finishhed</span></dd>
                                        @endif
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Created by:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">Admin</dd>
                                    </div>
                                </dl>


                            </div>
                            <div class="col-lg-6" id="cluster_info">

                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Start Date:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1">{{$row->tanggal_mulai}}</dd>
                                    </div>
                                </dl>
                                <dl class="row mb-0">
                                    <div class="col-sm-4 text-sm-right">
                                        <dt>Last update:</dt>
                                    </div>
                                    <div class="col-sm-8 text-sm-left">
                                        <dd class="mb-1"> {{$row->pro_update}} </dd>
                                    </div>
                                </dl>
                                <!-- <dl class="row mb-0">
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
                                </dl> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
                                                                    <div  class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table   class="table table-striped table-bordered table-hover dataTables-example">
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


                                                                            </tbody>
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table  class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                                <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b1 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                $b2 = round(0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b3 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b4 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                $b5 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * ((round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2)) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                $b6 = round(0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b7 = round(0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
                                                                                $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

                                                                                $beton_bundar = 3.14 * (0.5 * $row->dimensi_l) * (0.5 * $row->dimensi_l) * $row->jum_kolom * (1.5 - $row->t);
                                                                                $beton_kotak = ($row->dimensi_l * $row->dimensi_p * (1.5 - $row->t) * $row->jum_kolom);

                                                                                $bekisting_bundar = (3.14 * $row->dimensi_l) * ((1.5 - $row->t) - $row->tebal_plat) * $row->jum_kolom;
                                                                                $bekisting_kotak = (($row->dimensi_l + $row->dimensi_p) * 2 * ((1.5 - $row->t) - $row->tebal_plat)) * $row->jum_kolom;

                                                                                $timbunan = (($row->b * $row->h) - ($row->dimensi_l * $row->dimensi_p)) * ((1.5 - $row->t) - $row->tebal_plat) * 1.2 * $row->jum_kolom;
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
                                                                                    <!-- total panjang  -->
                                                                                    <td>{{round((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom,2)}}</td>
                                                                                    <td colspan="5"></td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($beton_kotak, 2);
                                                                                        } else {
                                                                                            echo round($beton_bundar, 2);
                                                                                        }
                                                                                        ?></td>
                                                                                    <!-- bekissting  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($bekisting_kotak, 2);
                                                                                        } else {
                                                                                            echo round($bekisting_bundar, 2);
                                                                                        }
                                                                                        ?></td>
                                                                                    <!-- timbunan  -->
                                                                                    <td>{{round($timbunan,2)}}</td>
                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2)}}</td>
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
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*((round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.007855)*((round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t/$row->tulseng_dia_jaraktump*0.25)+($row->ls/$row->tulseng_dia_jaraktump *0.25))+1*$row->pk_sengkang_qty}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*((round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>.
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>.
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvtump_dia*$row->tvtump_dia*0.00785*((round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*((round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*((round((6*($row->thtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->thtump_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*((round((6*($row->thlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->thlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom}}</td>
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                                    <th rowspan="3" style="vertical-align:middle;">Action</th>

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
                                                                                <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b1 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                $b2 = round(0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b3 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b4 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                $b5 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * ((round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2)) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                $b6 = round(0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b7 = round(0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
                                                                                $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

                                                                                $beton_bundar = 3.14 * (0.5 * $row->dimensi_l) * (0.5 * $row->dimensi_l) * $row->jum_kolom * (1.5 - $row->t);
                                                                                $beton_kotak = ($row->dimensi_l * $row->dimensi_p * (1.5 - $row->t) * $row->jum_kolom);

                                                                                $bekisting_bundar = (3.14 * $row->dimensi_l) * ((1.5 - $row->t) - $row->tebal_plat) * $row->jum_kolom;
                                                                                $bekisting_kotak = (($row->dimensi_l + $row->dimensi_p) * 2 * ((1.5 - $row->t) - $row->tebal_plat)) * $row->jum_kolom;

                                                                                $timbunan = (($row->b * $row->h) - ($row->dimensi_l * $row->dimensi_p)) * ((1.5 - $row->t) - $row->tebal_plat) * 1.2 * $row->jum_kolom;
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
                                                                                    <!-- Kait ke footplat -->
                                                                                    <td>{{$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))}}</td>
                                                                                    <!-- panjang besi  -->
                                                                                    <td>{{(28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t)}}</td>
                                                                                    <!-- total panjang  -->
                                                                                    <td>{{$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))}}</td>
                                                                                    <!-- Berat  -->
                                                                                    <td>{{round((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom,2)}}</td>
                                                                                    <td colspan="5"> </td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($beton_kotak, 2);
                                                                                        } else {
                                                                                            echo round($beton_bundar, 2);
                                                                                        }
                                                                                        ?></td>
                                                                                    <!-- bekissting  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($bekisting_kotak, 2);
                                                                                        } else {
                                                                                            echo round($bekisting_bundar, 2);
                                                                                        }
                                                                                        ?></td>

                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2)}}</td>
                                                                                    <td rowspan="8" class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos21_del/<?= $row->id_tos21 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
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
                                                                                    <td>{{ round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+($row->ls/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty; ?>
                                                                                    <td>{{ $a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/$row->tulseng_dia_jaraklap*0.2)+($row->ls/$row->tulseng_dia_jaraklap*0.2))*$row->pk_sengkang_qty}}

                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+(round($row->ls,2)/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->tvlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*((round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom,2)}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thtump_jarak*0.25)+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2)}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                                                                <?php
                                                                                $t_bes = 0;
                                                                                $t_bet = 0;
                                                                                $t_bek = 0;
                                                                                $ras = 0;
                                                                                ?>
                                                                                @foreach($sum_pedes as $row)
                                                                                <tr>

                                                                                    <td>
                                                                                        {{$row->label}}
                                                                                    </td>

                                                                                    <td>
                                                                                        {{$row->total_besi}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_beton}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_bekisting}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->rasio_b}}
                                                                                    </td>
                                                                                    <?php
                                                                                    $t_bes += $row->total_besi;
                                                                                    $t_bet += $row->total_beton;
                                                                                    $t_bek += $row->total_bekisting;
                                                                                    $ras += $row->rasio_b;
                                                                                    ?>
                                                                                </tr>


                                                                                @endforeach

                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bes}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bet}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bek}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$ras}}
                                                                                    </td>


                                                                                </tr>

                                                                                <tr class="gradeA">
                                                                                    <td colspan="5">
                                                                                        Pump Room
                                                                                    </td>

                                                                                </tr>
                                                                                <?php
                                                                                $t_bes = 0;
                                                                                $t_bet = 0;
                                                                                $t_bek = 0;
                                                                                $ras = 0;
                                                                                ?>
                                                                                @foreach($sum_kopedes as $row)
                                                                                <tr>

                                                                                    <td>
                                                                                        {{$row->label}}
                                                                                    </td>

                                                                                    <td>
                                                                                        {{$row->total_besi}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_beton}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_bekisting}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->rasio_b}}
                                                                                    </td>
                                                                                    <?php
                                                                                    $t_bes += $row->total_besi;
                                                                                    $t_bet += $row->total_beton;
                                                                                    $t_bek += $row->total_bekisting;
                                                                                    $ras += $row->rasio_b;
                                                                                    ?>
                                                                                </tr>


                                                                                @endforeach

                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bes}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bet}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bek}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$ras}}
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
                                                <li><a class="nav-link" href="#tab-38" data-toggle="tab">Absolute Reference</a></li>
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-examples">
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
                                                                                @foreach($Tos31 as $row)
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
                                                                                                <a href="/tos31_del/<?= $row->id_tos31 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos31 ?>" data-nama="<?= $row->nama ?>" data-bentuk="<?= $row->bentuk ?>" data-dimensi_l="<?= $row->dimensi_l ?>" data-dimensi_p="<?= $row->dimensi_p ?>" data-tebal_selimut="<?= $row->tebal_selimut ?>" data-tulpok_dia="<?= $row->tulpok_dia ?>" data-tulpok_jum="<?= $row->tulpok_jum ?>" data-tulseng_dia_tumpuan="<?= $row->tulseng_dia_tumpuan ?>" data-tulseng_dia_lapangan="<?= $row->tulseng_dia_lapangan ?>" data-tulseng_dia_jaraklap="<?= $row->tulseng_dia_jaraklap ?>" data-tulseng_dia_jaraktump="<?= $row->tulseng_dia_jaraktump ?>" data-thtump_dia="<?= $row->thtump_dia ?>" data-thtump_jarak="<?= $row->thtump_jarak ?>" data-thlap_dia="<?= $row->thlap_dia ?>" data-thlap_jarak="<?= $row->thlap_jarak ?>" data-tvtump_dia="<?= $row->tvtump_dia ?>" data-tvtump_jarak="<?= $row->tvtump_jarak ?>" data-tvlap_dia="<?= $row->tvlap_dia ?>" data-tvlap_jarak="<?= $row->tvlap_jarak ?>" data-target="#edit_tos31" id="tos31">
                                                                                                    <i class="fa fa-edit "></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </center>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>

                                                                            </tbody>

                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-38">
                                                <div class="wrapper wrapper-content animated fadeInRight">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox ">
                                                                <div class="ibox-title">
                                                                    <h5>Lewatan</h5>
                                                                    <div class="ibox-tools">
                                                                        <button type="submit" class="font_bantu fa fa-plus btn btn-primary float-right" data-toggle="modal" data-target="#tos3lewatan"> Add Data</button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">

                                                                    <div class="table-responsive scrollmenu">
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Dia</th>
                                                                                    <th>Ls</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($Tos35 as $row)
                                                                                <tr class="gradeA">
                                                                                    <td>{{$row->dia}}</td>
                                                                                    <td>{{$row->ls}}</td>
                                                                                    <td class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos35_del/<?= $row->id_tos35 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                                                                                                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos35 ?>" data-dia="<?= $row->dia ?>" data-ls="<?= $row->ls ?>" data-target="#edit_tos35" id="tos35">
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>

                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th rowspan="4" align="center" style="vertical-align:middle;">Action</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>

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
                                                                                @foreach($Tos32 as $row)
                                                                                <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b1 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                $b2 = round(0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b3 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b4 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                $b5 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * ((round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2)) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                $b6 = round(0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b7 = round(0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
                                                                                $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

                                                                                $beton_bundar = 3.14 * (0.5 * $row->dimensi_l) * (0.5 * $row->dimensi_l) * $row->jum_kolom * (1.5 - $row->t);
                                                                                $beton_kotak = ($row->dimensi_l * $row->dimensi_p * (1.5 - $row->t) * $row->jum_kolom);

                                                                                $bekisting_bundar = (3.14 * $row->dimensi_l) * ((1.5 - $row->t) - $row->tebal_plat) * $row->jum_kolom;
                                                                                $bekisting_kotak = (($row->dimensi_l + $row->dimensi_p) * 2 * ((1.5 - $row->t) - $row->tebal_plat)) * $row->jum_kolom;

                                                                                $timbunan = (($row->b * $row->h) - ($row->dimensi_l * $row->dimensi_p)) * ((1.5 - $row->t) - $row->tebal_plat) * 1.2 * $row->jum_kolom;
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
                                                                                    <!-- total panjang  -->
                                                                                    <td>{{(0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom}}</td>
                                                                                    <td colspan="5"> </td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($beton_kotak, 2);
                                                                                        } else {
                                                                                            echo round($beton_bundar, 2);
                                                                                        }
                                                                                        ?></td>
                                                                                    <!-- bekissting  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($bekisting_kotak, 2);
                                                                                        } else {
                                                                                            echo round($bekisting_bundar, 2);
                                                                                        }
                                                                                        ?></td>

                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2)}}</td>
                                                                                    <td rowspan="8" class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos21_del/<?= $row->id_tos21 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
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
                                                                                    <td>{{ round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+($row->ls/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty; ?>
                                                                                    <td>{{ $a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/$row->tulseng_dia_jaraklap*0.2)+($row->ls/$row->tulseng_dia_jaraklap*0.2))*$row->pk_sengkang_qty}}

                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+(round($row->ls,2)/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->tvlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*((round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom,2)}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thtump_jarak*0.25)+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2)}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th rowspan="4" style="vertical-align:middle;">Type Kolom</th>
                                                                                    <th rowspan="4" style="vertical-align:middle;"> Bentuk Kolom</th>
                                                                                    <th colspan="3">Dimensi Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tebal Plat </th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Tinggi Net</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Selimut Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Jumlah Kolom</th>

                                                                                    <th colspan="17"> Penulangan Kolom</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Besi</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Beton</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Bekisting</th>
                                                                                    <th rowspan="3" style="vertical-align:middle;">Rasio Besi</th>
                                                                                    <th rowspan="4" align="center" style="vertical-align:middle;">Action</th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Tinggi</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Lebar</th>
                                                                                    <th rowspan="2" style="vertical-align:middle;">Panjang</th>

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
                                                                                @foreach($Tos32 as $row)
                                                                                <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b1 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                $b2 = round(0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                $b3 = round(0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b4 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                $b5 = round(0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * ((round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2)) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                $b6 = round(0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);

                                                                                $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                $b7 = round(0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * $a * $b * $row->jum_kolom, 2);
                                                                                // echo "$b1 .' '.$b2.' '.$b3.' '.$b4.' '.$b5.' '.$b6.' '.$b7 ";
                                                                                $tos22_tamp_berat =  $b1 + $b2 + $b3  + $b4  + $b5 + $b6 + $b7;

                                                                                $beton_bundar = 3.14 * (0.5 * $row->dimensi_l) * (0.5 * $row->dimensi_l) * $row->jum_kolom * (1.5 - $row->t);
                                                                                $beton_kotak = ($row->dimensi_l * $row->dimensi_p * (1.5 - $row->t) * $row->jum_kolom);

                                                                                $bekisting_bundar = (3.14 * $row->dimensi_l) * ((1.5 - $row->t) - $row->tebal_plat) * $row->jum_kolom;
                                                                                $bekisting_kotak = (($row->dimensi_l + $row->dimensi_p) * 2 * ((1.5 - $row->t) - $row->tebal_plat)) * $row->jum_kolom;

                                                                                $timbunan = (($row->b * $row->h) - ($row->dimensi_l * $row->dimensi_p)) * ((1.5 - $row->t) - $row->tebal_plat) * 1.2 * $row->jum_kolom;
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
                                                                                    <!-- total panjang  -->
                                                                                    <td>{{(0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom}}</td>
                                                                                    <td colspan="5"> </td>
                                                                                    <!-- besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)}}</td>
                                                                                    <!-- beton  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($beton_kotak, 2);
                                                                                        } else {
                                                                                            echo round($beton_bundar, 2);
                                                                                        }
                                                                                        ?></td>
                                                                                    <!-- bekissting  -->
                                                                                    <td><?php
                                                                                        if ($row->bentuk == 'Kotak') {
                                                                                            echo round($bekisting_kotak, 2);
                                                                                        } else {
                                                                                            echo round($bekisting_bundar, 2);
                                                                                        }
                                                                                        ?></td>

                                                                                    <!-- rasio besi  -->
                                                                                    <td>{{round(((0.25*3.14*$row->tulpok_dia*$row->tulpok_dia*0.007855)*$row->tulpok_jum * ((28*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                        +$row->ls+$row->t+(20*($row->tulpok_dia/1000))+(8*($row->tulpok_dia/1000))
                                                                                    +(1.5-$row->t))*$row->jum_kolom+$tos22_tamp_berat),2)/round($beton_kotak,2)}}</td>
                                                                                    <td rowspan="8" class="project-actions">
                                                                                        <center>
                                                                                            <div style="display: inline-block;">
                                                                                                <a href="/tos21_del/<?= $row->id_tos21 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
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
                                                                                    <td>{{ round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+($row->ls/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + ($row->ls / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty; ?>
                                                                                    <td>{{ $a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Lapangan</td>

                                                                                    <td>{{$row->tulseng_dia_lapangan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraklap}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil(((1.5-$row->t)/$row->tulseng_dia_jaraklap*0.2)+($row->ls/$row->tulseng_dia_jaraklap*0.2))*$row->pk_sengkang_qty}}

                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil(((1.5 - $row->t) / $row->tulseng_dia_jaraklap * 0.2) + ($row->ls / $row->tulseng_dia_jaraklap * 0.2)) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td>Sengkang Tumpuan</td>

                                                                                    <td>{{$row->tulseng_dia_tumpuan}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tulseng_dia_jaraktump}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tulseng_dia_tumpuan/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((1.5-$row->t)/$row->tulseng_dia_jaraktump*0.25+(round($row->ls,2)/$row->tulseng_dia_jaraktump*0.25))+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8), 2);
                                                                                    $b = ceil((1.5 - $row->t) / $row->tulseng_dia_jaraktump * 0.25 + (round($row->ls, 2) / $row->tulseng_dia_jaraktump * 0.25)) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>

                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Tumpuan</td>

                                                                                    <td>{{$row->tvtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->tvlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->tvlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Vertikal Lapangan</td>

                                                                                    <td>{{$row->tvlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->tvlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->tvlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2),2)}}</td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)}}</td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <td>{{(round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty))}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->tvlap_dia*$row->tvlap_dia*0.00785*((round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2))*(ceil((($row->jum_kolom)*0.25)/$row->tvlap_jarak)+(1*$row->pk_sengkang_qty)))*$row->jum_kolom,2)}}</td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Tumpuan</td>

                                                                                    <td>{{$row->thtump_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thtump_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thtump_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thtump_jarak*0.25)+$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thtump_jarak * 0.25) + $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thtump_dia*$row->thtump_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="gradeA">
                                                                                    <td> Ties - Horisontal Lapangan</td>
                                                                                    <td>{{$row->thlap_dia}}</td>
                                                                                    <td>{{$row->pk_sengkang_qty}}</td>
                                                                                    <td>{{$row->thlap_jarak}}</td>

                                                                                    <!-- sengkang tekukan id  -->
                                                                                    <td>{{6*($row->thlap_dia/1000)}}</td>
                                                                                    <!-- sengkang tekukan panjang -->
                                                                                    <td>{{round(((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2)}}
                                                                                    </td>
                                                                                    <!-- sengkang qty  -->
                                                                                    <td>{{ceil($row->jum_kolom/$row->thlap_jarak*0.2)*$row->pk_sengkang_qty}}
                                                                                    </td>
                                                                                    <!-- sengkang total panjang  -->
                                                                                    <?php
                                                                                    $a = round(((($row->thtump_dia / 1000) * 12) + ($row->dimensi_p - $row->tebal_selimut * 2) * 2), 2);
                                                                                    $b = ceil($row->jum_kolom / $row->thlap_jarak * 0.2) * $row->pk_sengkang_qty;
                                                                                    ?>
                                                                                    <td>{{$a*$b}}</td>
                                                                                    <!-- sengkang berat  -->
                                                                                    <td>{{round(0.25*3.14*$row->thlap_dia*$row->thlap_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
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
                                                                        <table class="table table-striped table-bordered table-hover dataTables-example">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th style="vertical-align:middle;">Nama</th>
                                                                                    <th style="vertical-align:middle;">Beton</th>
                                                                                    <th style="vertical-align:middle;">Besi</th>
                                                                                    <th style="vertical-align:middle;">Bekisting</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="gradeA">
                                                                                    <td colspan="5">
                                                                                        Ground
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                                $t_bes = 0;
                                                                                $t_bet = 0;
                                                                                $t_bek = 0;
                                                                                $ras = 0;
                                                                                ?>
                                                                                @foreach($sum_ground as $row)
                                                                                <tr>

                                                                                    <td>
                                                                                        {{$row->label}}
                                                                                    </td>

                                                                                    <td>
                                                                                        {{$row->total_besi}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_beton}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_bekisting}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->rasio_b}}
                                                                                    </td>
                                                                                    <?php
                                                                                    $t_bes += $row->total_besi;
                                                                                    $t_bet += $row->total_beton;
                                                                                    $t_bek += $row->total_bekisting;
                                                                                    $ras += $row->rasio_b;
                                                                                    ?>
                                                                                </tr>


                                                                                @endforeach

                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bes}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bet}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bek}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$ras}}
                                                                                    </td>


                                                                                </tr>

                                                                                <tr class="gradeA">
                                                                                    <td colspan="5">
                                                                                        Pump Room
                                                                                    </td>

                                                                                </tr>
                                                                                <?php
                                                                                $t_bes = 0;
                                                                                $t_bet = 0;
                                                                                $t_bek = 0;
                                                                                $ras = 0;
                                                                                ?>
                                                                                @foreach($sum_pm as $row)
                                                                                <tr>

                                                                                    <td>
                                                                                        {{$row->label}}
                                                                                    </td>

                                                                                    <td>
                                                                                        {{$row->total_besi}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_beton}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->total_bekisting}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$row->rasio_b}}
                                                                                    </td>
                                                                                    <?php
                                                                                    $t_bes += $row->total_besi;
                                                                                    $t_bet += $row->total_beton;
                                                                                    $t_bek += $row->total_bekisting;
                                                                                    $ras += $row->rasio_b;
                                                                                    ?>
                                                                                </tr>


                                                                                @endforeach

                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bes}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bet}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$t_bek}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$ras}}
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
       

    </div>
</div>

@include('layout.popup')
@include('layout.popupedit')