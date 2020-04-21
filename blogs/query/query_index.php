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