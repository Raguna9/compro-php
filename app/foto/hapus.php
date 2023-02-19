<?php
require '../functions.php';

$id = $_GET["id"];


if (hapusFoto($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../../adm/adm_foto.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../../adm/adm_foto.php'
    </script>
    ";
}
