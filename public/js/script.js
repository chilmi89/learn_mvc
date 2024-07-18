// Fungsi ini akan menampilkan modal untuk menambah data mahasiswa ketika tombol TampilmodalTambah diklik

$(function(){
    $('.Tampilmodalhapus').on('click', function(e) {
        e.preventDefault(); // Mencegah reload halaman
        $('#formModalLabel').html('Hapus Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Hapus Data');
        $('.modal-body form').attr('action', 'http://localhost/learn_mvc/public/mahasiswa/hapus/');

        // Mengambil ID mahasiswa yang akan dihapus
        var id = $(this).data('id');
        console.log(id);

        // Set nilai ID pada input hidden
        $('#id').val(id);

        // Ajax live hapus
        $.ajax({
            url: 'http://localhost/learn_mvc/public/mahasiswa/hapus/',
            method: 'post',
            data: {
                id: id
            },
            success: function(data) {
                // Tambahkan logika atau tindakan setelah data dihapus
                console.log('Data berhasil dihapus');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('.TampilmodalTambah').on('click', function(e){
        e.preventDefault(); // Mencegah reload halaman
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });
    $('#form_modal').on('hidden.bs.modal', function () {
        $('#ubahDataForm').trigger('reset');
    });
    });

    // Fungsi ini akan menampilkan modal untuk mengubah data mahasiswa ketika tombol Tampilmodalubah diklik
    $('.Tampilmodalubah').on('click', function(e) {
        e.preventDefault(); // Mencegah reload halaman
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/learn_mvc/public/mahasiswa/ubah/');
        
        // Mengambil ID mahasiswa yang akan diubah
        var id = $(this).data('id');    
        console.log(id);

        // Mengirimkan permintaan AJAX untuk mendapatkan data mahasiswa berdasarkan ID
        $.ajax({
            url: 'http://localhost/learn_mvc/public/mahasiswa/GetUbah/' + id,
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#alamat').val(data.alamat);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            },
        });
    });
});