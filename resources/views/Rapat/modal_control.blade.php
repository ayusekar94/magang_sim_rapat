<script type="text/javascript">
    // Memanggil server menggunakan AJAX
    function getDataKaryawan() {
        $.ajax({
            url: '/get_karyawan', // Endpoint yang telah Anda buat di Laravel
            method: 'GET',
            success: function(response) {
                // Variabel response berisi data yang diambil dari server (JSON)
                // Ubah response menjadi format data yang diharapkan oleh GridJS
                const data = response.map(item => [item.NIP, item.nama, item.email, item.jabatan, item.divisi, item.departemen, '<button>aaa</button>']);

                // Gunakan data untuk menginisialisasi tabel GridJS
                new gridjs.Grid({
                    columns: [{
                        id: 'myCheckbox',
                        name: 'Select',
                    },'NIP', 'Nama', 'Email', 'Jabatan', 'Divisi','Departemen','Aksi'],
                    data: data,
                    sort: !0,
	                search: !0,
                    pagination: {
                        limit: 5
                    },
                    // plugins: [plugins.RowSelection],
                }).render(document.getElementById('table-karyawan'));
            },
            error: function(err) {
                console.error('Error fetching data:', err);
            }
        });
    }

$(document).ready(function() {
    document.getElementById('tambahMateri').addEventListener('click', function() {
        const formMateriRapat = document.getElementsByClassName('formMateriRapat');
        Array.from(formMateriRapat).forEach((x) => {
        if (x.style.display === "none") {
            document.getElementById('tambahMateri').innerHTML = 'Save';
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    })
    });
});
</script>
