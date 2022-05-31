<?php
include "header.php";
$posts = $conn->query("SELECT * FROM Post");
while($post = $posts->fetch_object()) {
 ?>
   <div class="card">
       <a href="post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
       <h5><?php echo $post->createdAt; ?></h5>
       <div class="fakeimg" style="height:200px;">Image</div>
   </div>
<?php
}
?>

 
<?php include "footer.php" ?>
