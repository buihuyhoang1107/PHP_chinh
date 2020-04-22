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
//Load authors  -----------------------------------------------------------------------

//Lấy ra dữ liệu cần sửa
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_authors  = "SELECT * FROM authors WHERE id =".$id  ;

//Thực thi câu lệnh
$authors  = $conn->query($query_authors )->fetch_assoc();



//End Load authors 
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
        <h3 align="center">Update Authors Infomation</h3>
        <hr>
        <form action="authors_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$authors['id']?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$authors['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email"
                    value="<?=$authors['email']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>