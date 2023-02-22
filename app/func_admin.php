
<?php

//Admin

// Ubah Data Admin
function ubahAdmin($data)
{
    global $conn;

    $id_admin = $data["id_admin"];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    
    $query = "UPDATE admin SET
                username = '$username',
                password = '$password'
                WHERE id_admin = $id_admin";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>