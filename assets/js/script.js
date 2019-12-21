const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Barang ',
        text: 'Berhasil '  + flashData,
        type: 'success'
    });
}