<?php
require "../koneksi.php";
$posts = $conn->query("SELECT * FROM Post");

header("Content-type:application/json; charset=UTF-8");
echo json_encode($posts->fetch_all(MYSQLI_ASSOC));

?>