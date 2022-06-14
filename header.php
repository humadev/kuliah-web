<?php
// session_start();
// if($_SESSION['akses']) {
//     echo "Selamat datang, " . $_SESSION['nama'];
// } else {
//     header("Location: http://localhost/kuliah/login.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<!-- CSS only -->
<script>
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'api/post.php');

    xhr.onload = function() {
        let data = JSON.parse(xhr.responseText);
        for(post of data) {
            let divPost = document.getElementById('posts');
            divPost.innerHTML += `
            <div class="card">
                <a href="post.php?id=${post.id}"><h2>${post.title}</h2></a>
                <h5>${post.createdAt}</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
            </div>
            `;
        }
    }

    function getData() {
        xhr.send();
    }
</script>
</head>
<body>

<?php require "koneksi.php"; ?>

<div class="header">
 <h1>My Blog</h1>
 <p>Mari Berbagi Cerita</p>
 <a href="login.php?logout=true">Logout</a>
</div>
 <button onclick="getData()">get data</button>
<!-- Menampikan kolom sebelah kiri -->
<div class="row">
 <div class="leftcolumn">
     <div id="posts">

     </div>