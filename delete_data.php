<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pelajaran WHERE id_pelajaran ='$id'");

// if (hapus($id) > 0) {
//     echo "
//     <script>
//         alert('data berhasil dihapus');
//         document.location.href = '../panel.php'
//     </script>
//     ";
// } else {
//     echo "
//     <script>
//         alert('data berhasil dihapus');
//         document.location.href = '../panel.php'
//     </script>
//     ";
// }


header("location:panel.php");
