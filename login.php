<?php
session_start();
require "koneksi.php";
if(isset($_POST['email'])) {
    $login = false;
    $userLogin;
    $query = $conn->query("
        select*from user where 
            email='".$_POST['email']);
    while($user = $query->fetch_array()) {
        if(password_verify($_POST['password'], $user['password'])) {
            $login = true;
            $userLogin = $user;
        }
    }
    print_r($user);
    if($login) {
        $_SESSION['akses'] = 'admin';
        $_SESSION['nama'] = 'huma';
        $_SESSION['email'] = $userLogin['email'];
        header("Location: http://localhost/kuliah");
    } else {
        echo "Email atau password salah";
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: http://localhost/kuliah");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<!-- CSS only -->
</head>
<body>

<div class="header">
 <h1>My Blog</h1>
 <p>Mari Berbagi Cerita</p>
</div>

<form action="login.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="name@example.com" 
            name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
        <input
            type="password"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="name@example.com"
            name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>