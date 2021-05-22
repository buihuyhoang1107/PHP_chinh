<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//echo    $_SESSION['isLogin']; 
if(!isset($_SESSION['isLogin']) && $_SESSION['isLogin'] != true){
    header("Location: login.php");
}
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education And Technology</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">Education And Technology</h3>
        <h3 align="center">Add New Authors</h3>
        <hr>
        <?php
        if(isset($_COOKIE['msg'])) { 
        ?>
        <div class="alert alert-warning">
            <strong>Thất bại!</strong> Thêm mới không thành công !!!
        </div>
        <?php } ?>

        <form action="authors_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>

</html>