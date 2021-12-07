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
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id11" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input required type="text" class="form-control" name="dia" id="isi_dia">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Panjang pop up</label>
                        <input required type="text" class="form-control" id="isi_p" name="p">
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
        console.log("ini " + id);
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
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id12" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input required type="text" class="form-control" name="type" id="isi_type3">
                    </div>
                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input required type="text" class="form-control" id="isi_dfp_l" name="dfp_l">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input required type="text" class="form-control" id="isi_dfp_p" name="dfp_p">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input required type="text" class="form-control" id="isi_dfp_t" name="dfp_t">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input required type="text" class="form-control" id="isi_level_mta" name="level_mta">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input required type="text" class="form-control" id="isi_jumlah" name="jumlah">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input required type="text" class="form-control" id="isi_tav_dia" name="tav_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input required type="text" class="form-control" id="isi_tav_jarak" name="tav_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input required type="text" class="form-control" id="isi_tbv_dia" name="tbv_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input required type="text" class="form-control" id="isi_tbv_jarak" name="tbv_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input required type="text" class="form-control" id="isi_tbh_dia" name="tbh_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input required type="text" class="form-control" id="isi_tbh_jarak" name="tbh_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input required type="text" class="form-control" id="isi_tah_dia" name="tah_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input required type="text" class="form-control" id="isi_tah_jarak" name="tah_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input required type="text" class="form-control" id="isi_tp_dia" name="tp_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input required type="text" class="form-control" id="isi_tp_jum" name="tp_jum">
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
        console.log("footplat " + id);
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
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id13" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input required type="text" class="form-control" name="type" id="type3">
                    </div>
                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input required type="text" class="form-control" id="dfp_l3" name="dfp_l">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input required type="text" class="form-control" id="dfp_p3" name="dfp_p">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input required type="text" class="form-control" id="dfp_t3" name="dfp_t">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input required type="text" class="form-control" id="level_mta3" name="level_mta">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input required type="text" class="form-control" id="jumlah3" name="jumlah">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input required type="text" class="form-control" id="tav_dia3" name="tav_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input required type="text" class="form-control" id="tav_jarak3" name="tav_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input required type="text" class="form-control" id="tbv_dia3" name="tbv_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input required type="text" class="form-control" id="tbv_jarak3" name="tbv_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input required type="text" class="form-control" id="tbh_dia3" name="tbh_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input required type="text" class="form-control" id="tbh_jarak3" name="tbh_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input required type="text" class="form-control" id="tah_dia3" name="tah_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input required type="text" class="form-control" id="tah_jarak3" name="tah_jarak">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input required type="text" class="form-control" id="tp_dia3" name="tp_dia">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input required type="text" class="form-control" id="tp_jum3" name="tp_jum">
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
        console.log("pump room " + id);
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
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id14" />
                    <div class="form-group">
                        <label for="type">Nama</label>
                        <input required type="text" class="form-control" name="nama" id="nama14">
                    </div>
                    <div class="form-group">
                        <label for="type">Bentuk</label>
                        <input required type="text" class="form-control" id="bentuk14" name="bentuk">
                    </div>

                    <div class="form-group">
                        <label for="type">B</label>
                        <input required type="text" class="form-control" id="b14" name="b">
                    </div>

                    <div class="form-group">
                        <label for="type">B'</label>
                        <input required type="text" class="form-control" id="b_14" name="b_">
                    </div>

                    <div class="form-group">
                        <label for="type">H</label>
                        <input required type="text" class="form-control" id="h14" name="h">
                    </div>

                    <div class="form-group">
                        <label for="type">Panjang </label>
                        <input required type="text" class="form-control" id="panjang14" name="panjang">
                    </div>

                    <div class="form-group">
                        <label for="type">Luas Alas</label>
                        <input required type="text" class="form-control" id="la14" name="la">
                    </div>

                    <div class="form-group">
                        <label for="type">Volume Batu Kali</label>
                        <input required type="text" class="form-control" id="vbk14" name="vbk">
                    </div>

                    <div class="form-group">
                        <label for="type">Pasir Urug</label>
                        <input required type="text" class="form-control" id="pu14" name="pu">
                    </div>

                    <div class="form-group">
                        <label for="type">Galian</label>
                        <input required type="text" class="form-control" id="galian14" name="galian">
                    </div>

                    <div class="form-group">
                        <label for="type">Timbunan</label>
                        <input required type="text" class="form-control" id="timbunan14" name="timbunan">
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
        console.log("tos 14" + la);
        console.log("batu kali " + id);
        console.log("batu kali " + panjang);
        console.log("batu kali " + bentuk);
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

