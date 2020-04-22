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
//Load category -----------------------------------------------------------------------
//Truy Vấn câu lệnh
$query_authors  = "SELECT * FROM authors";

//Thực thi câu lệnh
$result_authors = $conn->query($query_authors);
//Tạo một mảng chứa dữ liệu
$authors = array();

while ($row = $result_authors->fetch_assoc()) {
	$authors[] = $row;
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
        <h3 align="center">Authors List</h3>
        <a href="authors_add.php" type="button" class="btn btn-primary">Thêm mới</a>

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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach ($authors as $cauthor ) {
            # code...

       ?>
                <tr>
                    <th scope="row"><?=$cauthor['id']?></th>
                    <td><?=$cauthor['name']?></td>
                    <td><?=$cauthor['email']?></td>
                    <td>
                        <a href="authors_detail.php?id=<?=$cauthor['id']?>" type="button"
                            class="btn btn-default">Xem</a>
                        <a href="authors_edit.php?id=<?=$cauthor['id']?>" type="button" class="btn btn-success">Sửa</a>
                        <a href="authors_delete.php?id=<?=$cauthor['id']?>" type="button"
                            class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>