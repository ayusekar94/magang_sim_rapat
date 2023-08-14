<script type="text/javascript">
    // Memanggil server menggunakan AJAX
    function getDataKaryawan() {
        $.ajax({
            url: '/get_karyawan', // Endpoint yang telah Anda buat di Laravel
            method: 'GET',
            success: function(response) {
                // Variabel response berisi data yang diambil dari server (JSON)
                // Ubah response menjadi format data yang diharapkan oleh GridJS
                const data = response.map(item => [item.NIP, item.nama, item.email, item.jabatan, item.divisi, item.departemen]);

                // Gunakan data untuk menginisialisasi tabel GridJS
                new gridjs.Grid({
                    columns: ['NIP', 'Nama', 'Email', 'Jabatan', 'Divisi','Departemen','Aksi'],
                    data: data,
                    sort: !0,
	                search: !0,
                    pagination: {
                        limit: 5
                    },
                }).render(document.getElementById('table-karyawan'));
            },
            error: function(err) {
                console.error('Error fetching data:', err);
            }
        });
    }
    $(document).ready(function() {
        const judul=[];
        const file=[];
        const deskripsi=[];

        // Fungsi untuk menambahkan data materi ke dalam array
        function tambahMateriRapat() {
            const judulInputs = document.getElementsByName('judul_materi[]');
            const fileInputs = document.getElementsByName('file_materi[]');
            const deskripsiInputs = document.getElementsByName('deskripsi_materi[]');
            
            judul.push(judulInputs[0].value);
            judulInputs.value = judul;

            file.push(fileInputs[0].value);
            fileInputs.value = judul;

            deskripsi.push(deskripsiInputs[0].value);
            deskripsiInputs.value = judul;

            // for (let i = 0; i < judulInputs.length; i++) {
            //     judul.push(judulInputs[i].value);
            //     judulInputs.value = judul;
            //     console.log(judulInputs[i].value);
            // }
        }

        // Control Materi
        document.getElementById('tambahMateri').addEventListener('click', function() {
            const formMateriRapat = document.getElementById('formMateriRapat');
                if (formMateriRapat.style.display === "none") {
                    document.getElementById('tambahMateri').innerHTML = 'Save';
                    formMateriRapat.style.display = "block";
                } else {
                    formMateriRapat.style.display = "none";
                    tambahMateriRapat();
                    document.getElementById('tambahMateri').innerHTML = 'Tambah Materi Baru';
                }
        });

        // Tambah Array Materi


        // Control Undangan
        const checkbox = document.getElementById('customSwitch1');
        const jadwal = document.getElementById('jadwal');
        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                jadwal.style.display = 'none';
            } else {
                jadwal.style.display = 'block';
            }
        });
    });
</script>
