<!-- Linh query ---------------------------------------------->
<?php
    $level = "";
    include("config.php");
        include($level . Querry_part . "query_blog_post.php");
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
        <!-- Nav -->
        <?php require_once('mainNav.php'); ?>
        <!-- /Nav -->

        <!-- Page Header -->
        <div id="post-header" class="page-header">
            <div class="background-img" style="background-image: url('./img/images_bg_gradient.png');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html"><?=$post_blog['cate_blog']?></a>
                            <span class="post-date"><?=$post_blog['created_at']?></span>
                        </div>
                        <h1><?=$post_blog['title']?></h1>
                        <br>

                        <h3 class="post-title">
                            $<?php echo $post_blog['price']; ?>
                            <button class="add-cart">Add cart</button>
                        </h3>



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
                <!-- Post content -->
                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                            <h3><?=$post_blog['title']?></h3>
                            <img class="img-responsive" src="./img/<?php echo $post_blog['thumbnail']; ?>" alt="">

                            <p><?=$post_blog['description']?></p>
                            <p><?=$post_blog['contents']?></p>
                            <p><b><i>Đăng bởi: <?=$post_blog['NAME']?></i></b></p>
                        </div>
                        <div class=" post-shares sticky-shares">
                            <a href=" https://www.facebook.com/theskinfood.us" class="share-facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/skinfood_us" class="share-twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/skinfood_us/" class="share-pinterest"><i
                                    class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- author -->
                    <div class="section-row">
                        <div class="post-author">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="./img/author.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h3>John Doe</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <ul class="author-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /author -->

                    <!-- comments -->
                    <div class="section-row">
                        <div class="section-title">
                            <h2>3 Comments</h2>
                        </div>

                        <div class="post-comments">
                            <!-- comment -->
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="./img/avatar.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h4>John Doe</h4>
                                        <span class="time">March 27, 2018 at 8:00 am</span>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                    <!-- comment -->
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object" src="./img/avatar.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <h4>John Doe</h4>
                                                <span class="time">March 27, 2018 at 8:00 am</span>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                        </div>
                                    </div>
                                    <!-- /comment -->
                                </div>
                            </div>
                            <!-- /comment -->

                            <!-- comment -->
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="./img/avatar.png" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h4>John Doe</h4>
                                        <span class="time">March 27, 2018 at 8:00 am</span>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                            <!-- /comment -->
                        </div>
                    </div>
                    <!-- /comments -->

                    <!-- reply -->
                    <div class="section-row">
                        <div class="section-title">
                            <h2>Leave a reply</h2>
                            <p>your email address will not be published. required fields are marked *</p>
                        </div>
                        <form class="post-reply">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Name *</span>
                                        <input class="input" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Email *</span>
                                        <input class="input" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Website</span>
                                        <input class="input" type="text" name="website">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="primary-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /reply -->
                </div>
                <!-- /Post content -->

                <!-- aside -->
                <div class="col-md-4">
                    <?php
                    // <!-- --Most_Read----------------------------------------- -->
                    include($level . Post_part . "Most_Read.php");
                    // <!-- Featured Posts------------------------------------------------------ -->
                    include($level . Post_part . "post_Featured_Posts.php");
                   ?>

                    <!-- catagories -->
                    <div class="aside-widget">
                        <?php
                            include($level . Post_part . "post_categories.php");
                        ?>
                    </div>
                    <!-- /catagories -->
                </div>
                <!-- /aside -->
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