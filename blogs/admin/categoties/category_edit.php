<?php

require_once('../../connection.php');
//Load category -----------------------------------------------------------------------

//Lấy ra dữ liệu cần sửa
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_category  = "SELECT * FROM categories WHERE id =".$id  ;

//Thực thi câu lệnh
$category = $conn->query($query_category)->fetch_assoc();



//End Load category
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
    <h3 align="center">Update Category Infomation</h3>
    <hr>
        <form action="category_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$category['id']?>">    
        <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$category['title']?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['description']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>