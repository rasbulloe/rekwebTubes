const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Barang ',
        text: 'Berhasil '  + flashData,
        type: 'success'
    });
}

const tombol = document.querySelector('#tombol');
tombol.addEventListener('click', function() {
    Swal({
        title: 'test',
        text: 'test',
        type: 'warning'
    });
});

$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin hapus data?',
        text: "Tidak bisa dikembalikan jika sudah dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

// event pada saat link diklik
$('.page-scroll').on('click', function(e) {


    // ambil isi href
     var tujuan = $(this).attr('href');
    //tangkap elemen ybs
     var elemenTujuan = $(tujuan);
    
    //pindahkan scroll
     $('html, body').animate({
      scrollTop: elemenTujuan.offset().top - 10
     }, 1100, 'easeInOutCirc');
    
     e.preventDefault();
    
    
    });