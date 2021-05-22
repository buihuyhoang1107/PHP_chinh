<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2>Featured Posts</h2>
    </div>
    <?php
    foreach ($posts_post_Featured as $post_Featured) {
        //print_r($post);
    ?>
        <div class="post post-thumb">
            <a class="post-img" href="blog-post.php?id=<?php echo $post_Featured['id']; ?>"><img src="./img/<?php echo $post_Featured['thumbnail']; ?>" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-3" href="category.html"><?php echo $post_Featured['category']; ?></a>
                    <span class="post-date"><?php echo $post_Featured['created_at']; ?></span>
                </div>
                <h3 class="post-title"><a href="blog-post.php?id=<?php echo $post_Featured['id']; ?>"><?php echo $post_Featured['title']; ?></a>
                </h3>
                <h3 class="post-title">
                    $<?php echo $post_Featured['price']; ?>
                </h3>
            </div>
        </div>
    <?php } ?>
    <!-- /post widget -->