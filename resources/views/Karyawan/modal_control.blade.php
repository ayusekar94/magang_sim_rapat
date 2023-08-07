<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click','.open_modal',function(){
        var nip = $(this).data('nip');
        var nama = $(this).data('nama');
        var email = $(this).data('email');
        var jabatan = $(this).data('jabatan');
        var divisi = $(this).data('divisi');
        // var gambar = $(this).data('gambar');
        $('#modalEdit').modal('show');
        $('#nip-edit').val(nip);
        $('#nama-edit').val(nama);
        $('#email-edit').val(email);
        $('#jabatan-edit').val(jabatan);
        $('#divisi-edit').val(divisi);
        $('#formEdit').attr("action","/karyawan/"+nip);
    });
});
    
    // Buka Modal Saat Validation Error
       @if ($errors->has('nip-edit')||$errors->has('nama-edit')||$errors->has('email-edit')||$errors->has('jabatan-edit')||$errors->has('divisi-edit'))
          $('#formEdit').modal('show');
       @endif
    </script>