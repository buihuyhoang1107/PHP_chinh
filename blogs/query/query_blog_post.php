<?php

require_once('connection.php');

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

$id_blog = $_GET['id'];
$query_post_blog = "SELECT
p.*,
c.title AS 'cate_blog',
a.NAME 
FROM
posts p
LEFT JOIN categories c ON p.category_id = c.id
LEFT JOIN AUTHORS a ON p.author_id = a.id 
WHERE
p.id =".$id_blog;

$result_post_blog = $conn->query($query_post_blog);
$post_blog = $result_post_blog->fetch_assoc();

?>