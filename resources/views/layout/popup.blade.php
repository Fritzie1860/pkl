<!-- Modal pop up -->

<!-- TOS 1 -->

<!-- tos 1 OH -->
<div class="modal fade" id="tos1OH" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Overleap & Hook</h2>
            </div>
            <div class="container">
                <form action="tos11" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="Dia">Dia </label>
                        <input required autocomplete="off" type="text" class="form-control" name="dia" id="Dia" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Panjang</label>
                        <input required autocomplete="off" type="text" class="form-control" name="p" id="panjang">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 1 foot plat -->
<div class="modal fade" id="tos1FootPlat" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Foot Plat</h2>
            </div>
            <div class="container">
                <form action="tos12" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input required autocomplete="off" type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_t" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input required autocomplete="off" type="text" class="form-control" name="level_mta" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumlah" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tav_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tav_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbv_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbv_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbh_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbh_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tah_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tah_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tp_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tp_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 1 Batu Kali -->
<div class="modal fade" id="tos1BatuKali" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form action="tos14" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input required autocomplete="off" type="text" class="form-control" name="nama" id="Nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bantuk</label>
                        <input required autocomplete="off" type="text" class="form-control" name="bentuk" id="bentuk" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="B">B</label>
                        <input required autocomplete="off" type="text" class="form-control" name="B" id="B" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="B_">B'</label>
                        <input required autocomplete="off" type="text" class="form-control" name="B_" id="B_" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="H">H</label>
                        <input required autocomplete="off" type="text" class="form-control" name="H" id="H" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="H">Panjang</label>
                        <input required autocomplete="off" type="text" class="form-control" name="panjang" id="panjang" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 1 pum rom -->
<div class="modal fade" id="tos1PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pump Room</h2>
            </div>
            <div class="container">
                <form action="tos13" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input required autocomplete="off" type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP L</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP P</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">DFP T</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dfp_t" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Level MTA</label>
                        <input required autocomplete="off" type="text" class="form-control" name="level_mta" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Jumlah

                        </label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumlah" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tav_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tav Jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tav_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBV dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbv_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tbv jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbv_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbh_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TBH Jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tbh_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TAH dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tah_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">Tah jarak</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tah_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TP dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tp_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <div class="form-group">
                        <label for="type">TP jum</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tp_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- TOS 2 -->

