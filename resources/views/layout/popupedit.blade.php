<!-- TOS 1 -->

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
                <input type="hidden" name="idt" id="isi_id11" />
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
        $("#isi_id11").val(id);
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
                <input type="hidden" name="idt" id="isi_id12" />
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
        $("#isi_id12").val(id);
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
                <input type="hidden" name="idt" id="isi_id13" />
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
        $("#isi_id13").val(id);
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
                <input type="hidden" name="idt" id="isi_id14" />
                    <div class="form-group">
                        <label for="type">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama14">
                    </div>
                    <div class="form-group">
                        <label for="type">Bentuk</label>
                        <input type="text" class="form-control" id="bentuk14" name="bentuk">
                    </div>

                    <div class="form-group">
                        <label for="type">B</label>
                        <input type="text" class="form-control" id="b14" name="b">
                    </div>

                    <div class="form-group">
                        <label for="type">B'</label>
                        <input type="text" class="form-control" id="b_14" name="b_">
                    </div>

                    <div class="form-group">
                        <label for="type">H</label>
                        <input type="text" class="form-control" id="h14" name="h">
                    </div>

                    <div class="form-group">
                        <label for="type">Panjang                        </label>
                        <input type="text" class="form-control" id="panjang14" name="panjang">
                    </div>

                    <div class="form-group">
                        <label for="type">Luas Alas</label>
                        <input type="text" class="form-control" id="la14" name="la">
                    </div>

                    <div class="form-group">
                        <label for="type">Volume Batu Kali</label>
                        <input type="text" class="form-control" id="vbk14" name="vbk">
                    </div>

                    <div class="form-group">
                        <label for="type">Pasir Urug</label>
                        <input type="text" class="form-control" id="pu14" name="pu">
                    </div>

                    <div class="form-group">
                        <label for="type">Galian</label>
                        <input type="text" class="form-control" id="galian14" name="galian">
                    </div>

                    <div class="form-group">
                        <label for="type">Timbunan</label>
                        <input type="text" class="form-control" id="timbunan14" name="timbunan">
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
        
        var id = $(this).data('idt');
        var type = $(this).data('nama');
        var bentuk = $(this).data('bentuk'); 
        var b = $(this).data('b');
        var b_ = $(this).data('b_');
        var h = $(this).data('h');
        var panjang = $(this).data('p');
        var la = $(this).data('la');
        var vbk = $(this).data('v_bk');
        var pu = $(this).data('pu');
        var galian = $(this).data('galian');
        var timbunan = $(this).data('timbunan');
        console.log("tos 14" +la); 
        console.log("batu kali "+id);
        console.log("batu kali "+panjang);
        console.log("batu kali "+bentuk);
        $("#nama14").val(type);
        $("#bentuk14").val(bentuk);
        $("#b14").val(b);
        $("#b_14").val(b_);
        $("#h14").val(h);
        $("#panjang14").val(panjang);
        $("#la14").val(la);
        $("#vbk14").val(vbk);
        $("#pu14").val(pu);
        $("#galian14").val(galian);
        $("#timbunan14").val(timbunan);
        $("#isi_id14").val(id);
    })
    // });
</script>

<!-- TOS 2 -->

<!-- tos 1 Lewatan -->
<div class="modal fade" id="edit_tos24" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">
                
                <form action="/tos24_edit" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="idt" id="isi_id24"/>
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input type="text" class="form-control" name="dia" id="isi_dia">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Ls</label>
                        <input type="text" class="form-control" id="isi_ls" name="ls">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos24", function() {
        var dia = $(this).data('dia');
        var ls = $(this).data('ls');
        var id = $(this).data('idt');
        console.log("ini "+id);
        $("#isi_dia").val(dia);
        $("#isi_ls").val(p);
        $("#isi_id24").val(id);
    })
    // });
</script>