<?php

require_once('connection.php');

//Truy Vấn câu lệnh
$query = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 6,6";

//Thực thi câu lệnh
$result  = $conn->query($query);

//Tạo một mảng chứa dữ liệu
$posts = array();

while ($row = $result->fetch_assoc()) {
	$posts[] = $row;
}

//Load category -----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_category  = "SELECT * FROM categories";

//Thực thi câu lệnh
$result_category = $conn->query($query_category);
//Tạo một mảng chứa dữ liệu
$categories = array();

while ($row = $result_category->fetch_assoc()) {
	$categories[] = $row;
}
//End Load category

//Lấy ra 2 bài viết đầu tiên của HOME -----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_two_posts = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 15,2";

//Thực thi câu lệnh
$result_two_posts  = $conn->query($query_two_posts);

//Tạo một mảng chứa dữ liệu
$posts_two_posts = array();

while ($row = $result_two_posts->fetch_assoc()) {
	$posts_two_posts[] = $row;
}

//Lấy ra 6 bài viết-----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_post = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 17,6";

//Thực thi câu lệnh
$result_post  = $conn->query($query_post);

//Tạo một mảng chứa dữ liệu
$posts_post = array();

while ($row = $result_post->fetch_assoc()) {
	$posts_post[] = $row;
}

//Lấy ra 1 bài viết lớn-----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_x = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 19,1";

//Thực thi câu lệnh
$result_x  = $conn->query($query_x);

//Tạo một mảng chứa dữ liệu
$posts_x = array();

while ($row = $result_x->fetch_assoc()) {
	$posts_x[] = $row;
}

//Lấy ra 4 bài viết liên quan-----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_post_MostRead = "SELECT * FROM `posts` ORDER BY created_at  desc limit 17,4";

//Thực thi câu lệnh
$result_post_MostRead  = $conn->query($query_post_MostRead);

//Tạo một mảng chứa dữ liệu
$posts_post_MostRead = array();

while ($row = $result_post_MostRead->fetch_assoc()) {
	$posts_post_MostRead[] = $row;
}
//Lấy ra 2 bài viết Featured-----------------------------------------------------------------------
$query_post_Featured = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 40,2";

//Thực thi câu lệnh
$result_post_Featured = $conn->query($query_post_Featured);

//Tạo một mảng chứa dữ liệu
$posts_post_Featured= array();

while ($row = $result_post_Featured->fetch_assoc()) {
	$posts_post_Featured[] = $row;
}
//-------------------------------------------------------------Featured Posts
//Truy Vấn câu lệnh
$query_Featured = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 58,3";

//Thực thi câu lệnh
$result_Featured  = $conn->query($query_Featured);

//Tạo một mảng chứa dữ liệu
$posts_Featured = array();

while ($row = $result_Featured->fetch_assoc()) {
	$posts_Featured[] = $row;
}

//-------------------------------------------------------------MostRead_End
$query_MostRead = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY created_at  desc limit 50,4";

//Thực thi câu lệnh
$result_MostRead = $conn->query($query_MostRead);

//Tạo một mảng chứa dữ liệu
$posts_MostRead = array();

while ($row = $result_MostRead->fetch_assoc()) {
	$posts_MostRead[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>WebMag HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
                            <a class="post-img" href="blog-post.php?id=<?php echo $post_MostRead['id']; ?>"><img
                                    src="./img/<?php echo $post_MostRead['thumbnail']; ?>" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title">
                                    <a
                                        href="blog-post.php?id=<?php echo $post_MostRead['id']; ?>"><?php echo $post_MostRead['title']; ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <!-- /post widget -->

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
                            <a class="post-img" href="blog-post.php?id=<?php echo $post_Featured['id']; ?>"><img
                                    src="./img/<?php echo $post_Featured['thumbnail']; ?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3"
                                        href="category.html"><?php echo $post_Featured['category']; ?></a>
                                    <span class="post-date"><?php echo $post_Featured['created_at']; ?></span>
                                </div>
                                <h3 class="post-title"><a
                                        href="blog-post.php?id=<?php echo $post_Featured['id']; ?>"><?php echo $post_Featured['title']; ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- /post widget -->

                        <!-- ad -->
                        <div class="aside-widget text-center">
                            <a href="#" style="display: inline-block;margin: auto;">
                                <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                            </a>
                        </div>
                        <!-- /ad -->
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
                                    src="./img/<?php echo $Featured['thumbnail']; ?>" alt="" width="500"
                                    height="350"></a>
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

                    <div class="col-md-4">

                        <!-- catagories -->
                        <div class="aside-widget">
                            <div class="section-title">
                                <h2>Catagories</h2>
                            </div>
                            <div class="category-widget">
                                <ul>
                                    <li style=" float:right"><b>Number</b> </li>
                                    <br>
                                    <br>

                                    <?php
                        $i = 1;
                        $j = 100;
                        
                                    foreach ($categories as $categorie) {
                                    ?>

                                    <li><a href="category.php?id=<?php echo $categorie['id']; ?>&cate=<?php echo $categorie['title'] ?>"
                                            class="cat-<?= $i ?>"><?php echo $categorie['title']; ?><span><?= $j ?></span></a>
                                    </li>
                                    <?php
                            $i++;
                            $j += 2;
							if ($i == 6){
								$i = 1;
                                
                            }
						} ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- Footer -->
        <footer id="footer">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html" class="logo"><img src="./img/images_skinfood_logo.png" alt=""></a>
                            </div>
                            <ul class="footer-nav">
                                <li><b>Shipping & Returns</b></li>
                                <li><i>Everything you need to know about shipping, tracking and returns</i> </li>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <div class="footer-copyright">
                                <span>&copy;
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    © 2020 SkinFood. All rights reserved.



                                    <!-- -----------------------------------------------Nguồn trang -->
                                    <!-- </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a> -->
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-widget">
                                    <h3>Need Help?</h3>
                                    <ul class="footer-links">
                                        <li>Start with our frequently asked questions or contact us at
                                            help@theskinfood.com</li>
                                        <li><a href="#">LEARN MORE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h4>Be the first to know about new products, offers and promos. Plus,
                                get 20% off!</h4>
                            <div class="footer-newsletter">
                                <form>
                                    <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                    <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <ul class="footer-social">
                                <li><a href=" https://www.facebook.com/theskinfood.us"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/skinfood_us"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/skinfood_us/"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </footer>
        <!-- /Footer -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>