<!-- tos 2 Data Kolom-->
<div class="modal fade" id="tos2datakolom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Data Kolom</h2>
            </div>
            <div class="container">
                <form action="tos26" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required autocomplete="off" type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bentuk</label>
                        <input required autocomplete="off" type="text" class="form-control" name="bentuk" id="bentuk" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_l">Lebar Dimensi</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dimensi_l" id="dimensi_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">Panjang Dimensi</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dimensi_p" id="dimensi_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tebal_selimut">Tebal Selimut</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tebal_selimut" id="tebal_selimut" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_dia">Diameter Tulangan Pokok</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulpok_dia" id="tulpok_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_jum">Jumlah Tulangan Pokok</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulpok_jum" id="tulpok_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_tumpuan">Dia.Tumpuan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_tumpuan" id="tulseng_dia_tumpuan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraktump">Jarak Tumpuan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_jaraktump" id="tulseng_dia_jaraktump" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_lapangan">Dia.Lapangan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_lapangan" id="tulseng_dia_lapangan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraklap">Jarak Lapangan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_jaraklap" id="tulseng_dia_jaraklap" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_dia">Diameter (Ties-Horisontal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thtump_dia" id="thtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_jarak">Jarak (Ties-Horisontal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thtump_jarak" id="thtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_dia">Diameter (Ties-Horisontal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thlap_dia" id="thlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_jarak">Jarak (Ties-Horisontal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thlap_jarak" id="thlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_dia">Diameter (Ties-Vertikal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvtump_dia" id="tvtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_jarak">Jarak (Ties-Vertikal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvtump_jarak" id="tvtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_dia">Diameter (Ties-Vertikal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvlap_dia" id="tvlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_jarak">Jarak (Ties-Vertikal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvlap_jarak" id="tvlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 Data Footplat-->
<div class="modal fade" id="tos2datafootplat" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Data Kolom</h2>
            </div>
            <div class="container">
                <form action="tos25" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required autocomplete="off" type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="nama">B</label>
                        <input required autocomplete="off" type="text" class="form-control" name="b" id="b" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="nama">H</label>
                        <input required autocomplete="off" type="text" class="form-control" name="h" id="h" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="nama">T</label>
                        <input required autocomplete="off" type="text" class="form-control" name="t" id="t" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 lewatan -->
<div class="modal fade" id="tos2lewatan" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">
                <form action="tos24" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dia" id="Dia" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="ls">Ls</label>
                        <input required autocomplete="off" type="text" class="form-control" name="ls" id="ls" placeholder=". . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 ground flour -->
<div class="modal fade" id="tos2groundfloor" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Kolom Pedestal</h2>
            </div>
            <div class="container">
                <form action="tos22" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="tipe_kolom">Tipe Kolom</label>
                        <!-- <input required autocomplete="off" type="text" class="form-control" name="tipe_kolom" id="tipe_kolom" placeholder=". . ."> -->
                        <select name="tipe_kolom" id="tipetos26" style="float:right; margin-top:5px; width:150px; font-size:16px">
                            @foreach($Tos26 as $row)
                            <option value="{{$row->nama}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ls">Tebal Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tebal_plat" id="tebal_plat" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="jum_kolom">Jumlah Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jum_kolom" id="jum_kolom" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="ls">Tipe Footplat</label>
                        <select name="footplat_type" id="tipetos25" style="float:right; margin-top:5px; width:150px; font-size:16px">
                            @foreach($Tos25 as $row)
                            <option value="{{$row->nama}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pk_sengkang_qty">Penulangan Kolom Sengkang qty</label>
                        <input required autocomplete="off" type="text" class="form-control" name="pk_sengkang_qty" id="pk_sengkang_qty" placeholder=". . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 pedestal -->
<div class="modal fade" id="tos2Pedestal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pedestal</h2>
            </div>
            <div class="container">
                <div class="container">
                    <form action="tos21" method="post">
                    <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                        <div class="form-group">
                            <label for="tipe_kolom">Tipe Kolom</label>
                            <!-- <input required autocomplete="off" type="text" class="form-control" name="tipe_kolom" id="tipe_kolom" placeholder=". . ."> -->
                            <select name="tipe_kolom" id="tipetos26" style="float:right; margin-top:5px; width:150px; font-size:16px">
                                @foreach($Tos26 as $row)
                                <option name="tipe_kolom" value="{{$row->nama}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ls">Tebal Kolom</label>
                            <input required autocomplete="off" type="text" class="form-control" name="tebal_plat" id="tebal_plat" placeholder=". . .">
                        </div>
                        <div class="form-group">
                            <label for="jum_kolom">Jumlah Kolom</label>
                            <input required autocomplete="off" type="text" class="form-control" name="jum_kolom" id="jum_kolom" placeholder=". . .">
                        </div>
                        <div class="form-group">
                            <label for="ls">Tipe Footplat</label>
                            <select name="footplat_type" id="tipetos25" style="float:right; margin-top:5px; width:150px; font-size:16px">
                                @foreach($Tos25 as $row)
                                <option value="{{$row->nama}}">{{$row->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pk_sengkang_qty">Penulangan Kolom Sengkang qty</label>
                            <input required autocomplete="off" type="text" class="form-control" name="pk_sengkang_qty" id="pk_sengkang_qty" placeholder=". . .">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 summary -->
<div class="modal fade" id="tos2Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 3 Data Kolom-->
<div class="modal fade" id="tos3Data" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form action="tos31" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input required autocomplete="off" type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bentuk">Bentuk</label>
                        <input required autocomplete="off" type="text" class="form-control" name="bentuk" id="bentuk" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_l">Lebar Dimensi</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dimensi_l" id="dimensi_l" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="dimensi_p">Panjang Dimensi</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dimensi_p" id="dimensi_p" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tebal_selimut">Tebal Selimut</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tebal_selimut" id="tebal_selimut" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_dia">Diameter Tulangan Pokok</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulpok_dia" id="tulpok_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulpok_jum">Jumlah Tulangan Pokok</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulpok_jum" id="tulpok_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_tumpuan">Dia.Tumpuan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_tumpuan" id="tulseng_dia_tumpuan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraktump">Jarak Tumpuan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_jaraktump" id="tulseng_dia_jaraktump" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_lapangan">Dia.Lapangan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_lapangan" id="tulseng_dia_lapangan" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tulseng_dia_jaraklap">Jarak Lapangan (Tulangan Sengkang)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulseng_dia_jaraklap" id="tulseng_dia_jaraklap" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_dia">Diameter (Ties-Horisontal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thtump_dia" id="thtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thtump_jarak">Jarak (Ties-Horisontal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thtump_jarak" id="thtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_dia">Diameter (Ties-Horisontal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thlap_dia" id="thlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="thlap_jarak">Jarak (Ties-Horisontal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="thlap_jarak" id="thlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_dia">Diameter (Ties-Vertikal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvtump_dia" id="tvtump_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvtump_jarak">Jarak (Ties-Vertikal Tumpuan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvtump_jarak" id="tvtump_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_dia">Diameter (Ties-Vertikal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvlap_dia" id="tvlap_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="tvlap_jarak">Jarak (Ties-Vertikal Lapangan)</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tvlap_jarak" id="tvlap_jarak" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 3 grond  -->
<div class="modal fade" id="tos3Ground" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form action="tos32" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />

                    <div class="form-group">
                        <label for="tipe_kolom">Tipe Kolom</label>
                        <!-- <input required autocomplete="off" type="text" class="form-control" name="tipe_kolom" id="tipe_kolom" placeholder=". . ."> -->
                        <select name="tipe_kolom" id="tipetos26" style="float:right; margin-top:5px; width:150px; font-size:16px">
                            @foreach($Tos31 as $row)
                            <option name="tipe_kolom" value="{{$row->nama}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ls">Tebal Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tebal_plat" id="tebal_plat" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="ls">Dimnesi Kolom T</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dim_kol" id="dim_kol" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="jum_kolom">Jumlah Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jum_kolom" id="jum_kolom" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="pk_sengkang_qty">Penulangan Kolom Sengkang qty</label>
                        <input required autocomplete="off" type="text" class="form-control" name="pk_sengkang_qty" id="pk_sengkang_qty" placeholder=". . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 3 palm room  -->
<div class="modal fade" id="tos3PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form action="tos33" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="tipe_kolom">Tipe Kolom</label>
                        <!-- <input required autocomplete="off" type="text" class="form-control" name="tipe_kolom" id="tipe_kolom" placeholder=". . ."> -->
                        <select name="tipe_kolom" id="tipetos26" style="float:right; margin-top:5px; width:150px; font-size:16px">
                            @foreach($Tos31 as $row)
                            <option name="tipe_kolom" value="{{$row->nama}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ls">Tebal Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tebal_plat" id="tebal_plat" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="jum_kolom">Jumlah Kolom</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jum_kolom" id="jum_kolom" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="pk_sengkang_qty">Penulangan Kolom Sengkang qty</label>
                        <input required autocomplete="off" type="text" class="form-control" name="pk_sengkang_qty" id="pk_sengkang_qty" placeholder=". . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- tos 3 summary  -->
<div class="modal fade" id="tos3Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 2 lewatan -->
<div class="modal fade" id="tos3lewatan" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lewatan</h2>
            </div>
            <div class="container">
                <form action="tos35" method="post">
                    @csrf
                    <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="Dia">Dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="dia" id="Dia" placeholder=". . .">
                    </div>
                    <div class="form-group">
                        <label for="ls">Ls</label>
                        <input required autocomplete="off" type="text" class="form-control" name="ls" id="ls" placeholder=". . .">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 4 Data -->
<div class="modal fade" id="tos4Data" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Data</h2>
            </div>
            <div class="container">
                <form action="tos31" method="post">
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input required autocomplete="off" type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="b">B</label>
                        <input required autocomplete="off" type="text" class="form-control" name="b" id="b" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="h">H</label>
                        <input required autocomplete="off" type="text" class="form-control" name="h" id="h" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="bd">Beton Decking</label>
                        <input required autocomplete="off" type="text" class="form-control" name="bd" id="bd" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="diatul_utama">Dia Tulangan Utama</label>
                        <input required autocomplete="off" type="text" class="form-control" name="diatul_utama" id="diatul_utama" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="diatul_skg">Dia Tulangan Skg</label>
                        <input required autocomplete="off" type="text" class="form-control" name="diatul_skg" id="diatul_skg" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="diatul_pg">Dia Tulangan pg</label>
                        <input required autocomplete="off" type="text" class="form-control" name="tulpok_jum" id="tulpok_jum" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="sengkang_dia_ka">Sengkang Dia Ka</label>
                        <input required autocomplete="off" type="text" class="form-control" name="sengkang_dia_ka" id="sengkang_dia_ka" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="sengkang_dia_tg">Sengkang Dia Tg</label>
                        <input required autocomplete="off" type="text" class="form-control" name="sengkang_dia_tg" id="sengkang_dia_tg" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="sengkang_dia_ki">Sengkang Dia Ki</label>
                        <input required autocomplete="off" type="text" class="form-control" name="sengkang_dia_ki" id="sengkang_dia_ki" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="peminggang_dia">Peminggang Dia</label>
                        <input required autocomplete="off" type="text" class="form-control" name="peminggang_dia" id="peminggang_dia" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="peminggang_n">Peminggang N</label>
                        <input required autocomplete="off" type="text" class="form-control" name="peminggang_n" id="peminggang_n" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_atas1">Jumlah Tulangan Utama Atas 1</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_atas1" id="jumtulut_atas1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_atas2">Jumlah Tulangan Utama Atas 2</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_atas2" id="jumtulut_atas2" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_atas3">Jumlah Tulangan Utama Atas 3</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_atas3" id="jumtulut_atas3" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_bawah1">Jumlah Tulangan Utama Bawah 1</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_bawah1" id="jumtulut_bawah1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_bawah2">Jumlah Tulangan Utama Bawah 2</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_bawah2" id="jumtulut_bawah2" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jumtulut_bawah3">Jumlah Tulangan Utama Bawah 3</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jumtulut_bawah3" id="jumtulut_bawah3" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jarakseng_dia_ka">Jarak Sengkang Dia Ka</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jarakseng_dia_ka" id="jarakseng_dia_ka" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jarakseng_dia_tg">Jarak Sengkang Dia Tg</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jarakseng_dia_tg" id="jarakseng_dia_tg" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="jarakseng_dia_ki">Jarak Sengkang Dia Ki</label>
                        <input required autocomplete="off" type="text" class="form-control" name="jarakseng_dia_ki" id="jarakseng_dia_ki" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>
                    <div class="form-group">
                        <label for="l_sekur_beton">Luas Sekur</label>
                        <input required autocomplete="off" type="text" class="form-control" name="l_sekur_beton" id="l_sekur_beton" aria-describedby="emailHelp" placeholder="Enter data . . .">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 4 pool  -->
<div class="modal fade" id="tos4Pool" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 4 grond  -->
<div class="modal fade" id="tos4Ground" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 4 palm room  -->
<div class="modal fade" id="tos4PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 4 summary  -->
<div class="modal fade" id="tos4Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 5 Data -->
<div class="modal fade" id="tos5Data" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 5 grond  -->
<div class="modal fade" id="tos5Ground" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 5 palm room  -->
<div class="modal fade" id="tos5PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 5 summary  -->
<div class="modal fade" id="tos5Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 6 200 upper GF  -->
<div class="modal fade" id="tos6200UpperGF" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>200 upper GF</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 6 lantai 1  -->
<div class="modal fade" id="tos6Lantai1" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 6 120 upper gf  -->
<div class="modal fade" id="tos6120UpperGF" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 6 palm room  -->
<div class="modal fade" id="tos6PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 6 summary  -->
<div class="modal fade" id="tos6Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 pump room  -->
<div class="modal fade" id="tos7PumpRoom" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 pool  -->
<div class="modal fade" id="tos7Pool" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 gutter kkkolam renang  -->
<div class="modal fade" id="tos7KolamRenang" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 gutter tanaman lantai 1  -->
<div class="modal fade" id="tos7Lantai1" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 janggutan  -->
<div class="modal fade" id="tos7Janggutan" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 rw batu kali  -->
<div class="modal fade" id="tos7RwBatuKali" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 summary  -->
<div class="modal fade" id="tos7Summary" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- tos 7 AR  -->
<div class="modal fade" id="tos7AR" role="dialog" arialabelledby="modalLabel" area-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Batu Kali</h2>
            </div>
            <div class="container">
                <form>
                <input required autocomplete="off" type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input required autocomplete="off" type="hidden" name="cari" value="{{ $cari }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label> <input required autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter data . . .">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input required autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input required autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>