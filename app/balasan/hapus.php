<?php
require '../functions.php';

$id = $_GET["id"];


if (hapusBalasan($id) > 0) {
    echo "
    <script>
        alert('balasan berhasil dihapus');
        document.location.href = '../../adm/adm_balasan.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('balasan gagal dihapus');
        document.location.href = '../../adm/adm_balasan.php'
    </script>
    ";
}
