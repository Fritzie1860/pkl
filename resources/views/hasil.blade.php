<h1>Tos 21 </h1>
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
        @foreach($Tos21 as $row)
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

<h1> Tos 22 </h1>
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

<h1> Tos24 </h1>
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

<h1> Tos25 </h1>
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

<h1> Tos 26 </h1>
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