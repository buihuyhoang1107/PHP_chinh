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
//Lấy biến --------------------------------------
$name_cate = $_GET['cate'];
?>