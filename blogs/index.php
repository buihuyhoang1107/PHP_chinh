<!-- Linh query ---------------------------------------------->
<?php
    $level = "";
    include("config.php");
        include($level . Querry_part . "query_index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include($level . Header_part . "link_header.php");
    ?>
</head>

<body>

    <!-- Header -->
    <header id="header">
        <?php require_once('mainNav.php'); ?>
    </header>
    <!-- /Header -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php
				foreach ($posts_two_posts as $posts_two_post) {
					//print_r($posts_two_post);
				?>
                <!-- post -->
                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.php?id=<?php echo $posts_two_post['id']; ?>"><img
                                src="./img/<?php echo $posts_two_post['thumbnail']; ?>" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">

                                <a class="post-category cat-2"
                                    href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?> "><?php echo $posts_two_post['category']; ?></a>

                                <span class="post-date"><?php echo $posts_two_post['created_at']; ?> </span>
                            </div>
                            <h3 class="post-title"><a
                                    href="blog-post.php?id=<?php echo $posts_two_post['id']; ?>"><?php echo $posts_two_post['title']; ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- /post -->
                <?php } ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                <?php

//Những sản phẩm gần đây
            foreach ($posts as $post) {
                //print_r($post);
            ?>
                <!-- post -->
                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img " href="blog-post.php?id=<?php echo $post['id']; ?>"><img
                                src="./img/<?php echo $post['thumbnail']; ?>" alt="" width="500" height="330"></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1"
                                    href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?> "><?php echo $post['category']; ?></a>
                                <span class="post-date"><?php echo $post['created_at']; ?></span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.php?id=<?php echo $post['id']; ?>">
                                    <?php echo $post['title']; ?> </a></h3>
                        </div>
                    </div>
                </div>
                <!-- /post -->

                <?php } ?>

            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <!-- postaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
                        <div class="clearfix visible-md visible-lg"></div>

                        <?php
						foreach ($posts_x as $post_x) {
							//print_r($post_x);
						?>
                        <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="blog-post.php?id=<?php echo $post_x['id']; ?>"><img
                                        src="./img/<?php echo $post_x['thumbnail']; ?>" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3"
                                            href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?> "><?php echo $post_x['category']; ?></a>
                                        <span class="post-date"><?php echo $post_x['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="blog-post.php?id=<?php echo $post_x['id']; ?>"><?php echo $post_x['title']; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- <!can chu y-- ----------------------------------------------- -->
                        <!-- /post -->
                        <?php } ?>

                        <div class="clearfix visible-md visible-lg"></div>
                        <?php
						foreach ($posts_post as $post_post) {
							//print_r($post_post);
						?>
                        <!-- post -->
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.php?id=<?php echo $post_post['id']; ?>"><img
                                        src="./img/<?php echo $post_post['thumbnail']; ?>" alt="" width="500"
                                        height="350"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2"
                                            href="category.html"><?php echo $post_post['category']; ?></a>
                                        <span class="post-date"><?php echo $post_post['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="blog-post.php?id=<?php echo $post_post['id']; ?>"><?php echo $post_post['title']; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        <?php } ?>
                    </div>
                </div>


                <div class="col-md-4">
                    <!-- --Most_Read----------------------------------------- -->
                    <?php
                    include($level . Post_part . "Most_Read.php");
                   ?>
                    <!-- Featured Posts------------------------------------------------------ -->
                    <?php
                    include($level . Post_part . "post_Featured_Posts.php");
                   ?>

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section section-grey">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Competitive product</h2>
                    </div>
                </div>
                <!-- posts_Featured -->
                <?php
						foreach ($posts_Featured as $Featured) {
							//print_r($post);
                        ?>

                <!-- post -->
                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.php?id=<?php echo $Featured['id']; ?>"><img
                                src="./img/<?php echo $Featured['thumbnail']; ?>" alt="" width="500" height="350"></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2"
                                    href="category.html"><?php echo $Featured['category']; ?></a>
                                <span class="post-date"><?php echo $Featured['created_at']; ?></span>
                            </div>
                            <h3 class="post-title"><a
                                    href="blog-post.php?id=<?php echo $Featured['id']; ?>"><?php echo $Featured['title']; ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- /post -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Daily production</h2>
                            </div>
                        </div>
                        <?php
						foreach ($posts_MostRead as $MostRead) {
							//print_r($post);
                        ?>
                        <!-- posts_MostRead -->
                        <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.php?id=<?php echo $MostRead['id']; ?>"><img
                                        src="./img/<?php echo $MostRead['thumbnail']; ?>" alt="" width="500"
                                        height="280"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2"
                                            href="category.html"><?php echo $MostRead['category']; ?></a>
                                        <span class="post-date"><?php echo $MostRead['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="blog-post.php?id=<?php echo $MostRead['id']; ?>"><?php echo $MostRead['title']; ?></a>
                                    </h3>
                                    <p><?php echo $MostRead['contents']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        <?php } ?>
                        <!-- 
                            <div class="col-md-12">
                                <div class="section-row">
                                    <button class="primary-button center-block">Load More</button>
                                </div>
                            </div> -->
                    </div>
                </div>
                <!-- categories---------------------------------------------------------------- -->
                <div class="col-md-4">
                    <?php
                            include($level . Post_part . "post_categories.php");
                    ?>


                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <?php
            include($level . Footer_part . "footer.php");
        ?>
</body>

</html>