<!-- tos 2 Data Kolom -->
<div class="modal fade" id="edit_tos26" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">

                <form action="/tos26_edit" method="post">
                    @csrf
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id26" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required type="text" class="form-control" name="nama" id="26_nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bentuk</label>
                        <input required type="text" class="form-control" name="bentuk" id="26_bentuk" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_l">Lebar Dimensi</label>
                        <input required type="text" class="form-control" name="dimensi_l" id="26_dimensi_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">Panjang Dimensi</label>
                        <input required type="text" class="form-control" name="dimensi_p" id="26_dimensi_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tebal_selimut">Tebal Selimut</label>
                        <input required type="text" class="form-control" name="tebal_selimut" id="26_tebal_selimut" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_dia">Diameter Tulangan Pokok</label>
                        <input required type="text" class="form-control" name="tulpok_dia" id="26_tulpok_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_jum">Jumlah Tulangan Pokok</label>
                        <input required type="text" class="form-control" name="tulpok_jum" id="26_tulpok_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_tumpuan">Dia.Tumpuan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_tumpuan" id="26_tulseng_dia_tumpuan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraktump">Jarak Tumpuan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_jaraktump" id="26_tulseng_dia_jaraktump" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_lapangan">Dia.Lapangan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_lapangan" id="26_tulseng_dia_lapangan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraklap">Jarak Lapangan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_jaraklap" id="26_tulseng_dia_jaraklap" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_dia">Diameter (Ties-Horisontal Tumpuan)</label>
                        <input required type="text" class="form-control" name="thtump_dia" id="26_thtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_jarak">Jarak (Ties-Horisontal Tumpuan)</label>
                        <input required type="text" class="form-control" name="thtump_jarak" id="26_thtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_dia">Diameter (Ties-Horisontal Lapangan)</label>
                        <input required type="text" class="form-control" name="thlap_dia" id="26_thlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_jarak">Jarak (Ties-Horisontal Lapangan)</label>
                        <input required type="text" class="form-control" name="thlap_jarak" id="26_thlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_dia">Diameter (Ties-Vertikal Tumpuan)</label>
                        <input required type="text" class="form-control" name="tvtump_dia" id="26_tvtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_jarak">Jarak (Ties-Vertikal Tumpuan)</label>
                        <input required type="text" class="form-control" name="tvtump_jarak" id="26_tvtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_dia">Diameter (Ties-Vertikal Lapangan)</label>
                        <input required type="text" class="form-control" name="tvlap_dia" id="26_tvlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_jarak">Jarak (Ties-Vertikal Lapangan)</label>
                        <input required type="text" class="form-control" name="tvlap_jarak" id="26_tvlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos26", function() {
        var nama = $(this).data('nama');
        var bentuk = $(this).data('bentuk');
        var dimensi_l = $(this).data('dimensi_l');
        var dimensi_p = $(this).data('dimensi_p');
        var tebal_selimut = $(this).data('tebal_selimut');
        var tulpok_dia = $(this).data('tulpok_dia');
        var tulpok_jum = $(this).data('tulpok_jum');
        var tulseng_dia_tumpuan = $(this).data('tulseng_dia_tumpuan');
        var tulseng_dia_lapangan = $(this).data('tulseng_dia_lapangan');
        var tulseng_dia_jaraklap = $(this).data('tulseng_dia_jaraklap');
        var tulseng_dia_jaraktump = $(this).data('tulseng_dia_jaraktump');
        var thtump_dia = $(this).data('thtump_dia');
        var thtump_jarak = $(this).data('thtump_jarak');
        var thlap_dia = $(this).data('thlap_dia');
        var thlap_jarak = $(this).data('thlap_jarak');
        var tvtump_dia = $(this).data('tvtump_dia');
        var tvtump_jarak = $(this).data('tvtump_jarak');
        var tvlap_dia = $(this).data('tvlap_dia');
        var tvlap_jarak = $(this).data('tvlap_jarak');
        var id = $(this).data('idt');
        console.log("thlap " + thlap_dia);
        console.log("id " + id);
        
        $("#isi_id26").val(id);
        $("#26_nama").val(nama);
        $("#26_bentuk").val(bentuk);
        $("#26_dimensi_l").val(dimensi_l);
        $("#26_dimensi_p").val(dimensi_p);
        $("#26_tebal_selimut").val(tebal_selimut);
        $("#26_tulpok_dia").val(tulpok_dia);
        $("#26_tulpok_jum").val(tulpok_jum);
        $("#26_tulseng_dia_tumpuan").val(tulseng_dia_tumpuan);
        $("#26_tulseng_dia_lapangan").val(tulseng_dia_lapangan);
        $("#26_tulseng_dia_jaraklap").val(tulseng_dia_jaraklap);
        $("#26_tulseng_dia_jaraktump").val(tulseng_dia_jaraktump);
        $("#26_thtump_dia").val(thtump_dia);
        $("#26_thtump_jarak").val(thtump_jarak);
        $("#26_thlap_dia").val(thlap_dia);
        $("#26_thlap_jarak").val(thlap_jarak);
        $("#26_tvtump_dia").val(tvtump_dia);
        $("#26_tvtump_jarak").val(tvtump_jarak);
        $("#26_tvlap_dia").val(tvlap_dia);
        $("#26_tvlap_jarak").val(tvlap_jarak);
    })
    // });
