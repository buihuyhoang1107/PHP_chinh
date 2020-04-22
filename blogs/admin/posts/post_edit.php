<?php

session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//echo    $_SESSION['isLogin']; 
if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
    header("Location: login.php");
}
require_once('../../connection.php');
//Load posts -----------------------------------------------------------------------

//Lấy ra dữ liệu cần sửa
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_posts = "SELECT * FROM posts WHERE id =".$id ;

//Thực thi câu lệnh
$posts = $conn->query($query_posts)->fetch_assoc();

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


//End Load posts
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">Zent - Education And Technology Group</h3>
        <h3 align="center">Update Posts Infomation</h3>
        <hr>
        <form action="post_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$posts['id']?>">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$posts['title']?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?=$posts['description']?>">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <input type="text" class="form-control" id="" placeholder="" name="contents"
                    value="<?=$posts['contents']?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php foreach ($categories as $cate) {?>
                    <option <?= ($posts['category_id'] == $cate['id']) ? 'selected': ''?> value="<?= $cate['id'] ?>">
                        <?= $cate['title'] ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="../../img/<?=$posts['thumbnail']?>" width="200px">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail"
                    value="<?=$posts['thumbnail']?>">
            </div>
            <div class="form-group">
                <label for="">Hiện thị bài viết</label>
                <input <?= ($posts['status'] == 1) ? 'checked': ''?> type="checkbox" id="" placeholder="" value="1"
                    name="status">
                <i>(Check để hiện thị bài viết)</i>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>