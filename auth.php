<?php

session_start();

// if (isset($_SESSION["login"])) {
//   header("location: index.php");
//   exit;
// }

require 'app/functions.php';
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' and password = '$password' ");
$result = mysqli_num_rows($query);


if ($result > 0) {

  echo "
            <script type='text/javascript'>
            setTimeout(function () { 
            
              swal({
                      title: 'SELAMAT DATANG ADMIN',
                      timer: 5000,
                      showConfirmButton: true
                  });   
            },10);  
            window.setTimeout(function(){ 
              window.location.replace('adm/adm_pelajaran.php');
            } ,5000); 
            </script>";

  // set session
  $_SESSION["login"] = true;

  header("location: adm/adm_pelajaran.php");
} else {
  header("location: login.php");
}
