<!-- tos 1 OH -->
<div class="modal fade" id="edit_tos11" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Overleap & Hook</h2>
            </div>
            <div class="container">
                
                <form action="/tos11_edit" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="idt" id="isi_id" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input type="text" class="form-control" name="dia" id="isi_dia">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Panjang pop up</label>
                        <input type="text" class="form-control" id="isi_p" name="p">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos11", function() {
        var dia = $(this).data('dia');
        var p = $(this).data('p');
        var id = $(this).data('idt');
        console.log("ini "+id);
        $("#isi_dia").val(dia);
        $("#isi_p").val(p);
        $("#isi_id").val(id);
    })
    // });
</script>

<!-- tos 1 footplat -->
<div class="modal fade" id="edit_tos12" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Foot Plat</h2>
            </div>
            <div class="container">
                
                <form action="/tos12_edit" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="idt" id="isi_id" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="isi_type3">
                    </div>
                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input type="text" class="form-control" id="isi_dfp_l" name="dfp_l">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input type="text" class="form-control" id="isi_dfp_p" name="dfp_p">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input type="text" class="form-control" id="isi_dfp_t" name="dfp_t">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input type="text" class="form-control" id="isi_level_mta" name="level_mta">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input type="text" class="form-control" id="isi_jumlah" name="jumlah">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input type="text" class="form-control" id="isi_tav_dia" name="tav_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input type="text" class="form-control" id="isi_tav_jarak" name="tav_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input type="text" class="form-control" id="isi_tbv_dia" name="tbv_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input type="text" class="form-control" id="isi_tbv_jarak" name="tbv_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input type="text" class="form-control" id="isi_tbh_dia" name="tbh_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input type="text" class="form-control" id="isi_tbh_jarak" name="tbh_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input type="text" class="form-control" id="isi_tah_dia" name="tah_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input type="text" class="form-control" id="isi_tah_jarak" name="tah_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input type="text" class="form-control" id="isi_tp_dia" name="tp_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input type="text" class="form-control" id="isi_tp_jum" name="tp_jum">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos12", function() {
        var id = $(this).data('idt');
        var type = $(this).data('type');
        var dfp_l = $(this).data('dfp_l'); 
        var dfp_p = $(this).data('dfp_p');
        var dfp_t = $(this).data('dfp_t');
        var level_mta = $(this).data('level_mta');
        var jumlah = $(this).data('jumlah');
        var tav_dia = $(this).data('tav_dia');
        var tav_jarak = $(this).data('tav_jarak');
        var tbv_dia = $(this).data('tbv_dia');
        var tbv_jarak = $(this).data('tbv_jarak');
        var tbh_dia = $(this).data('tbh_dia');
        var tbh_jarak = $(this).data('tbh_jarak');
        var tah_dia = $(this).data('tah_dia');
        var tah_jarak = $(this).data('tah_jarak');
        var tp_dia = $(this).data('tp_dia');
        var tp_jum = $(this).data('tp_jum'); 
        console.log("footplat "+id);
        console.log(level_mta);
        $("#isi_type").val(type);
        $("#isi_dfp_l").val(dfp_l);
        $("#isi_dfp_p").val(dfp_p);
        $("#isi_dfp_t").val(dfp_t);
        $("#isi_level_mta").val(level_mta);
        $("#isi_jumlah").val(jumlah);
        $("#isi_tav_dia").val(tav_dia);
        $("#isi_tav_jarak").val(tav_jarak);
        $("#isi_tbv_dia").val(tbv_dia);
        $("#isi_tbv_jarak").val(tbv_jarak);
        $("#isi_tbh_dia").val(tbh_dia);
        $("#isi_tbh_jarak").val(tbh_jarak);
        $("#isi_tah_dia").val(tah_dia);
        $("#isi_tah_jarak").val(tah_jarak);
        $("#isi_tp_dia").val(tp_dia);
        $("#isi_tp_jum").val(tp_jum);
        $("#isi_id").val(id);
    })
    // });
</script>

