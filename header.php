<?php
session_start();
if($_SESSION['akses']) {
    echo "Selamat datang, " . $_SESSION['nama'];
} else {
    header("Location: http://localhost/kuliah/login.php");
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

<?php require "koneksi.php"; ?>

<div class="header">
 <h1>My Blog</h1>
 <p>Mari Berbagi Cerita</p>
 <a href="login.php?logout=true">Logout</a>
</div>
 
<!-- Menampikan kolom sebelah kiri -->
<div class="row">
 <div class="leftcolumn">