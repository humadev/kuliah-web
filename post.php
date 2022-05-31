<?php
include "header.php";
 
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM Post WHERE id=$id");
$post = $result->fetch_object();
 
?>
<div class="card">
   <h2><?php echo $post->title ?></h2>
   <h5><?php echo $post->createdAt ?></h5>
   <div class="fakeimg" style="height:200px;">Image</div>
   <p><?php echo $post->content ?></p>
</div>
 
<?php include "footer.php" ?>