<!-- tos 1 pump room -->
<div class="modal fade" id="edit_tos13" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pump Room</h2>
            </div>
            <div class="container">
                
                <form action="/tos13_edit" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="idt" id="id3" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type3">
                    </div>
                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input type="text" class="form-control" id="dfp_l3" name="dfp_l">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input type="text" class="form-control" id="dfp_p3" name="dfp_p">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input type="text" class="form-control" id="dfp_t3" name="dfp_t">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input type="text" class="form-control" id="level_mta3" name="level_mta">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input type="text" class="form-control" id="jumlah3" name="jumlah">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input type="text" class="form-control" id="tav_dia3" name="tav_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input type="text" class="form-control" id="tav_jarak3" name="tav_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input type="text" class="form-control" id="tbv_dia3" name="tbv_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input type="text" class="form-control" id="tbv_jarak3" name="tbv_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input type="text" class="form-control" id="tbh_dia3" name="tbh_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input type="text" class="form-control" id="tbh_jarak3" name="tbh_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input type="text" class="form-control" id="tah_dia3" name="tah_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input type="text" class="form-control" id="tah_jarak3" name="tah_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input type="text" class="form-control" id="tp_dia3" name="tp_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input type="text" class="form-control" id="tp_jum3" name="tp_jum">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos13", function() {
        console.log("tos 13");
        var id = $(this).data('idt');
        var type = $(this).data('type');
        var dfp_l = $(this).data('dfp_l'); 
        var dfp_p = $(this).data('dfp_p');
        var dfp_t = $(this).data('dfp_t');
        var level_mta = $(this).data('level_mta');
        var jumlah = $(this).data('jumlah');
        var tav_dia = $(this).data('tav_dia');
        var tav_jarak = $(this).data('tav_jarak');
        var tbv_dia = $(this).data('tbv_dia');
        var tbv_jarak = $(this).data('tbv_jarak');
        var tbh_dia = $(this).data('tbh_dia');
        var tbh_jarak = $(this).data('tbh_jarak');
        var tah_dia = $(this).data('tah_dia');
        var tah_jarak = $(this).data('tah_jarak');
        var tp_dia = $(this).data('tp_dia');
        var tp_jum = $(this).data('tp_jum'); 
        console.log("pump room "+id);
        console.log(level_mta);
        console.log(type);
        console.log(dfp_l);
        console.log(dfp_p);
        console.log(dfp_t);
        console.log(tav_dia);
        console.log(tav_jarak);
        console.log(tp_dia);
        $("#type3").val(type);
        $("#dfp_l3").val(dfp_l);
        $("#dfp_p3").val(dfp_p);
        $("#dfp_t3").val(dfp_t);
        $("#level_mta3").val(level_mta);
        $("#jumlah3").val(jumlah);
        $("#tav_dia3").val(tav_dia);
        $("#tav_jarak3").val(tav_jarak);
        $("#tbv_dia3").val(tbv_dia);
        $("#tbv_jarak3").val(tbv_jarak);
        $("#tbh_dia3").val(tbh_dia);
        $("#tbh_jarak3").val(tbh_jarak);
        $("#tah_dia3").val(tah_dia);
        $("#tah_jarak3").val(tah_jarak);
        $("#tp_dia3").val(tp_dia);
        $("#tp_jum3").val(tp_jum);
        $("#id3").val(id);
    })
    // });
</script>

<!-- tos 1 batu kali-->
<div class="modal fade" id="edit_tos14" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                
                <form action="/tos14_edit" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="idt" id="id" />
                    <div class="form-group">
                        <label for="type">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama3">
                    </div>
                    <div class="form-group">
                        <label for="type">Bentuk</label>
                        <input type="text" class="form-control" id="bentuk3" name="bentuk">
                    </div>

                    <div class="form-group">
                        <label for="type">B</label>
                        <input type="text" class="form-control" id="b3" name="b">
                    </div>

                    <div class="form-group">
                        <label for="type">B'</label>
                        <input type="text" class="form-control" id="b_3" name="b_">
                    </div>

                    <div class="form-group">
                        <label for="type">H</label>
                        <input type="text" class="form-control" id="h3" name="h">
                    </div>

                    <div class="form-group">
                        <label for="type">Panjang                        </label>
                        <input type="text" class="form-control" id="panjang3" name="panjang">
                    </div>

                    <div class="form-group">
                        <label for="type">Luas Alas</label>
                        <input type="text" class="form-control" id="la3" name="la">
                    </div>

                    <div class="form-group">
                        <label for="type">Volume Batu Kali</label>
                        <input type="text" class="form-control" id="vbk3" name="vbk">
                    </div>

                    <div class="form-group">
                        <label for="type">Pasir Urug</label>
                        <input type="text" class="form-control" id="pu3" name="pu">
                    </div>

                    <div class="form-group">
                        <label for="type">Galian</label>
                        <input type="text" class="form-control" id="galian3" name="galian">
                    </div>

                    <div class="form-group">
                        <label for="type">Timbunan</label>
                        <input type="text" class="form-control" id="timbunan3" name="timbunan">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos14", function() {
        console.log("tos 13");
        var id = $(this).data('idt');
        var type = $(this).data('nama');
        var bentuk = $(this).data('bentuk'); 
        var b = $(this).data('b');
        var b_ = $(this).data('b_');
        var h = $(this).data('h');
        var panjang = $(this).data('panjang');
        var la = $(this).data('la');
        var vbk = $(this).data('vbk');
        var pu = $(this).data('pu');
        var galian = $(this).data('galian');
        var timbunan = $(this).data('timbunan'); 
        console.log("batu kali "+id);
        console.log(h);
        console.log(type);
        console.log(bentuk);
        console.log(b);
        console.log(b_);
        console.log(panjang);
        console.log(la);
        console.log(vbk);
        console.log(pu);
        console.log(galian);
        console.log(timbunan);
        console.log(tp_dia);
        $("#nama3").val(type);
        $("#bentuk3").val(bentuk);
        $("#b3").val(b);
        $("#b_3").val(b_);
        $("#h3").val(h);
        $("#panjang3").val(panjang);
        $("#la3").val(la);
        $("#vbk3").val(vbk);
        $("#pu3").val(pu);
        $("#galian3").val(galian);
        $("#timbunan3").val(timbunan);
        $("#id").val(id);
    })
    // });
</script>