</script>

<!-- tos 2 Lewatan -->
<div class="modal fade" id="edit_tos24" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">

                <form action="/tos24_edit" method="post">
                    @csrf
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id24" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input required type="text" class="form-control" name="dia" id="isi_dia24">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Ls</label>
                        <input required type="text" class="form-control" id="isi_ls" name="ls">
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
        console.log("ini " + id);
        $("#isi_dia24").val(dia);
        $("#isi_ls").val(ls);
        $("#isi_id24").val(id);
    })
    // });
</script>

<!-- tos 2 data footplat -->
<div class="modal fade" id="edit_tos25" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Data Footplat</h2>
            </div>
            <div class="container">

                <form action="/tos25_edit" method="post">
                    @csrf
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id25" />
                    <div class="form-group">
                        <label for="dimensi_p">Nama</label>
                        <input required type="text" class="form-control" name="nama" id="nama25" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">B</label>
                        <input required type="text" class="form-control" name="b" id="b25" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">H</label>
                        <input required type="text" class="form-control" name="h" id="h25" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">T</label>
                        <input required type="text" class="form-control" name="t" id="t25" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos25", function() {
        var nama = $(this).data('nama');
        var b = $(this).data('b');
        var h = $(this).data('h');
        var t = $(this).data('t');
        var id = $(this).data('idt');
        console.log("ini " + nama);
        $("#nama25").val(nama);
        $("#b25").val(b);
        $("#h25").val(h);
        $("#t25").val(t);
        $("#isi_id25").val(id);
    })
    // });
    
</script>

