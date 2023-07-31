<script type="text/javascript">
    // Memanggil server menggunakan AJAX
    function getDataUndangan() {
        $.ajax({
            url: '/get_undangan', // Endpoint yang telah Anda buat di Laravel
            method: 'GET',
            success: function(response) {
                // Variabel response berisi data yang diambil dari server (JSON)
                // Ubah response menjadi format data yang diharapkan oleh GridJS
                const data = response.map(item => [item.email_penerima, item.status_undangan, item.waktu_pengiriman, item.rapat.nama_rapat,'<button>aaa</button>']);

                // Gunakan data untuk menginisialisasi tabel GridJS
                new gridjs.Grid({
                    columns: ['Email Penerima', 'Status Undangan', 'Waktu Pengiriman', 'Id Rapat', 'Aksi'],
                    data: data,
                    sort: !0,
	                search: !0,
                    pagination: {
                        limit: 5
                    },
                }).render(document.getElementById('table-undangan'));
            },
            error: function(err) {
                console.error('Error fetching data:', err);
            }
        });
    }

    // Panggil fungsi untuk mendapatkan data dari server
    getDataUndangan();
</script>
