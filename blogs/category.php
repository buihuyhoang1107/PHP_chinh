<?php

require_once('connection.php');

//Truy Vấn câu lệnh
$query = "SELECT * FROM `posts` ORDER BY created_at desc limit 6";

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

//lấy ID của danh mục id được chọn-----------------------------------------------------------------------

$id = $_GET['id'];

//Lấy ra 3 bài viết-----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_post = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id 
WHERE p.`status` = 1 AND p.category_id = " . $id . " ORDER BY created_at  desc limit 3";

//Thực thi câu lệnh
$result_post  = $conn->query($query_post);

$post_in_3post = $result_post->fetch_assoc();

//Tạo một mảng chứa dữ liệu
$posts_post = array();

while ($row = $result_post->fetch_assoc()) {
	$posts_post[] = $row;
}


//Lấy ra 5 bài viết-----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_5post = "SELECT p.*,c.title AS 'category' FROM `posts` p LEFT JOIN categories c ON p.category_id = c.id 
WHERE p.`status` = 1 AND p.category_id = " . $id . " ORDER BY created_at  desc limit 3,5";

//Thực thi câu lệnh
$result_5post  = $conn->query($query_5post);

//Tạo một mảng chứa dữ liệu
$posts_post5 = array();

while ($row = $result_5post->fetch_assoc()) {
	$posts_post5[] = $row;
}



//Lấy biến --------------------------------------
$name_cate = $_GET['cate'];
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

                        <div class="col-md-12">
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- ad -->
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                        </a>
                    </div>
                    <!-- /ad -->

                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                        Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The
                                        Backend Development Block!</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post widget -->

                    <!-- catagories -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /catagories -->

                    <!-- tags -->
                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tags -->

                    <!-- archive -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="archive-widget">
                            <ul>
                                <li><a href="#">Jan 2018</a></li>
                                <li><a href="#">Feb 2018</a></li>
                                <li><a href="#">Mar 2018</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /archive -->
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
                            <a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">About Us</h3>
                                <ul class="footer-links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Join Us</a></li>
                                    <li><a href="contact.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="category.html">Web Design</a></li>
                                    <li><a href="category.html">JavaScript</a></li>
                                    <li><a href="category.html">Css</a></li>
                                    <li><a href="category.html">Jquery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Join our Newsletter</h3>
                        <div class="footer-newsletter">
                            <form>
                                <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
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