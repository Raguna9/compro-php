<?php
session_start();
// // initializing variables
$username = "";
$email    = "";
$errors = array();
// connect to the database
$connect = mysqli_connect('localhost', 'root', '', 'darul_atqia');

// LOGIN USER
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: admin.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
