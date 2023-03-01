<?php
require '../functions.php';

$id = $_GET["id"];


if (hapusPesan($id) > 0) {
    echo "
    <script>
        alert('pesan berhasil dihapus');
        document.location.href = '../../adm/adm_pesan.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('pesan gagal dihapus');
        document.location.href = '../../adm/adm_pesan.php'
    </script>
    ";
}