<!-- tos 3 Data Kolom -->
<div class="modal fade" id="edit_tos31" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">

                <form action="/tos31_edit" method="post">
                    @csrf
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id31" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required type="text" class="form-control" name="nama" id="31_nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bentuk</label>
                        <input required type="text" class="form-control" name="bentuk" id="31_bentuk" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_l">Lebar Dimensi</label>
                        <input required type="text" class="form-control" name="dimensi_l" id="31_dimensi_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">Panjang Dimensi</label>
                        <input required type="text" class="form-control" name="dimensi_p" id="31_dimensi_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tebal_selimut">Tebal Selimut</label>
                        <input required type="text" class="form-control" name="tebal_selimut" id="31_tebal_selimut" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_dia">Diameter Tulangan Pokok</label>
                        <input required type="text" class="form-control" name="tulpok_dia" id="31_tulpok_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_jum">Jumlah Tulangan Pokok</label>
                        <input required type="text" class="form-control" name="tulpok_jum" id="31_tulpok_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_tumpuan">Dia.Tumpuan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_tumpuan" id="31_tulseng_dia_tumpuan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraktump">Jarak Tumpuan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_jaraktump" id="31_tulseng_dia_jaraktump" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_lapangan">Dia.Lapangan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_lapangan" id="31_tulseng_dia_lapangan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraklap">Jarak Lapangan (Tulangan Sengkang)</label>
                        <input required type="text" class="form-control" name="tulseng_dia_jaraklap" id="31_tulseng_dia_jaraklap" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_dia">Diameter (Ties-Horisontal Tumpuan)</label>
                        <input required type="text" class="form-control" name="thtump_dia" id="31_thtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_jarak">Jarak (Ties-Horisontal Tumpuan)</label>
                        <input required type="text" class="form-control" name="thtump_jarak" id="31_thtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_dia">Diameter (Ties-Horisontal Lapangan)</label>
                        <input required type="text" class="form-control" name="thlap_dia" id="31_thlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_jarak">Jarak (Ties-Horisontal Lapangan)</label>
                        <input required type="text" class="form-control" name="thlap_jarak" id="31_thlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_dia">Diameter (Ties-Vertikal Tumpuan)</label>
                        <input required type="text" class="form-control" name="tvtump_dia" id="31_tvtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_jarak">Jarak (Ties-Vertikal Tumpuan)</label>
                        <input required type="text" class="form-control" name="tvtump_jarak" id="31_tvtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_dia">Diameter (Ties-Vertikal Lapangan)</label>
                        <input required type="text" class="form-control" name="tvlap_dia" id="31_tvlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_jarak">Jarak (Ties-Vertikal Lapangan)</label>
                        <input required type="text" class="form-control" name="tvlap_jarak" id="31_tvlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos31", function() {
        var nama = $(this).data('nama');
        var bentuk = $(this).data('bentuk');
        var dimensi_l = $(this).data('dimensi_l');
        var dimensi_p = $(this).data('dimensi_p');
        var tebal_selimut = $(this).data('tebal_selimut');
        var tulpok_dia = $(this).data('tulpok_dia');
        var tulpok_jum = $(this).data('tulpok_jum');
        var tulseng_dia_tumpuan = $(this).data('tulseng_dia_tumpuan');
        var tulseng_dia_lapangan = $(this).data('tulseng_dia_lapangan');
        var tulseng_dia_jaraklap = $(this).data('tulseng_dia_jaraklap');
        var tulseng_dia_jaraktump = $(this).data('tulseng_dia_jaraktump');
        var thtump_dia = $(this).data('thtump_dia');
        var thtump_jarak = $(this).data('thtump_jarak');
        var thlap_dia = $(this).data('thlap_dia');
        var thlap_jarak = $(this).data('thlap_jarak');
        var tvtump_dia = $(this).data('tvtump_dia');
        var tvtump_jarak = $(this).data('tvtump_jarak');
        var tvlap_dia = $(this).data('tvlap_dia');
        var tvlap_jarak = $(this).data('tvlap_jarak');
        var id = $(this).data('idt');
        console.log("thlap " + thlap_dia);
        console.log("id " + id);
        
        $("#isi_id31").val(id);
        $("#31_nama").val(nama);
        $("#31_bentuk").val(bentuk);
        $("#31_dimensi_l").val(dimensi_l);
        $("#31_dimensi_p").val(dimensi_p);
        $("#31_tebal_selimut").val(tebal_selimut);
        $("#31_tulpok_dia").val(tulpok_dia);
        $("#31_tulpok_jum").val(tulpok_jum);
        $("#31_tulseng_dia_tumpuan").val(tulseng_dia_tumpuan);
        $("#31_tulseng_dia_lapangan").val(tulseng_dia_lapangan);
        $("#31_tulseng_dia_jaraklap").val(tulseng_dia_jaraklap);
        $("#31_tulseng_dia_jaraktump").val(tulseng_dia_jaraktump);
        $("#31_thtump_dia").val(thtump_dia);
        $("#31_thtump_jarak").val(thtump_jarak);
        $("#31_thlap_dia").val(thlap_dia);
        $("#31_thlap_jarak").val(thlap_jarak);
        $("#31_tvtump_dia").val(tvtump_dia);
        $("#31_tvtump_jarak").val(tvtump_jarak);
        $("#31_tvlap_dia").val(tvlap_dia);
        $("#31_tvlap_jarak").val(tvlap_jarak);
    })
    // });
</script>

<!-- tos 3 Lewatan -->
<div class="modal fade" id="edit_tos35" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">

                <form action="/tos35_edit" method="post">
                    @csrf
                    <input required type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required type="hidden" name="idt" id="isi_id35" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input required type="text" class="form-control" name="dia" id="isi_dia35">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Ls</label>
                        <input required type="text" class="form-control" id="isi_ls35" name="ls">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function() {
    $(document).on('click', "#tos35", function() {
        var dia = $(this).data('dia');
        var ls = $(this).data('ls');
        var id = $(this).data('idt');
        console.log("ini " + id);
        $("#isi_dia35").val(dia);
        $("#isi_ls35").val(ls);
        $("#isi_id35").val(id);
    })
    // });
</script>