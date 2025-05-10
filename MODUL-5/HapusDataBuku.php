<?php
require("Model.php");

$id_buku = $_GET["id_buku"];

if(hapusDataBuku($id_buku) > 0){
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data berhasil dihapus',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'Buku.php';
        });
    });
    </script>
    ";
} else {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data gagal dihapus',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'Buku.php';
        });
    });
    </script>
    ";
}
?>
