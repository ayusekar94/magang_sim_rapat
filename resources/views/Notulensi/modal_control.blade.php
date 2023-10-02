<script type="text/javascript">
    $(document).ready(function() {
      $('#formFile').on('change', function() {
        let reader = new FileReader();
        reader.onload = function(e) {
          $('#preview-file-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
    
      $('#formFileEdit').on('change', function() {
        let reader = new FileReader();
        reader.onload = function(e) {
          $('#preview-file-before-upload-edit').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
    });
    
    $(document).on('click','.open_modal',function(){
        var id = $(this).data('id');
        var catatan = $(this).data('catatan');
        var file = $(this).data('file');
    
        $('#modalEdit').modal('show');
        $('#id').val(id);
        $('#catatan-edit').val(catatan);
        // $('#formFileEdit').val(gambar);
        $('#preview-file-before-upload-edit').attr('src', file);
        $('#formEdit').attr("action","/notulensi/"+id);
    });
    
    // Buka Modal Saat Validation Error
       @if ($errors->has('catatan-edit')||$errors->has('file-edit'))
          $('#formEdit').modal('show');
       @endif

</script>