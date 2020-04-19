<?php

require_once('../../connection.php');
//Load category -----------------------------------------------------------------------
//Truy Vấn câu lệnh
$id = $_GET['id'];
$query_posts  = "SELECT * FROM posts WHERE id =".$id  ;

//Thực thi câu lệnh
$posts = $conn->query($query_posts)->fetch_assoc();

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
   <h3 style="text-align: center" >Zent - Education And Technology Group</h3>
   <h3 style="text-align: center"  >Posts Detail</h3>
   <hr>
   <h2>Title: <?=$posts['title']?></h2>
   <p><b>Description: <?=$posts['description']?></b></p>
   <p><b>Thumbnail: <img src="<?=$posts['thumbnail']?>" width="200px"  ></b></p>
   <p><b>Contents: <?=$posts['contents']?></b></p>
   <p><b></b></p>
   <h2>Created_at: <?=$posts['created_at']?></h2>
   <h3><?=$posts['contents']?></h3>



   </div>
</body>
</html>