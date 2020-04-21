<!-- Linh query ---------------------------------------------->
<?php
    $level = "";
    include("config.php");
        include($level . Querry_part . "query_category.php");
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
        <!-- Nav -->
        <?php require_once('mainNav.php'); ?>
        <!-- /Nav -->

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="page-header-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><?= $name_cate ?></li>
                        </ul>
                        <h1><?= $name_cate ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
    </header>
    <!-- /Header -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                        <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="blog-post.php?id=<?php echo $post_in_3post['id']; ?>"><img
                                        src="./img/<?php echo $post_in_3post['thumbnail']; ?>" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2"
                                            href="#"><?php echo $post_in_3post['category']; ?></a>
                                        <span class="post-date"><?php echo $post_in_3post['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="blog-post.php?id=<?php echo $post_in_3post['id']; ?>"><?php echo $post_in_3post['title']; ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->

                        <?php foreach ($posts_post as $post_post) { ?>
                        <!-- post -->
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.php?id=<?php echo $post_post['id']; ?>"><img
                                        src="./img/<?php echo $post_post['thumbnail']; ?>" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2"
                                            href="#"><?php echo $post_post['category']; ?></a>
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


                        <div class="clearfix visible-md visible-lg"></div>

                        <!-- ad -->
                        <div class="col-md-12">
                            <div class="section-row">
                                <a href="#">
                                    <img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- ad -->
                        <?php foreach($posts_post5 as $post_p5) { ?>
                        <!-- post -->
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.php?id=<?php echo $post_p5['id']; ?>"><img
                                        src="./img/<?php echo $post_p5['thumbnail']; ?>" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#"><?php echo $post_p5['category']; ?></a>
                                        <span class="post-date"><?php echo $post_p5['created_at']; ?></span>
                                    </div>
                                    <h3 class="post-title"><a
                                            href="blog-post.php?id=<?php echo $post_p5['id']; ?>"><?php echo $post_p5['title']; ?></a>
                                    </h3>
                                    <p><?php echo $post_p5['description']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /post -->
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-4">


                    <!-- post widget -->
                    <?php

                    include($level . Post_part . "Most_Read.php");
                   ?>
                    <!-- /post widget -->

                    <!-- catagories -->
                    <div class="aside-widget">
                        <?php
                            include($level . Post_part . "post_categories.php");
                        ?>
                    </div>
                    <!-- /catagories -->
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