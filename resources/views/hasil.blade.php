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
        <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty)}}</td>
        <!-- sengkang berat  -->
        <td>{{(0.25*3.14*$row->tulseng_dia_tumpuan*$row->tulseng_dia_tumpuan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_tumpuan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraktump*0.25))+(($row->ls)/($row->tulseng_dia_jaraktump *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>

    </tr>
    <tr class="gradeA">
        <td>Sengkang Lapangan</td>



        <!-- sengkang tekukan id  -->
        <td>{{6*($row->tulseng_dia_lapangan/1000)}}</td>
        <!-- sengkang tekukan panjang -->
        <td>{{(3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8)}}
            
        </td>
        <!-- sengkang qty  -->
        <td>{{ceil(((1.5-$row->t)/$row->tulseng_dia_jaraklap*0.2)+($row->ls/$row->tulseng_dia_jaraklap*0.2))*$row->pk_sengkang_qty}}
        </td>
        <!-- sengkang total panjang  -->
        <td>{{((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty)}}</td>
        <!-- sengkang berat  -->
        <td>{{(0.25*3.14*$row->tulseng_dia_lapangan*$row->tulseng_dia_lapangan*0.007855)*(((3.14*$row->dimensi_l)+(6*($row->tulseng_dia_lapangan/1000)*2)-($row->tebal_selimut*8))*(ceil(((1.5-$row->t)/($row->tulseng_dia_jaraklap*0.25))+(($row->ls)/($row->tulseng_dia_jaraklap *0.25)))+1*$row->pk_sengkang_qty))*$row->jum_kolom}}</td>
    </tr>
    <tr>
        <td>Sengkang Tumpuan</td>



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
    <tr>
        <td> Ties - Vertikal Tumpuan</td>


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
    <tr>
        <td> Ties - Vertikal Lapangan</td>



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
    <tr>
        <td> Ties - Horisontal Tumpuan</td>



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
    <tr>
        <td> Ties - Horisontal Lapangan</td>


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