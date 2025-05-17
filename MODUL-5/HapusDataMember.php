<?php
require("Model.php");

$id_member = $_GET["id_member"];

if(hapusDataMember($id_member) > 0){
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
            window.location.href = 'Member.php';
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
            window.location.href = 'Member.php';
        });
    });
    </script>
    ";
}
?>
