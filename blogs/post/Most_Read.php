 <!-- post widget -->
 <div class="aside-widget">
     <div class="section-title">
         <h2>Most Read</h2>
     </div>
     <?php
        foreach ($posts_post_MostRead as $post_MostRead) {
            //print_r($post);
        ?>
         <div class="post post-widget">
             <a class="post-img" href="blog-post.php?id=<?php echo $post_MostRead['id']; ?>"><img src="./img/<?php echo $post_MostRead['thumbnail']; ?>" alt=""></a>
             <div class="post-body">
                 <h3 class="post-title">
                     <a href="blog-post.php?id=<?php echo $post_MostRead['id']; ?>"><?php echo $post_MostRead['title']; ?></a>
                 </h3>
                 <br>
                 <h3 class="post-title">
                     $<?php echo $post_MostRead['price']; ?>
                 </h3>
                 <button class="add-cart">Add cart</button>
             </div>
         </div>
     <?php } ?>

 </div>
 <!-- /post widget -->