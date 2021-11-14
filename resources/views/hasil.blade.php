<h1> Tos 22 </h1>
<table style="border: 10px;">


    @foreach($Tos22 as $row)
    <?php
    $tos22_tamp_berat = (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_lapangan * $row->tulseng_dia_lapangan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_lapangan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraklap * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraklap * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + (0.25 * 3.14 * $row->tulseng_dia_tumpuan * $row->tulseng_dia_tumpuan * 0.007855) * (((3.14 * $row->dimensi_l) + (6 * ($row->tulseng_dia_tumpuan / 1000) * 2) - ($row->tebal_selimut * 8)) * (ceil(((1.5 - $row->t) / ($row->tulseng_dia_jaraktump * 0.25)) + (($row->ls) / ($row->tulseng_dia_jaraktump * 0.25))) + 1 * $row->pk_sengkang_qty)) * $row->jum_kolom + 0.25 * 3.14 * $row->tvtump_dia * $row->tvtump_dia * 0.00785 * (((6 * ($row->tvtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->tvlap_dia * $row->tvlap_dia * 0.00785 * (((6 * ($row->tvlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->tvlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thtump_dia * $row->thtump_dia * 0.00785 * (((6 * ($row->thtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thtump_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom + 0.25 * 3.14 * $row->thlap_dia * $row->thlap_dia * 0.00785 * (((6 * ($row->thlap_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2))) * (ceil((($row->jum_kolom) * 0.25) / $row->thlap_jarak) + (1 * $row->pk_sengkang_qty))) * $row->jum_kolom;
    ?>
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



        <!-- sengkang tekukan id  -->
        <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
        <!-- sengkang tekukan panjang -->
        <td>{{round((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8),2)}}

        </td>
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
    <tr>
        <td>Sengkang Tumpuan</td>



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
    <tr>
        <td> Ties - Vertikal Tumpuan</td>


        <!-- sengkang tekukan id  -->
        <td>{{6*($row->tvtump_dia/1000)}}</td>
        <!-- sengkang tekukan panjang -->
        <td>{{round((6*($row->tvtump_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
        <!-- sengkang qty  -->
        <td>{{ceil($row->jum_kolom/$row->tvtump_jarak*0.25)+$row->pk_sengkang_qty}}
        </td>
        <!-- sengkang total panjang  -->
        <?php
        $a = round((6 * ($row->tvtump_dia / 1000)) * 2 + (($row->dimensi_p) - (($row->tebal_selimut) * 2)), 2);
        $b = ceil($row->jum_kolom / $row->tvtump_jarak * 0.25) + $row->pk_sengkang_qty;
        ?>
        <td>{{$a*$b}}</td>
        <!-- sengkang berat  -->
        <td>{{round(0.25*3.14*$row->tvtump_dia*$row->tvtump_dia*0.00785*$a*$b*$row->jum_kolom,2)}}
        </td>
    </tr>
    <tr>
        <td> Ties - Vertikal Lapangan</td>



        <!-- sengkang tekukan id  -->
        <td>{{6*($row->tvlap_dia/1000)}}</td>
        <!-- sengkang tekukan panjang -->
        <td>{{round((6*($row->tvlap_dia/1000))*2+(($row->dimensi_p)-(($row->tebal_selimut)*2)),2)}}</td>
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
    <tr>
        <td> Ties - Horisontal Tumpuan</td>



        <!-- sengkang tekukan id  -->
        <td>{{6*($row->thtump_dia/1000)}}</td>
        <!-- sengkang tekukan panjang -->
        <td>{{round(((($row->thtump_dia/1000)*12)+($row->dimensi_p-$row->tebal_selimut*2)*2),2)}}
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
    <tr>
        <td> Ties - Horisontal Lapangan</td>


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


</table>

<h1> Tos22 baris 1 </h1>
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
                <a href="/del_tos21/<?= $row->id_tos22 ?>" class="btn btn-danger btn-sm float-left"> <i class="fa fa-trash"></i> </a>
                <a class="btn btn-white btn-sm " data-toggle="modal" data-idt="<?= $row->id_tos21 ?>" data-type="<?= $row->type ?>" data-bentuk="<?= $row->bentuk ?>" data-t="<?= $row->t ?>" data-l="<?= $row->l ?>" data-p="<?= $row->p ?>" data-jumlah="<?= $row->jumlah ?>" data-tav_dia="<?= $row->tav_dia ?>" data-tav_jarak="<?= $row->tav_jarak ?>" data-tav_p="<?= $row->tav_p ?>" data-tav_add="<?= $row->tav_add ?>" data-tav_jum="<?= $row->tav_jum ?>" data-tav_bjenis="<?= $row->tav_bjenis ?>" data-tav_total="<?= $row->tav_total ?>" data-tbv_dia="<?= $row->tbv_dia ?>" data-tbv_jarak="<?= $row->tbv_jarak ?>" data-tbv_p="<?= $row->tbv_p ?>" data-tbv_add="<?= $row->tbv_add ?>" data-tbv_jum="<?= $row->tbv_jum ?>" data-tbv_bjenis="<?= $row->tbv_bjenis ?>" data-tbv_total="<?= $row->tbv_total ?>" data-tah_dia="<?= $row->tah_dia ?>" data-tah_jarak="<?= $row->tah_jarak ?>" data-tah_p="<?= $row->tah_p ?>" data-tah_add="<?= $row->tah_add ?>" data-tah_jum="<?= $row->tah_jum ?>" data-tah_bjenis="<?= $row->tah_bjenis ?>" data-tah_total="<?= $row->tah_total ?>" data-tbh_dia="<?= $row->tbh_dia ?>" data-tbh_jarak="<?= $row->tbh_jarak ?>" data-tbh_p="<?= $row->tbh_p ?>" data-tbh_add="<?= $row->tbh_add ?>" data-tbh_jum="<?= $row->tbh_jum ?>" data-tbh_bjenis="<?= $row->tbh_bjenis ?>" data-tbh_total="<?= $row->tbh_total ?>" data-tp_dia="<?= $row->tp_dia ?>" data-tp_jum="<?= $row->tp_jum ?>" data-tp_p="<?= $row->tp_p ?>" data-tp_total="<?= $row->tp_total ?>" data-v_besi="<?= $row->v_besi ?>" data-v_beton="<?= $row->v_beton ?>" data-v_bb="<?= $row->v_bb ?>" data-v_galian="<?= $row->v_galian ?>" data-v_lc="<?= $row->v_lc ?>" data-v_pasir="<?= $row->v_pasir ?>" data-target="#edit_tos13" id="tos13">
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