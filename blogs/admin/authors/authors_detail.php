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
//Load authors -----------------------------------------------------------------------
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_authors = "SELECT * FROM authors WHERE id =".$id  ;

//Thực thi câu lệnh
$authors = $conn->query($query_authors)->fetch_assoc();

//End Load authors
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
        <h3 style="text-align: center">Education And Technology</h3>
        <h3 style="text-align: center">Authors Detail</h3>
        <hr>
        <h2>Name: <?=$authors['name']?></h2>
        <h2>Email: <?=$authors['email']?></h2>


    </div>
</body>

</html>