<?php

require_once('../../connection.php');
//Load posts -----------------------------------------------------------------------

//Lấy ra dữ liệu cần sửa
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_posts = "SELECT * FROM posts WHERE id =".$id  ;

//Thực thi câu lệnh
$posts = $conn->query($query_posts)->fetch_assoc();



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

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>