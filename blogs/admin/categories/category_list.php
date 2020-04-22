<?php

require_once('../../connection.php');
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
    <h3 align="center">Category List</h3>
    <a href="category_add.php" type="button" class="btn btn-primary">Thêm mới</a>

    <?php
        if(isset($_COOKIE['msg'])) { 
        ?>
        <div class="alert alert-success">
          <strong>Thành công!</strong> <?=$_COOKIE['msg']?>
        </div>
   <?php } ?>
<!--    
    <div class="alert alert-success">
      <strong>Thành công! </strong> Thông báo 
    </div> -->

    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach ($categories as $cate ) {
            # code...

       ?>
        <tr>
          <th scope="row"><?=$cate['id']?></th>
          <td><?=$cate['title']?></td>
          <td><?=$cate['description']?></td>
          <td>
          <a href="category_detail.php?id=<?=$cate['id']?>" type="button" class="btn btn-default">Xem</a>
            <a href="category_edit.php?id=<?=$cate['id']?>" type="button" class="btn btn-success">Sửa</a>
            <a href="category_delete.php?id=<?=$cate['id']?>" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>