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
                        <input type="text" class="form-control" name="dia" id="isi_dia" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="panjang">Panjang pop up</label>
                        <input type="text" class="form-control" name="p" id="isi_p">
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